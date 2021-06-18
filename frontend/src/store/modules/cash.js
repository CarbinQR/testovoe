export default {
    state: {
        cashesList: null
    },

    mutations: {
        updateCashesList(state, cashesList)
        {
            state.cashesList = cashesList
        }
    },

    actions: {
        async fetchCashesList(ctx)
        {
            return await axios
                .get(`http://t.com/api/cashes/all/`)
                .then(res => {
                    ctx.commit('updateCashesList', res.data)
                })
        }
    },

    getters: {
        getCashesList(state)
        {
            return state.cashesList
        }
    }
}