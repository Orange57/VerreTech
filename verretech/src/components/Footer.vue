<template>
  <footer class="bg-gray-500 h-32 w-screen absolute bottom-0 flex">
      <div class="h-full w-6/12 text-center flex flex-col justify-center">
        Copyright Verre-Tech @2020
      </div>
      <div class="h-full w-6/12 flex">
        <div class="h-full w-3/12 text-center flex flex-col justify-center">
        Contact
        </div>
        <div class="h-full w-3/12 text-center flex flex-col justify-center">
        Mentions légales
        </div>
        <div class="h-full w-3/12 text-center flex flex-col justify-center">
        Cookies
        </div>
        <div class="h-full w-3/12 text-center flex flex-col justify-center">
        Plan de site
        </div>
        <div class="h-full w-3/12 text-center flex flex-col justify-center">
        A propos
        </div>
      </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  props: {
    msg: String
  }
}
</script>

<style scoped>

</style>