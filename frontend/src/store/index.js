import { createStore } from 'vuex'
import worker from "@/store/modules/worker"
import percent from "@/store/modules/percent"
import cash from "@/store/modules/cash"

export default createStore({
  modules: {
    worker,
    percent,
    cash
  }
})
