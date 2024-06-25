<template>
  <nav>
    <ul>
      <li><router-link :to="{ name: 'menu' }">Menu</router-link></li>
      <li><router-link :to="{ name: 'reservations' }">Reservations</router-link></li>
      <li>
        <select v-model="selectedBranch" @change="switchBranch">
          <option v-for="branch in branches" :key="branch.id" :value="branch.id">{{ branch.name }}</option>
        </select>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      selectedBranch: null,
      branches: [
        { id: 1, name: 'Branch 1' },
        { id: 2, name: 'Branch 2' },
        // Add more branches as needed
      ]
    };
  },
  methods: {
    switchBranch() {
      // Implement branch switching logic, perhaps storing the selected branch in Vuex or local storage
    }
  }
};
</script>
