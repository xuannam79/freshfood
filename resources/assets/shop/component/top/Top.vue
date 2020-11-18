<template>
    <fragment>
        <div class="organic_food_wrapper">
            <Header/>
            <Slider/>
            <FeatureProduct v-on:previewProduct="setPreviewProduct"/>
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
