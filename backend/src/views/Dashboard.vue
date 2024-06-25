<!-- resources/js/views/RestaurantSelection.vue -->
<template>
    <div class="selection-container">
      <h1>Select a Restaurant Series</h1>
      <div class="series-options">
        <div class="series-option" @click="selectSeries('series1')">
          <img src="D:\Freelancing\restaurant\public\assets\series1.jpg" alt="Series 1" />
          <div class="series-label">Series 1</div>
        </div>
        <div class="series-option" @click="selectSeries('series2')">
          <img src="@\series1.jpg" alt="Series 2" />
          <div class="series-label">Series 2</div>
        </div>
        <div class="series-option" @click="selectSeries('series3')">
          <!-- <img src="@\assets\series1.jpg" alt="Series 3" /> -->
          <div class="series-label">Series 3</div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  // import series1 from '@';
  export default {
    name: 'RestaurantSelection',
    data() {
      return {
          imageSrc: null  // This should resolve the alias
        }
    },
    created() {
    },
    methods: {
      selectSeries(series) {
        this.$router.push(`/app/${series}`);
      }
    }
  };
  </script>
  
  <style scoped>
  .selection-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    background-color: #f4f4f4;
    text-align: center;
  }
  
  .series-options {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    max-width: 400px;
  }
  
  .series-option {
    width: 100%;
    margin-bottom: 20px;
    cursor: pointer;
    transition: transform 0.3s;
  }
  
  .series-option img {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }
  
  .series-option:hover {
    transform: scale(1.05);
  }
  
  .series-label {
    margin-top: 10px;
    font-size: 18px;
  }
  </style>
  