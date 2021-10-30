
                <div id="app" class="row">
                  <div class="col-12 order-1 order-md-2">
                    <div class="website-search">
                      <div class="row no-gutters">
                        <div class="col-9 col-md-9 col-lg-9 col-xl-9">
                          <div class="search-input">
                            <input class="no-round-input no-border" id="myInput" @change="searchProductData" v-model="searchProductQuery" type="text" autocomplete="off" placeholder="What are you looking for?" onkeyup="myFunction()" >
                          </div>
                          <div class="categories-select_box">
                            <ul id="myUL">
                              <li v-for="(product, index) in searchProductResult" :key="index"> 
                                <a href="#"> @{{ product.title }}</a>  <span> in @{{ product.category == null ? '' : product.category.name }} </span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-3 col-md-3 col-lg-3 col-xl-3">
                          <button class="no-round-btn coffee">
                            <span class="hide-mobile">Search</span>
                            <img src="assets/images/blog/icon_search2.svg" style="filter: invert(200%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(400%) contrast(200%);" width="15px" alt="">
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
