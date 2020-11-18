import Vuex from "vuex"
import Vue from 'vue'
import product from "./product";

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        product
    }
})

export default store
