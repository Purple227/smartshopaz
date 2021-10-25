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

      buttonLoader: false,
      user: null,
      searchProductResult: null,
      searchProductQuery: ''
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

  mounted() {
    this.sponsorMethod()
    this.RONCodeMethod()
    this.emailMethod()
    this.searchProductData()
  },

  methods: { //Method calibrace open

    payWithPaystack() {
      let self = this;
      self.buttonLoader = true
      var handler = PaystackPop.setup({
        key: "pk_test_2898da550ba0afd657e6e4ac70a983285d2af400",
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

  }, //Method calibrace close

});

