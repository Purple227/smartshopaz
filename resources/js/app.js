require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue/dist/vue.js';

import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate);

const PaystackPop = window.PaystackPop;

import { required, minLength, email, sameAs } from 'vuelidate/lib/validators'

const app = new Vue({

  el: '#app',

  data() {

    return{

    	registration: {
    		title: null,
    		name: '',
    		email: '',
    		phone: null,
    		password: '',
    		passwordConfirmation: null,
    		sponsorCode: '',
        RONCode: '',
        error: null,
        privacy: null
      },

      utilities: {
        sponsor: null,
        sponsorStatus: false,
        RONCode: null,
        RONCodeStatus: false,
        email: null,
        emailStatus: false
      },

      pagination: {
        nextPageUrl: null,
        previousPageUrl: null, 
        to: null,
        total: null,
      },

      buttonLoader: false,
      user: null,
      searchProductResult: null,
      searchProductQuery: '',
      product: null,
      productPerPage: 10,
      sortAlpha: 'Sort By Alpha',
      sumInCart: null,
      cart: null,
      singleProduct: null,
    }
  },


  validations: { // Validation calibrace open

    registration: {

      name: {
        required,
      },

      email: {
        required,
        email,
      },
      
      phone: {
        required,
      },

      sponsorCode: {
        required,
      },

      RONCode: {
        required,
      },

      password: {
        required,
        minLength: minLength(8)
      },

      passwordConfirmation: {
        sameAsPassword: sameAs('password')
      },

    }, // RegistrationDetails calibrace closes

  }, // Validation calibrace close


  watch: {
    // whenever question changes, this function will run
    productPerPage: function () {
      this.getProduct()
    },

    searchProductQuery: function () {
      this.searchProductData()
    },

    sortAlpha: function () {
      this.getProduct()
    },

  },

  mounted() {
    this.sponsorMethod()
    this.RONCodeMethod()
    this.emailMethod()
    this.searchProductData()
    this.getProduct()
    this.cartMethod()
  },

  methods: { //Method calibrace open

    payWithPaystack() {
      let self = this;
      self.buttonLoader = true
      var handler = PaystackPop.setup({
        key: "pk_test_430bead3adad039c17c6dcd47591eda01dbfcd32",
        email: this.registration.email,
        amount: 20000 * 100,
        currency: "NGN",
        ref: "" + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        metadata: {
          custom_fields: [
          {
            display_name: this.registration.name,
            variable_name: "mobile_number",
            value: this.registration.phone,
          },
          ],
        },
        callback: function(response) {
          self.registerSuperBuyer(response.reference)
        },
        onClose: function() {
          alert("window closed");
          
        },
      });
      handler.openIframe();
    },

    saveTransaction(transactionId, userID, name) {
    	let self = this;
      Vue.axios
      .post(
        "payment",
        {
          user_id: userID,
          amount: 20000,
          status: true,
          transaction_id: transactionId,
          name: name
        }
        )
      .then(() => {
        self.buttonLoader = false
        window.location = '/super-buyer'
      })
      .catch(function() {});
    },


    registerSuperBuyer(transactionId) {
      let self = this
      Vue.axios.post('register', {
        name: this.registration.name,
        title: this.registration.title,
        phone: this.registration.phone,
        password: this.registration.password,
        email: this.registration.email,
        sponsor_code: this.registration.sponsorCode,
        password_confirmation: this.registration.passwordConfirmation,
        privacy: this.registration.privacy,
        ron_code: this.registration.RONCode
      })
      .then(function (response) {
       self.user = response.data
       self.saveTransaction(transactionId, response.data.id, response.data.name);
     })
      .catch(function (error) {
        self.buttonLoader = false
        self.registration.error = error.response.data.errors
      });

    },

    sponsorMethod() {
      self = this
      if(this.registration.sponsorCode.length > 2) {
        axios.get('check-sponsor-code',{params: {sponsor_code: this.registration.sponsorCode}})
        .then(response => {
          this.utilities.sponsor = response.data
          this.utilities.sponsorStatus = true
        })
        .catch(function (error) {
          self.utilities.sponsorStatus = false
          self.utilities.sponsor = error.response.data
        });
      }
    },


    RONCodeMethod() {
      self = this
      if(this.registration.RONCode.length > 2) {
        axios.get('ron-code',{params: {ron_code: this.registration.RONCode}})
        .then(response => {
          this.utilities.RONCode = response.data
          this.utilities.RONCodeStatus = true
        })
        .catch(function (error) {
          self.utilities.RONCodeStatus = false
          self.utilities.RONCode = error.response.data
        });
      }
    },

    emailMethod() {
      self = this
      if(this.registration.email.length > 6) {
        axios.get('check-mail',{params: {email: this.registration.email}})
        .then(response => {
          this.utilities.email = response.data
          this.utilities.emailStatus = true
        })
        .catch(function (error) {
          self.utilities.emailStatus = false
          self.utilities.email = error.response.data
        });
      }
    },

    searchProductData() {
      if(this.searchProductQuery.length > 1) {
        axios.get('search-product',{params: {search_query: this.searchProductQuery}})
        .then(response => {
          this.searchProductResult = response.data
        });
      }
    },

  getProduct(api) {
    this.sortAlpha = this.sortAlpha == 'A to Z' ? 1 : 0;
     let api_url = api || "product-api"
    Vue.axios
    .get(api_url, {
      params: {
      pagination: this.productPerPage,
      alpha_sort: this.sortAlpha,
      }
    }).then((response) => {
      this.product = response.data.data

      this.pagination.nextPageUrl = response.data.next_page_url
      this.pagination.previousPageUrl =  response.data.prev_page_url

      this.pagination.to = response.data.to
      this.pagination.total = response.data.total

    }).catch(function (error) {
      // Code here
    })
  },

  addToCart(ID, price, name, count, image)
  {
    let item = JSON.parse(window.localStorage.getItem("cartItem"));
    item = item == null ? [] : JSON.parse(window.localStorage.getItem("cartItem"));
    item.push({ id:ID, price: parseFloat(price), name: name, count: count, image:image })
    window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
    this.cartMethod();
  },

  removeFromCart(ID) {
    let item = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    let index = item.findIndex(obj => obj.id == ID)
    item.splice(index, 1);
    window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
    this.cartMethod();
  },

  cartMethod() {
    this.cart = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    let allPrice =  this.cart == null ? null : this.cart.map(obj => obj.price );
    this.sumInCart = allPrice == null ? null : allPrice.reduce((a, b) => a + b ,0)
  },

  singleProductMethod(ID) {
    self = this
      axios.get(`single-product/${ID}`)
      .then(response => {
        this.singleProduct = response.data
      })
  },

  itemCounterMethod(ID, price, name, count) {
    let item = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    let index = item.findIndex(obj => obj.id == ID)
    item[index].id = ID
    item[index].price = price
    item[index].name = name
    item[index].count = count
    window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
    this.cartMethod()
  },

  }, //Method calibrace close

});

