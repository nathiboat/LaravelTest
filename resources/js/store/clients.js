import axios from "axios"

export default {
    namespaced: true,

    state: {
        clients: []
    },

    getters: {
        clients (state) {
            return state.clients
        }
    },

    mutations: {
        PUSH_CLIENTS(state, data) {

            state.clients.push(...data)
        }
    },

    actions: {
        async getClients ({ commit }) {
            let response = await axios.get('/clients')

            commit('PUSH_CLIENTS', response.data.data)
        }
    }
}
