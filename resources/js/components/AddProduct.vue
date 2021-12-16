<template>
  <div class="card-body p-3 mt-5">
    <div class="form-group">
      <label for="to-input">Product Name</label>
      <input
        type="text"
        name="title"
        v-model="productForm.title"
        class="form-control"
        id="to-input"
        placeholder="Title"
      />
    </div>

    <div class="form-group">
      <label for="subject-input">Discount(%)</label>
      <input
        type="number"
        v-model="productForm.discount"
        name="discount"
        class="form-control"
        placeholder="Discount"
      />
    </div>

    <div class="form-group">
      <label>Categories</label>
      <select class="form-control" v-model="productForm.categoryID">
        <option
          v-for="category in adminCategory"
          :value="category.id"
          :key="category.id"
        >
          {{ category.name }}
        </option>
      </select>
    </div>

    <div class="form-group">
      <label>Brand</label>
      <select class="form-control" v-model="productForm.brandID">
        <option v-for="brand in adminBrand" :value="brand.id" :key="brand.id">
          {{ brand.name }}
        </option>
      </select>
    </div>

    <div class="form-group">
      <label>Status</label>
      <select
        class="form-control"
        id="siteID"
        name="stock"
        v-model="productForm.stock"
      >
        <option value="">Select...</option>
        <option value="instock">In stock</option>
        <option value="outstock">Out of stock</option>
      </select>
    </div>

    <div class="row mb-3">
      <div class="col-sm-12">
        <div class="">
          <h5 class="font-size-14 mb-3">Product Type</h5>
          <div class="custom-control custom-radio custom-control-inline">
            <input
              type="radio"
              id="custominlineRadio1"
              name="type"
              class="custom-control-input"
              value="single"
              checked
            />
            <label class="custom-control-label" for="custominlineRadio1"
              >Single Option</label
            >
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input
              type="radio"
              id="custominlineRadio2"
              name="type"
              class="custom-control-input"
              value="multi"
            />
            <label class="custom-control-label" for="custominlineRadio2"
              >Multiple options</label
            >
          </div>
        </div>
      </div>
    </div>

    <div class="row types" id="Typesingle">
      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Main Price(₦)</label>
        <input
          type="number"
          name="main_price"
          v-model="productForm.mainPrice"
          class="form-control"
          id="validationCustom01"
          placeholder="e.g: 20,000"
          value=""
        />
        <div class="valid-feedback">Looks good!</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Regular Price(₦)</label>
        <input
          type="number"
          name="regular_price"
          v-model="productForm.regularPrice"
          class="form-control"
          id="validationCustom02"
          placeholder="e.g: 23,000"
          value=""
        />
        <div class="valid-feedback">Looks good!</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom02">SuperBuyers Price(₦)</label>
        <input
          type="number"
          name="super_buyer_price"
          v-model="productForm.superBuyerPrice"
          class="form-control"
          id="validationCustom02"
          placeholder="e.g: 20,100"
          value=""
        />
        <div class="valid-feedback">Looks good!</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Weight(kg)</label>
        <input
          type="number"
          v-model="productForm.weight"
          name="weight"
          class="form-control"
          id="validationCustom01"
          placeholder="Weight"
          value=""
        />
        <div class="valid-feedback">Looks good!</div>
      </div>
    </div>

    <div class="types" id="Typemulti" style="display: none">
      <div
        class="row"
        v-for="(multi, index) in productMultiOption"
        :key="index"
      >
        <p>{{ index + 1 }}</p>
        <div class="col-md-1 mb-2">
          <p @click="addMultiOption">add</p>
          <p @click="removeMultiOption(index)" v-if="index >= 1">remove</p>
        </div>

        <div class="col-md-3 mb-3">
          <label for="validationCustom01">Variation Name</label>
          <input
            type="text"
            name="variation_name"
            v-model="multi.variationName"
            class="form-control"
            id="validationCustom01"
            placeholder="e.g: Adidas"
            value=""
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom01">Weight(kg)</label>
          <input
            type="number"
            name="multiple_weight"
            v-model="multi.weight"
            class="form-control"
            id="validationCustom01"
            placeholder="e.g 20"
            value=""
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationCustom01">Main Price(₦)</label>
          <input
            type="number"
            name="multiple_main_price"
            v-model="multi.mainPrice"
            class="form-control"
            id="validationCustom01"
            placeholder="e.g: 20,000"
            value=""
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationCustom02">Regular Price(₦)</label>
          <input
            type="number"
            name="multiple_regular_price"
            v-model="multi.regularPrice"
            class="form-control"
            id="validationCustom02"
            placeholder="e.g: 23,000"
            value=""
          />
          <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="col-md-2 mb-3">
          <label for="validationCustom02">SuperBuyers Price(₦)</label>
          <input
            type="number"
            name="multiple_super_buyer_price"
            v-model="multi.superBuyerPrice"
            class="form-control"
            id="validationCustom02"
            placeholder="e.g: 20,100"
            value=""
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="to-input"> Product Description </label>
      <textarea
        name="description"
        v-model="productForm.description"
        class="form-control"
        rows="3"
      >
      </textarea>
    </div>

    <div class="form-group">
      <h4 class="header-title">Select Pictures</h4>

      <div>
        <div class="dropzone">
          <div class="fallback">
            <input
              type="file"
              name="banner_1"
              id="file-ip-1"
              accept="image/*"
              onchange="showPreview(event);"
              @change="fileUpload"
            />
            <button
              class="btn btn-sm btn-primary"
              type="button"
              onclick="document.getElementById('image').click()"
            >
              Choose Images
            </button>
            <div
              class="card-body d-flex flex-wrap justify-content-start"
              id="container"
            >
              <!-- image preview -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="btn-toolbar form-group mb-0">
      <div class="">
        <button
          type="submit"
          class="btn btn-primary waves-effect waves-light"
          @click="saveProduct"
          :disabled="$v.productForm.$invalid == true"
        >
          <span>Add</span> <i class="mdi mdi-card-plus-outline ml-1"></i>
        </button>
      </div>
    </div>
  </div>
</template>



<script>
import { required } from "vuelidate/lib/validators";

export default {
  data: () => ({
    productMultiOption: [
      {
        variationName: null,
        weight: null,
        mainPrice: null,
        regularPrice: null,
        superBuyerPrice: null,
      },
    ],

    productForm: {
      title: "",
      discount: "",
      categoryID: null,
      brandID: "",
      stock: "",
      mainPrice: "",
      regularPrice: "",
      superBuyerPrice: "",
      description: "",
      imageName: "",
      imageFile: "",
    },

    adminCategory: null,
    adminBrand: null,
  }),

  validations: {
    // Product Form

    productForm: {
      title: {
        required,
      },
      mainPrice: {
        required,
      },

      description: {
        required,
      },
    }, // Product Form
  }, //Validation calibrace close

  mounted() {
    this.getAdminCategory();
    this.getAdminBrand();
  },

  methods: {
    fileUpload(e) {
      this.productForm.imageName = e.target.files[0].name;
      this.productForm.imageFile = e.target.files[0];
    },

    addMultiOption() {
      this.productMultiOption.push({
        variationName: null,
        weight: null,
        mainPrice: null,
        regularPrice: null,
        superBuyerPrice: null,
      });
    },

    removeMultiOption(index) {
      this.productMultiOption.splice(index, 1);
    },

    getAdminCategory() {
      self = this;
      axios.get(`list-categories-api`).then((response) => {
        this.adminCategory = response.data;
      });
    },

    getAdminBrand() {
      self = this;
      axios.get(`list-brands-api`).then((response) => {
        this.adminBrand = response.data;
      });
    },

    saveProduct() {
      let data = new FormData();
      data.append("_method", "post");
      data.append("title", this.productForm.title);
      data.append("discount", this.productForm.discount);
      data.append("category_id", this.productForm.categoryID);
      data.append("brand_id", this.productForm.brandID);
      data.append("main_price", this.productForm.mainPrice);
      data.append("regular_price", this.productForm.regularPrice);
      data.append("super_buyer_price", this.productForm.superBuyerPrice);
      data.append("weight", this.productForm.weight);
      data.append("description", this.productForm.description);
      data.append("file", this.productForm.imageFile);

      let self = this;
      axios
        .post("add-product", data)
        .then((response) => {
          this.saveProductMultiple(response.data);
        })
        .catch(function () {});
    },

    saveProductMultiple(ID) {
      let self = this;
      axios
        .post("add-product-multiple", {
          multi_product_option: this.productMultiOption,
          id: ID,
        })
        .then(() => {
          window.location = "/admin/list-products";
        })
        .catch(function () {});
    },
  }, // Method calibrace close
};
</script>