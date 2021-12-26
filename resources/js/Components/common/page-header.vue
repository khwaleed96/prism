<template>
  <v-toolbar elevation="0" light>
    <v-toolbar-title>{{ title }}</v-toolbar-title>

    <v-spacer></v-spacer>
    <slot></slot>
  </v-toolbar>
</template>

<script>
export default {
  name: "page-header",
  props: {
    title: {
      type: String,
      default: "title",
    },
  },
  data() {
    return {};
  },
};
</script>
