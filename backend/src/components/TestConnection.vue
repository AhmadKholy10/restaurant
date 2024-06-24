<template>
    <div>
      <button @click="testConnection">Test Connection</button>
      <p v-if="message">{{ message }}</p>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        message: ''
      };
    },
    methods: {
      testConnection() {
        axios.get('http://localhost:8000/api/test-connection')
          .then(response => {
            this.message = response.data.message;
          })
          .catch(error => {
            this.message = 'Error connecting to the API';
            console.error(error);
          });
      }
    }
  };
  </script>
  