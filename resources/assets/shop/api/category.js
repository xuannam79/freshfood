import axios from 'axios'

export function apiCategoryWithProduct() {
    return axios.get('/category-product')
        .then(response => response)
        .catch(error => error)
}
