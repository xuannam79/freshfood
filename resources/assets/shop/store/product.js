const PRODUCT_FEATURE = 'product_feature'

const state = {
    product_feature: [],
}

const mutations = {
    [PRODUCT_FEATURE] (state, products) {
        return state.product_feature = products
    }
}

const actions = {
      actionProductFeature({commit}, data) {
        return commit(PRODUCT_FEATURE, data)
    }
}

const getters = {
    product_feature: state => {
        return state.product_feature
    },
}

export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters,
}
