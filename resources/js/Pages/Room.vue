<template>
    <div class="home-page">
      <AppHeader />
      <AppRoom1 />
      <AppFooter />
    </div>
  </template>
  
  <script setup>
  import AppHeader from './Header.vue';
  import AppRoom1 from './Room1.vue';
  import AppFooter from './Footer.vue';
  </script>
  
  <script >
  export default {
    name: 'Room'
  }
  </script>
  