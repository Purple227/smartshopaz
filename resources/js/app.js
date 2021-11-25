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

    el: '#layout-wrapper',

    data() {

        return {

            registration: {
                title: null,
                firstName: '',
                lastName: '',
                email: '',
                userName: '',
                phone: null,
                password: '',
                passwordConfirmation: null,
                sponsorCode: '',
                RONCode: '',
                error: null,
                privacy: null,
                dateOfBirth: '',
                gender: '',
                address: '',
                LGA: '',
                state: '',
                country: '',
                paymentMethod: null
            },

            productMultiOption: [{
                variationName: null,
                weight: null,
                mainPrice: null,
                regularPrice: null,
                superBuyerPrice: null
            }],

            directDowline: [],

            utilities: {
                sponsor: null,
                sponsorStatus: false,
                RONCode: null,
                RONCodeStatus: false,
                email: null,
                emailStatus: false,
                sponsorUserDetail: null,
                userName: null,
                userNameStatus: false,
                resetPassword: null,
                passwordResetEmailSender: null
            },

            pagination: {
                nextPageUrl: null,
                previousPageUrl: null,
                to: null,
                total: null,
            },

            productForm: {
                title: '',
                discount: '',
                categoryID: null,
                brandID: '',
                stock: '',
                mainPrice: '',
                regularPrice: '',
                superBuyerPrice: '',
                description: '',
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
            registerFee: null,
            registerPercent: null,
            adminCategory: null,
            adminBrand: null,
            superBuyerProduct: null,
            deliveryFee: '',
            itemInCart: '',
            ageStatus: false,
            dropdownToggle: false,
            dropdownToggles: false,
            geneationDownlineIndex: 0,
            sidebarChecker: false
        }
    },


    validations: { // Validation calibrace open

        registration: {

            firstName: {
                required,
            },

            userName: {
                required
            },

            lastName: {
                required,
            },

            LGA: {
                required
            },

            gender: {
                required,
            },

            country: {
                required,
            },

            email: {
                required,
                email,
            },

            dateOfBirth: {
                required,
            },

            sponsorCode: {
                required,
            },

            RONCode: {
                required,
            },

            state: {
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
        // whenever each variable changes, this function will run
        'productPerPage': function() {
            this.getProduct()
        },

        'searchProductQuery': function() {
            this.searchProductData()
        },

        'sortAlpha': function() {
            this.getProduct()
        },

        'registration.email': function() {
            this.emailMethod()
        },

        'registration.userName': function() {
            this.usernameMethod()
        },

        'registration.sponsorCode': function() {
            this.sponsorMethod()
        },

        'registration.RONCode': function() {
            this.RONCodeMethod()
        }

    },

    mounted() {
        this.getDirectDownline()
        this.sponsorMethod()
        this.RONCodeMethod()
        this.emailMethod()
        this.searchProductData()
        this.getProduct()
        this.cartMethod()
        this.getAdminBrand()
        this.getAdminCategory()
        this.userNameMethod()
        this.productSuperBuyer()
        this.getDeliveryFee()
        this.cartItemCount()
        this.getSetSuperBuyerDetail()
    },

    methods: { //Method calibrace open

        showSidebar() {
            if (this.sidebarChecker == false) {
                document.body.classList.add('sidebar-enable')
            } else {
                document.body.classList.add('')
            }
        },


        getDirectDownline(id) {
            let taken_id = id || null
            self = this
            axios.get('direct-downline-api', { params: { id: taken_id } })
                .then(response => {
                    this.directDowline.push(response.data)
                })
                .catch(function() {});
        },

        updateGenerationView() {
            this.geneationDownlineIndex++;
        },

        addMultiOption() {
            this.productMultiOption.push({
                variationName: null,
                weight: null,
                mainPrice: null,
                regularPrice: null,
                superBuyerPrice: null
            })
        },

        removeMultiOption(index) {
            this.productMultiOption.splice(index, 1)
        },

        payWithPaystack() {
            let self = this;
            self.buttonLoader = true
            var handler = PaystackPop.setup({
                key: "pk_test_430bead3adad039c17c6dcd47591eda01dbfcd32",
                email: this.registration.email,
                amount: this.registerFee * 100,
                currency: "NGN",
                ref: "" + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [{
                        display_name: this.registration.name,
                        variable_name: "mobile_number",
                        value: this.registration.phone,
                    }, ],
                },
                callback: function(response) {
                    self.registerSuperBuyer(response.reference)
                },
                onClose: function() {
                    alert("window closed");
                    self.buttonLoader = false
                },
            });
            handler.openIframe();
        },

        placeOrder(transactionID, userID, name, totalPrice, accountType, payment, quantity) {
            let orderDetail = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
            let self = this;
            Vue.axios
                .post(
                    "place-order", {
                        user_id: userID,
                        total_price: totalPrice,
                        account_type: accountType,
                        payment: payment,
                        quantity: quantity,
                        payment_method: paymentMethod,
                        order_detail: orderDetail
                    }
                )
                .then(() => {
                    window.localStorage.removeItem('cartItem')
                    self.saveTransaction(transactionID, userID, name, 1)
                })
                .catch(function() {});
        },

        cartCheckout(userID, name, email, totalPrice, accountType, phone, payment, quantity) {
            let self = this;
            var handler = PaystackPop.setup({
                key: "pk_test_430bead3adad039c17c6dcd47591eda01dbfcd32",
                email: email,
                amount: totalPrice * 100,
                currency: "NGN",
                ref: "" + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [{
                        display_name: "Mobile_number",
                        variable_name: "mobile_number",
                        value: phone,
                    }, ],
                },
                callback: function(response) {
                    self.placeOrder(response.reference, userID, name, totalPrice, accountType, payment, quantity)
                },
                onClose: function() {
                    alert("window closed");
                },
            });
            handler.openIframe();
        },

        saveTransaction(transactionID, userID, name, redirectLink) {
            let self = this;
            Vue.axios
                .post(
                    "payment", {
                        user_id: userID,
                        amount: this.registerFee,
                        status: true,
                        transaction_id: transactionID,
                        name: name,
                    }
                )
                .then(() => {
                    self.buttonLoader = false
                    if (redirectLink == true) {
                        window.location = '/super-buyer/orders'
                    } else {
                        window.location = '/super-buyer/success'
                    }
                })
                .catch(function() {});
        },

        sendResetpassword() {
            let self = this;
            Vue.axios
                .post(
                    "send-reset-password", {
                        username: this.registration.userName,
                    }
                )
                .then(() => {
                    self.utilities.passwordResetEmailSender = true
                })
                .catch(function() {
                    self.utilities.passwordResetEmailSender = false
                });
        },

        saveProduct() {
            let self = this;
            Vue.axios
                .post(
                    "save-product", {
                        title: this.productForm.title,
                        discount: this.productForm.discount,
                        category_id: this.productForm.categoryID,
                        brand_id: this.productForm.brandID,
                        main_price: this.productForm.mainPrice,
                        regular_price: this.productForm.regularPrice,
                        super_buyer_price: this.productForm.superBuyerPrice,
                        weight: this.productForm.weight,
                        description: this.productForm.stock
                    }
                )
                .then(() => {
                    self.buttonLoader = false
                    window.location = '/super-buyer/success'
                })
                .catch(function() {});
        },

        registerSuperBuyer(transactionID) {
            let self = this
            Vue.axios.post('register', {
                    name: this.registration.lastName + ' ' + this.registration.firstName,
                    title: this.registration.title,
                    phone: this.registration.phone,
                    password: this.registration.password,
                    email: this.registration.email,
                    sponsor_code: this.registration.sponsorCode,
                    password_confirmation: this.registration.passwordConfirmation,
                    privacy: this.registration.privacy,
                    ron_code: this.registration.RONCode,
                    username: this.registration.userName,
                    wallet: this.registerFee,
                    register_percentage: this.registerPercent,
                    address: this.registration.address
                })
                .then(function(response) {
                    self.user = response.data
                    self.completeRegistration(transactionID, response.data.id, response.data.name)
                })
                .catch(function(error) {
                    self.buttonLoader = false
                    self.registration.error = error.response.data.errors
                });
        },

        completeRegistration(transactionID, userID, name) {
            let self = this
            Vue.axios.post('complete-register', {
                    date_of_birth: this.registration.dateOfBirth,
                    gender: this.registration.gender,
                    L_G_A: this.registration.LGA,
                    state: this.registration.state,
                    address: this.registration.address,
                    country: this.registration.country,
                    user_id: userID
                })
                .then(function() {
                    self.saveTransaction(transactionID, userID, name);
                })
                .catch(function(error) {
                    self.buttonLoader = false
                    self.registration.error = error.response.data.errors
                });

        },

        sponsorMethod() {
            self = this
            if (this.registration.sponsorCode.length > 2) {
                axios.get('check-sponsor-code', { params: { sponsor_code: this.registration.sponsorCode } })
                    .then(response => {
                        this.utilities.sponsor = response.data.status_message
                        this.getUser(response.data.sponsor_detail.user_id)
                        this.utilities.sponsorStatus = true
                    })
                    .catch(function(error) {
                        self.utilities.sponsorStatus = false
                        self.utilities.sponsor = error.response.data
                    });
            }
        },

        RONCodeMethod() {
            self = this
            if (this.registration.RONCode.length > 2) {
                axios.get('ron-code', { params: { ron_code: this.registration.RONCode } })
                    .then(response => {
                        this.utilities.RONCode = response.data
                        this.utilities.RONCodeStatus = true
                    })
                    .catch(function(error) {
                        self.utilities.RONCodeStatus = false
                        self.utilities.RONCode = error.response.data
                    });
            }
        },

        getUser(ID) {
            self = this
            axios.get(`user/${ID}`)
                .then(response => {
                    this.utilities.sponsorUserDetail = response.data
                })
                .catch(function() {
                    self.utilities.sponsorUserDetail = 'Unknown Sponsor'
                });
        },

        getSetSuperBuyerDetail() {
            self = this
            axios.get(`register-detail`)
                .then(response => {
                    this.registerFee = response.data.register_fee
                    this.registerPercent = response.data.register_fee_percentage
                })
        },

        getDeliveryFee() {
            self = this
            axios.get(`delivery-fee-api`)
                .then(response => {
                    this.deliveryFee = response.data
                })
        },

        getAdminCategory() {
            self = this
            axios.get(`list-categories-api`)
                .then(response => {
                    this.adminCategory = response.data
                })
        },

        getAdminBrand() {
            self = this
            axios.get(`list-brands-api`)
                .then(response => {
                    this.adminBrand = response.data
                })
        },

        productSuperBuyer() {
            self = this
            axios.get(`products-super-buyer`)
                .then(response => {
                    this.superBuyerProduct = response.data.data

                    this.pagination.nextPageUrl = response.data.next_page_url
                    this.pagination.previousPageUrl = response.data.prev_page_url

                    this.pagination.to = response.data.to
                    this.pagination.total = response.data.total
                })
        },

        emailMethod() {
            self = this
            if (this.registration.email.length > 6) {
                axios.get('check-mail', { params: { email: this.registration.email } })
                    .then(response => {
                        this.utilities.email = response.data
                        this.utilities.emailStatus = true
                    })
                    .catch(function(error) {
                        self.utilities.emailStatus = false
                        self.utilities.email = error.response.data
                    });
            }
        },

        userNameMethod() {
            self = this
            if (this.registration.userName.length > 2) {
                axios.get('check-username', { params: { username: this.registration.userName } })
                    .then(response => {
                        this.utilities.userName = response.data
                        this.utilities.userNameStatus = true
                        this.utilities.resetPassword = false;
                    })
                    .catch(function(error) {
                        self.utilities.userNameStatus = false
                        self.utilities.userName = error.response.data
                        self.utilities.resetPassword = true;
                    });
            }
        },

        searchProductData() {
            if (this.searchProductQuery.length > 1) {
                axios.get('search-product', { params: { search_query: this.searchProductQuery } })
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
                    this.pagination.previousPageUrl = response.data.prev_page_url

                    this.pagination.to = response.data.to
                    this.pagination.total = response.data.total

                }).catch(function(error) {
                    // Code here
                })
        },

        addToCart(ID, price, name, count, image) {
            let item = JSON.parse(window.localStorage.getItem("cartItem"));
            item = item == null ? [] : JSON.parse(window.localStorage.getItem("cartItem"));
            item.push({ id: ID, price: parseFloat(price), name: name, count: count, image: image })
            window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
            this.cartMethod();
            this.cartItemCount()
        },

        removeFromCart(ID) {
            let item = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
            let index = item.findIndex(obj => obj.id == ID)
            item.splice(index, 1);
            window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
            this.cartMethod();
            this.cartItemCount()
        },

        cartMethod() {
            this.cart = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
            let allPrice = this.cart == null ? null : this.cart.map(obj => obj.count * obj.price);
            this.sumInCart = allPrice == null ? null : allPrice.reduce((a, b) => a + b, 0)
        },

        cartItemCount() {
            this.cart = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
            let allItem = this.cart == null ? null : this.cart.map(obj => obj.count);
            this.itemInCart = allItem == null ? null : allItem.reduce((a, b) => parseInt(a) + parseInt(b), 0)
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
            this.cartItemCount()
        },

        ageChecker(birthday) {
            // it will accept two types of format yyyy-mm-dd and yyyy/mm/dd
            var optimizedBirthday = birthday.replace(/-/g, "/");

            //set date based on birthday at 01:00:00 hours GMT+0100 (CET)
            var myBirthday = new Date(optimizedBirthday);

            // set current day on 01:00:00 hours GMT+0100 (CET)
            var currentDate = new Date().toJSON().slice(0, 10) + ' 01:00:00';

            // calculate age comparing current date and borthday
            var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));

            if (myAge < 18) {
                this.ageStatus = false;
            } else {
                this.ageStatus = true;
            }
        }

    }, //Method calibrace close


});