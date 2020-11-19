const CATEGORY_WITH_PRODUCT = 'category_with_product'

const state = {
    category_with_product: [],
}

const mutations = {
    [CATEGORY_WITH_PRODUCT] (state, categories) {
        return state.category_with_product = categories
    }
}

const actions = {
    actionCategoryWithProduct({commit}, data) {
        return commit(CATEGORY_WITH_PRODUCT, data)
    }
}

const getters = {
    category_with_product: state => {
        return state.category_with_product
    }
}

export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters,
}
