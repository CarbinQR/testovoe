<template>
  <div>
    <label>
      <span>Базовая ставка:</span>
      <input
          type="text"
          v-model="baseRate">
    </label>
    <ul class="list">
      <li>
        <ul class="row">
          <li class="col-5">Имя</li>
          <li class="col-3">Ставка</li>
          <li class="col-3">К выплате</li>
        </ul>
      </li>
      <li
          class="row"
          v-for="(worker, index) in getCashesList"
          :key="index"
      >
        <Worker
            :id = "worker"
            :baseRate = "baseRate"
            @calcRate = "calcBaseRate"
        />
      </li>
    </ul>
  </div>
</template>

<script>

import {mapActions, mapGetters} from 'vuex';
import Worker from "@/components/layouts/Worker";

export default {
  name: "MainPage",

  data() {
    return {
      baseRate: 0,
    }
  },

  components: {
    Worker,
  },

  methods: {
    ...mapActions(['fetchCashesList']),
    calcBaseRate(rate)
    {
      this.baseRate = rate;
    },
  },

  computed: {
    ...mapGetters(['getCashesList']),

  },

  created() {
    this.fetchCashesList()
  }
}
</script>

<style scoped lang="scss">

  input {
    margin-left: 20px;
  }

  .list {
    margin-top: 20px;

    &>li {
      margin-top: 10px;
    }
  }
</style>