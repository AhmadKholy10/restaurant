<template>
  <div>
    <!-- <h1> Dashboard</h1> -->
    <!-- <TestConnection /> -->
    <router-view></router-view>
  </div>
</template>

<script>
import TestConnection from './components/TestConnection.vue';

export default {
  components: {
    TestConnection
  }
};
</script>
