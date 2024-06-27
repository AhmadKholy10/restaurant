<template>
  <!-- eslint-disable -->
  <app-header />
  <router-view />
  <FooterVue/>
  
</template>

<script>
import FooterVue from './components/AppFooter.vue';
import AppHeader from './components/AppHeader.vue';


export default {
  name: 'App',
  components: {
    AppHeader,
    FooterVue
}
}
</script>

<style>

</style>
