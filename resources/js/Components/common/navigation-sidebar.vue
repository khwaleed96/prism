<template>
  <v-navigation-drawer color="white" light absolute>
    <v-list class="tw-mt-20">
      <v-list-item
        v-for="item in items"
        :key="item.title"
        link
        dense
        :to="{ name: item.route }"
      >
        <v-list-item-icon>
          <v-icon>{{ item.icon }}</v-icon>
        </v-list-item-icon>

        <v-list-item-content>
          <v-list-item-title>{{ item.title }}</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>

    <!-- <template v-slot:append>
      <div class="pa-2">
        <v-btn block> Logout </v-btn>
      </div>
    </template> -->
  </v-navigation-drawer>
</template>

<script>
export default {
  name: "navigation-sidebar",
  data() {
    return {
      items: [
        { title: "Dashboard", icon: "mdi-view-dashboard", route: "dashboard" },
        { title: "Purchases", icon: "mdi-account-box", route: "purchases" },
      ],
    };
  },
};
</script>
