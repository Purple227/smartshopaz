require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue/dist/vue.js';

import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);

const PaystackPop = window.PaystackPop;

const app = new Vue({

  el: '#app',

  data() {

    return{

    	registration: {
    		title: null,
    		name: null,
    		email: null,
    		phone: null,
    		password: '',
    		passwordConfirmation: null,
    		sponsorID: '',
        accountType: 'super-buyer',
        error: null
    	},

      buttonLoader: false,
    	user: null,

    }
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
          self.register(response.reference)
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


  register(transactionId) {
    let self = this
    Vue.axios.post('register', {
      account_type: this.registration.accountType,
      name: this.registration.name,
      title: this.registration.title,
      phone: this.registration.phone,
      password: this.registration.password,
      email: this.registration.email,
      sponsor_id: this.registration.sponsorID,
      password_confirmation: this.registration.passwordConfirmation,
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

  }, //Method calibrace close

computed: {

    errorChecker: function () {
      if (this.registration.name != null && 
          this.registration.password.length > 7 &&
           this.registration.password == this.registration.passwordConfirmation &&
           this.registration.sponsorID.length > 3 ) {
        return false
      }
      return true
    }

  }

  });

