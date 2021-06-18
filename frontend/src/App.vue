<template>
  <MainPage/>
</template>

<script>
import MainPage from "@/views/MainPage";

export default {
  name: 'App',
  components: {
    MainPage
  }
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: start;
  color: #2c3e50;
  padding: 15px;
  margin-top: 60px;

  ul {
    list-style: none;
    padding: 0;
  }
}
</style>
