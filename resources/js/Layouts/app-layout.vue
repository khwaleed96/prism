<template>
  <div class="tw-bg-gray-100 tw-min-h-screen">
    <navigation-sidebar />
    <main-header />
    <v-main>
      <div class="tw-pl-64" style="padding-top: 64px">
        <router-view></router-view>
      </div>
    </v-main>
  </div>
</template>

<script>
import MainHeader from "../Components/common/main-header.vue";
import NavigationSidebar from "../Components/common/navigation-sidebar.vue";
export default {
  name: "app-layout",
  data() {
    return {};
  },
  components: { NavigationSidebar, MainHeader },
};
</script>
