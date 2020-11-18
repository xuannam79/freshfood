<template>
    <div class="modal fade" id="my_modal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body shop">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="product-flags madal">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div :class="['tab-pane fade', { 'show active' : index === 0 }]"
                                             :id="'image-'+image.id" role="tabpanel"
                                             v-for="(image, index) in previewProduct.images" :key="image.id">
                                            <div class="product_tab_img">
                                                <a href="#">
                                                    <img :src="'/assets/shop/library/img/product/' + image.image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products_tab_button  modals">
                                        <ul class="nav product_navactive" role="tablist">
                                            <li v-for="(image, index) in previewProduct.images" :key="image.id">
                                                <a :class="['nav-link', {'active' : index === 0}]"
                                                   data-toggle="tab" :href="'#image-'+image.id"
                                                   role="tab" :aria-controls="'#image-'+image.id"
                                                   aria-selected="false">
                                                    <img :src="'/assets/shop/library/img/product/' + image.image">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="shop_reviews">
                                        <div class="demo_product">
                                            <h2>{{ previewProduct.name }}</h2>
                                        </div>
                                        <div class="current_price">
                                            <span class="regular"
                                                  v-if="previewProduct.sales && previewProduct.sales.length > 0">
                                                ${{ previewProduct.price }}
                                            </span>
                                            <span class="regular_price"
                                                  v-if="previewProduct.sales && previewProduct.sales.length > 0">
                                                ${{
                                                    previewProduct.price
                                                    - previewProduct.price
                                                    *previewProduct.sales[0]['discount']/100
                                                }}
                                            </span>
                                            <span class="regular_price" v-else>
                                                ${{ previewProduct.price }}
                                            </span>
                                        </div>
                                        <div class="product_information product_modal">
                                            <br>
                                            <div class="product_variants">
                                                <div class="product_variants_item modal_item">
                                                    <span class="control_label">Size</span>
                                                    <select id="group_1">
                                                        <option value="1">S</option>
                                                        <option value="2" selected="selected">M</option>
                                                        <option value="3">L</option>
                                                    </select>
                                                </div>

                                                <div class="quickview_plus_minus">
                                                    <span class="control_label">Quantity</span>
                                                    <div class="quickview_plus_minus_inner">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                        <div class="add_button add_modal">
                                                            <button type="submit"> Add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="cart_description">
                                                    <p>{{ previewProduct.description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="social-share">
                                    <h3>Share this product</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PreviewProduct",
        props: ['previewProduct'],
    }
</script>
