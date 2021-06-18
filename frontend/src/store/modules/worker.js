export default {
    state: {
        workersList: null,
        worker: null
    },

    mutations: {
        updateWorkersList(state, workersList)
        {
            state.workersList = workersList
        },

        updateWorker(state, worker)
        {
            state.worker = worker
        }
    },

    actions: {
        async fetchWorkersList(ctx)
        {
            return await axios
                .get(`http://t.com/api/workers/all/`)
                .then(res => {
                    ctx.commit('updateWorkersList', res.data)
                })
        },

        fetchWorker(ctx, id)
        {
            return axios
                .get(`http://t.com/api/workers/show/${id}`)
                .then(res => {
                    console.log(res.data)
                    ctx.commit('updateWorker', res.data)
                })
        }
    },

    getters: {
        getWorkersList(state)
        {
            return state.workersList
        },

        getWorker(state)
        {
            return state.worker
        }
    }
}