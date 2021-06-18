export default {
    state: {
        percentsList: null
    },

    mutations: {
        updatePercentsList(state, percentsList)
        {
            state.percentsList = percentsList
        }
    },

    actions: {
        async fetchPercentsList(ctx)
        {
            return await axios
                .get(`http://t.com/api/percents/all/`)
                .then(res => {
                    ctx.commit('updatePercentsList', res.data)
                })
        }
    },

    getters: {
        getPercentsList(state)
        {
            return state.percentsList
        }
    }
}