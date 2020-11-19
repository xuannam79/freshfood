import Vuex from "vuex"
import Vue from 'vue'
import product from "./product";
import category from "./category";

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        product,
        category,
    }
})

export default store
