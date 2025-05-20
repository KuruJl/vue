<template>
    <div class="home-page">
      <AppHeader />
        <AppCreate_ad />
      <AppFooter />
    </div>
  </template>
  
  <script setup>
  import AppHeader from './Header.vue';
    import AppCreate_ad from './Create_ad.vue'
  import AppFooter from './Footer.vue';
  </script>
  
  <script >
  export default {
    name: 'Ad'
  }
  </script>
  
  <style scoped>
  
  </style>\