<template>
    <!--shop product area start-->
    <div class="shop_product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="shop_product_head d-flex justify-content-between mb-30">
                        <div class="section_title space_2 text-left">
                            <h3>shop</h3>
                        </div>
                        <div class="home_shop_product text-right">
                            <ul class="product-tab-list nav d-flex flex-wrap justify-content-end" role="tablist">
                                <li v-for="(item, index) in categoryWithProduct">
                                    <a :class="{ 'active' : index === 0 }"
                                       :href="'#category-'+item.id"
                                       data-toggle="tab"
                                       role="tab"
                                       :aria-selected="{ 'true' : index === 0 }"
                                       :aria-controls="'#category-'+item.id">
                                        {{ item.name }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="shop_larg_product">
                        <div class="single__product_2">
                            <div class="product_img">
                                <a href="#">
                                    <img src="/assets/shop/library/img/product/big-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="product_title">
                                    <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                </div>
                                <div class="product_price">
                                    <p>$65.66</p>
                                </div>
                                <div class="product-add-to-cart">
                                    <a href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="tab-content">
                        <div :class="['tab-pane fade', { 'active show' : index === 0 }]" :id="'category-'+item.id"
                             role="tabpanel" v-for="(item, index) in categoryWithProduct">
                            <div class="row">
                                <div class="shop-product_list owl-carousel">
                                    <div class="col-12" v-for="group in item.group_products">
                                        <div class="shop_single_prduct_item">
                                            <div class="single__product" v-for="product in group">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img :src="'/assets/shop/library/img/product/' + product.picture" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">{{ product.name }}</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$90.66</p>
                                                            </div>
                                                        </div>

                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shop product area end-->
</template>

<script>
    import { mapGetters } from 'vuex'
    import {apiCategoryWithProduct} from "@/api/category";
    export default {
        name: "ProductWithCategory",
        computed: {
            ...mapGetters({
                categoryWithProduct: 'category/category_with_product'
            }),
            abc() {
                return this.categoryWithProduct;
            }
        },
        created() {
            this.getCategoryWithProduct().then(() => {
                    $('.shop-product_list').owlCarousel({
                        loop: true,
                        nav: false,
                        autoplay: false,
                        autoplayTimeout: 5000,
                        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                        items: 5,
                        responsiveClass:true,
                        responsive:{
                            0:{
                                items:1,
                                nav:true
                            },
                            480:{
                                items:2,
                                nav:true
                            },
                            768:{
                                items:2,
                                nav:false
                            },
                            992:{
                                items:3,
                                nav:false
                            },

                            1300:{
                                items:4,
                                nav:true,
                                loop:false
                            },
                            1600:{
                                items:5,
                                nav:true,
                                loop:false
                            }

                        }
                    });
                })
        },
        methods: {
            async getCategoryWithProduct() {
                let response = await apiCategoryWithProduct()
                if (response.status == 200) {
                    // console.log(response.data)
                    this.$store.dispatch('category/actionCategoryWithProduct', response.data)
                }
            }
        }
    }
</script>
