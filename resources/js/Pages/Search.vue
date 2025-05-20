<template>
    <div class="home-page">
      <AppHeader />
      <AppSearchForm /> 
      <AppSearchField />
      <AppFooter />
    </div>
  </template>

  <script setup>
  import AppHeader from './Header.vue';
  import AppSearchForm from './SearchForm.vue';
  import AppSearchField from './SearchField.vue';
  import AppFooter from './Footer.vue';
  </script>
  <script>
  export default {
    name: 'Search'
  }
  </script>
  
  <style scoped>
  
  </style>