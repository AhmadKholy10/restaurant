<template>
  <div id="app">
    <h1> Dashboard</h1>
    <TestConnection />
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
