<template>
  <div>
    <!--    Sidebar-->
    <Sidebar :class="{'-ml-[200px]': !sidebarOpened}"/>
    <!--/    Sidebar-->

    <div class="flex-1">
      <Navbar @toggle-sidebar="toggleSidebar"></Navbar>
      <!--      Content-->
      <main class="p-6">
        <router-view></router-view>
      </main>
      <!--      Content-->
    </div>
  </div>
  
</template>

<script>
import {ref, computed, onMounted, onUnmounted} from 'vue'
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";

export default {

}
</script>

<style>

</style>