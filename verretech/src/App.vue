<template>
  <div id="app">
    <Navbar/>
    <Home titre1="Produits vedettes" titre2="Nos nouveautés"/>
    <Footer/>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
import Home from './components/Home.vue'

export default {
  name: 'App',
  components: {
    Navbar,
    Footer,
    Home
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
