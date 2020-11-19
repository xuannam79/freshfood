<template>
    <!--Features product area-->
    <div class="features_product pt-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3> Featured products </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features_product_active owl-carousel">
                    <div class="col-lg-2" v-for="product in productFeature" :key="product.id">
                        <div class="single__product">
                            <div class="single_product__inner">
                                <span class="new_badge">new</span>
                                <span class="discount_price" v-if="product.sales.length > 0">
                                    -{{ product.sales[0]['discount'] }}%
                                </span>
                                <div class="product_img">
                                    <a href="#">
                                        <img :src="'/assets/shop/library/img/product/' + product.picture">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <div class="produc_desc_info">
                                        <div class="product_title">
                                            <h4><a href="#">{{ product.name }}</a></h4>
                                        </div>
                                        <div class="product_price">
                                            <p>
                                                ${{
                                                    product.sales.length > 0
                                                        ? product.price - product.price*product.sales[0]['discount']/100
                                                        : product.price
                                                }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product__hover">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                            <li v-on:click="previewProduct(product)">
                                                <a class="cart-fore" href="#"
                                                   data-toggle="modal" data-target="#my_modal"
                                                   title="Quick View"><i class="ion-android-open"></i>
                                                </a>
                                            </li>
                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div >
                </div>
            </div>
        </div>
    </div>
    <!--Features product end-->
</template>

<script>
    import { mapGetters, mapState } from 'vuex'
    import { apiFeatureProducts } from '@/api/product'

    export default {
        name: "FeatureProduct",
        computed: {
            ...mapGetters({
                productFeature: 'product/product_feature',
            })
        },
        created() {
            this.getListFeature().then(() => {
                $('.features_product_active').owlCarousel({
                    loop: true,
                    nav: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                    items: 6,
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
                            items:3,
                            nav:false
                        },
                        992:{
                            items:4,
                            nav:false
                        },
                        1200:{
                            items:5,
                            nav:true,
                            loop:false
                        },
                        1600:{
                            items:7,
                            nav:true,
                            loop:false
                        }
                    }
                });
            });
        },
        methods: {
            async getListFeature() {
                let response = await apiFeatureProducts()
                if (response.status == 200) {
                    this.$store.dispatch('actionProductFeature', response.data)
                }
            },

            previewProduct(product) {
                this.$emit('previewProduct', product)
            }
        },
    }
</script>
