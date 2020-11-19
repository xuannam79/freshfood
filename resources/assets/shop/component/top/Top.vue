<template>
    <fragment>
        <div class="organic_food_wrapper">
            <Header/>
            <Slider/>
            <FeatureProduct v-on:previewProduct="setPreviewProduct"/>
            <div class="shipping_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="shipping_list d-flex justify-content-between flex-xs-column">
                                <div class="single_shipping_box d-flex">
                                    <div class="shipping_icon">
                                        <img src="/assets/shop/library/img/ship/1.png" alt="shipping icon">
                                    </div>
                                    <div class="shipping_content">
                                        <h6>Free Shipping On Order Over $120</h6>
                                        <p>Free shipping on all order</p>
                                    </div>
                                </div>
                                <div class="single_shipping_box one d-flex">
                                    <div class="shipping_icon">
                                        <img src="/assets/shop/library/img/ship/2.png" alt="shipping icon">
                                    </div>
                                    <div class="shipping_content">
                                        <h6>Money Return</h6>
                                        <p>Back guarantee under 7 days</p>
                                    </div>
                                </div>
                                <div class="single_shipping_box two d-flex">
                                    <div class="shipping_icon">
                                        <img src="/assets/shop/library/img/ship/3.png" alt="shipping icon">
                                    </div>
                                    <div class="shipping_content">
                                        <h6>Member Discount</h6>
                                        <p>Support online 24 hours a day</p>
                                    </div>
                                </div>
                                <div class="single_shipping_box three d-flex">
                                    <div class="shipping_icon">
                                        <img src="/assets/shop/library/img/ship/4.png" alt="shipping icon">
                                    </div>
                                    <div class="shipping_content">
                                        <h6>Online Support 24/7</h6>
                                        <p>Free shipping on all order</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ProductWithCategory/>
        </div>
        <PreviewProduct v-bind:previewProduct="previewProduct"/>
    </fragment>
<!--        <Index/>-->
<!--        <Footer/>-->
</template>
<script>
    import Vue from 'vue'
    import Fragment from 'vue-fragment'
    import Header from "@/component/header/Header";
    import Slider from "@/component/slider/Slider";
    import FeatureProduct from "@/component/top/FeatureProduct";
    import PreviewProduct from "@/component/popup/PreviewProduct";
    import ProductWithCategory from "@/component/top/ProductWithCategory";
    // import Footer from "@/component/footer/Footer";
    // import Index from "@/component/top/Index";

    Vue.use(Fragment.Plugin);

    export default {
        name: "Top",
        components: {
            Header,
            Slider,
            FeatureProduct,
            PreviewProduct,
            ProductWithCategory,
            // Index,
            // Footer,
        },
        data() {
            return {
                previewProduct: {},
            }
        },
        methods:  {
            setPreviewProduct(e) {
                this.previewProduct = e
            }
        }
    }
</script>
