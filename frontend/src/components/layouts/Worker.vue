<template>
  <span class="col-5">
    {{ name }} {{ surname }}
  </span>
  <span class="col-3">
    {{ percent }}
  </span>
  <input
      class="col-3"
      type="text"
      v-model="cash"
      @input="calcBaseRate"
  >
</template>

<script>

import {mapActions, mapGetters} from "vuex"

export default {
  name: "Worker",

  data() {
    return {
      cash: 0,
      rate: this.baseRate,
      percent: null,
      name: null,
      surname: null,
    }
  },

  props: ['id', 'baseRate'],

  emits: ['calcRate'],

  methods: {
    ...mapActions(['fetchWorker']),
    async fetchWorker()
    {
      axios
          .get(`http://t.com/api/workers/show/${this.id}`)
          .then(res => {
            this.name = res.data.name
            this.surname = res.data.surname
          })
    },
    async fetchPercent()
    {
      axios
          .get(`http://t.com/api/percents/show/${this.id}`)
          .then(res => {
            this.percent = res.data
          })
    },
    calcBaseRate()
    {
      let rate = Number(this.cash) / Number(this.percent)
      this.$emit('calcRate', rate)
    },
    calcCash()
    {
      this.cash = Number(this.percent) * Number(this.baseRate)
    },
  },

  computed: {
    ...mapGetters(['getWorker']),
  },

  watch: {
    baseRate: 'calcCash'
  },

  created() {
    this.fetchWorker();
    this.fetchPercent()
  }
}
</script>

<style scoped>

</style>