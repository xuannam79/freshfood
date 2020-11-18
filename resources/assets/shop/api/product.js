import axios from 'axios'

export function apiFeatureProducts() {
    return axios.get('/product-feature')
        .then(response => response)
        .catch(error => error)
}
