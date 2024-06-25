<template>
    <div>
      <Navbar />
      <router-view />
      <Footer />
    </div>
  </template>
  
  <script>
  import Navbar from '../components/Navbar.vue'
  import Footer from '../components/footer.vue';
  
  export default {
    components: {
      Navbar,
      Footer
    }
  };
  </script>
  