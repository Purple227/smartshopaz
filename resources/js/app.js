require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue/dist/vue.js';

import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate);

import AddProduct from './components/AddProduct.vue';
Vue.component('add-product', AddProduct);

//Vue.component('add-product', require('./components/AddProduct.vue'));

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

            order: {
                name: null,
                address: null,
                state: null,
                phone: null,
                country: null
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
            superBuyerProduct: null,
            deliveryFee: '',
            itemInCart: '',
            ageStatus: false,
            dropdownToggle: false,
            dropdownToggles: false,
            geneationDownlineIndex: 0,
            sidebarChecker: false,
            superbuyerSingleProduct: null,
            selectedVariation: null,
            mainPriceSum: null
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

        order: {
            state: {
                required,
            },

            address: {
                required,
            },

            country: {
                required,
            },

            name: {
                required,
            },

            phone: {
                required,
            }
        },

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
            this.userNameMethod()
        },

        'registration.sponsorCode': function() {
            this.sponsorMethod()
        },

        'registration.RONCode': function() {
            this.RONCodeMethod()
        },

        /*         'registration.dateOfBirth': function() {
                    this.ageChecker()
                } */

    },

    mounted() {
        this.getSuperBuyerSingleProduct()
        this.getDirectDownline()
        this.sponsorMethod()
        this.RONCodeMethod()
        this.emailMethod()
        this.searchProductData()
        this.getProduct()
        this.cartMethod()
        this.userNameMethod()
        this.productSuperBuyer()
        this.getDeliveryFee()
        this.cartItemCount()
        this.getSetSuperBuyerDetail()
        this.ageChecker()
        this.mainSumMethod()
    },

    methods: { //Method calibrace open

        getSuperBuyerSingleProduct() {
            let currentURI = window.location.href
            const lastSegment = currentURI.split("/").pop();
            self = this
            axios.get('/api/single-product-superbuyer', { params: { slug: lastSegment } })
                .then(response => {
                    this.superbuyerSingleProduct = response.data
                })
                .catch(function() {});
        },


        showSidebar() {
            document.body.classList.add('sidebar-enable')
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
                firstname: this.registration.firstName,
                lastname: this.registration.lastName,
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

        placeOrder(transactionID, userID, totalPrice, payment, quantity) {
            let orderDetail = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
            let self = this;
            Vue.axios
                .post(
                    "place-order", {
                        user_id: userID,
                        total_price: totalPrice,
                        payment: payment,
                        quantity: quantity,
                        order_detail: orderDetail,
                        address: this.order.address,
                        state: this.order.state,
                        name: this.order.name,
                        phone: this.order.phone,
                        user_id: userID,
                        amount: totalPrice,
                        status: true,
                        transaction_id: transactionID,
                        name: this.order.name,
                        main_price_sum: this.mainPriceSum,
                    }
                )
                .then(() => {
                    window.localStorage.removeItem('cartItem')
                    self.buttonLoader = false
                    window.location = '/super-buyer/orders'
                })
                .catch(function() {});
        },

        saveTransactionRegister(transactionID, userID, name) {
            let self = this;
            Vue.axios
                .post(
                    "payment", {
                        user_id: userID,
                        amount: this.registerFee,
                        status: true,
                        transaction_id: transactionID,
                        name: name,
                        transaction_type: 'registration_fee'
                    }
                )
                .then(() => {
                    self.buttonLoader = false
                    window.location = '/super-buyer/success'
                })
                .catch(function() {});
        },

        sendResetpassword() {
            let self = this;
            self.buttonLoader = true
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
                    self.buttonLoader = false
                });
        },

        saveProduct() {
            let self = this;
            Vue.axios
                .post(
                    "add-product", {
                        title: this.productForm.title,
                        discount: this.productForm.discount,
                        category_id: this.productForm.categoryID,
                        brand_id: this.productForm.brandID,
                        main_price: this.productForm.mainPrice,
                        regular_price: this.productForm.regularPrice,
                        super_buyer_price: this.productForm.superBuyerPrice,
                        weight: this.productForm.weight,
                        description: this.productForm.stock,
                        multi_product_option: this.productMultiOption
                    }
                )
                .then(() => {
                    self.buttonLoader = false
                    window.location = '/admin/list-products'
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
                    address: this.registration.address,
                    date_of_birth: this.registration.dateOfBirth,
                    L_G_A: this.registration.LGA,
                    state: this.registration.state,
                    country: this.registration.country,
                    transaction_id: transactionID,
                    gender: this.registration.gender

                })
                .then(function(response) {
                    window.location = '/super-buyer/success'
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
            axios.get('ron-code', { params: { ron_code: this.registration.RONCode } })
                .then(response => {
                    this.utilities.RONCode = response.data
                    this.utilities.RONCodeStatus = true
                })
                .catch(function(error) {
                    self.utilities.RONCodeStatus = false
                    self.utilities.RONCode = error.response.data
                });
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
            axios.get(`/super-buyer/delivery-fee-api`)
                .then(response => {
                    this.deliveryFee = response.data
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

        addToCart(ID, price, name, count, image, mainPrice) {
            console.log(ID)
            let item = JSON.parse(window.localStorage.getItem("cartItem"));
            item = item == null ? [] : JSON.parse(window.localStorage.getItem("cartItem"));
            item.push({
                id: ID,
                price: parseFloat(price),
                name: name,
                count: count,
                image: image,
                mainPrice: parseFloat(mainPrice)
            });
            window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
            this.cartMethod();
            this.cartItemCount()
            this.mainSumMethod()
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

        mainSumMethod() {
            this.cart = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
            let allMainPrice = this.cart == null ? null : this.cart.map(obj => obj.count * obj.mainPrice);
            this.mainPriceSum = allMainPrice == null ? null : allMainPrice.reduce((a, b) => a + b, 0)
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
            if (birthday != null) { // Condition calibrace open
                console.log('insane')
                    // it will accept two types of format yyyy-mm-dd and yyyy/mm/dd
                var optimizedBirthday = birthday.replace(/-/g, "/");

                //set date based on birthday at 01:00:00 hours GMT+0100 (CET)
                var myBirthday = new Date(optimizedBirthday);

                // set current day on 01:00:00 hours GMT+0100 (CET)
                var currentDate = new Date().toJSON().slice(0, 10) + ' 01:00:00';

                // calculate age comparing current date and borthday
                var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));

                console.log(myAge)

                if (myAge < 18) {
                    this.ageStatus = false;
                } else {
                    this.ageStatus = true;
                }
            } //Condition calibrace close
        },

        hollaCheckout(userID, email, totalPrice, payment, quantity) {
            let self = this;
            var handler = PaystackPop.setup({
                key: "pk_test_430bead3adad039c17c6dcd47591eda01dbfcd32",
                email: email,
                amount: totalPrice * 100,
                firstname: this.order.name,
                currency: "NGN",
                ref: "" + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [{
                        display_name: "Mobile_number",
                        variable_name: "mobile_number",
                        value: this.order.phone,
                    }, ],
                },
                callback: function(response) {
                    self.placeOrder(response.reference, userID, totalPrice, payment, quantity)
                },
                onClose: function() {
                    alert("window closed");
                },
            });
            handler.openIframe();
        },


    }, //Method calibrace close

});