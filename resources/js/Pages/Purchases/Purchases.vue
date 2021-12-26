<template>
  <div id="purchases">
    <page-header title="Purchases">
      <v-btn color="primary" elevation="0">Add New</v-btn>
    </page-header>

    <div class="tw-mx-8 tw-mt-12">
      <v-data-table
        :headers="headers"
        :items="purchases"
        :items-per-page="5"
        class="elevation-1"
      >
        <template v-slot:item.action="{ item }">
          <v-tooltip top>
            <template v-slot:activator="{ on }">
              <v-btn icon v-on="on">
                <v-icon small @click="editItem(item)">mdi-eye</v-icon>
              </v-btn>
            </template>
            <span>View</span>
          </v-tooltip>
          <v-tooltip top>
            <template v-slot:activator="{ on }">
              <v-btn icon v-on="on">
                <v-icon small @click="editItem(item)">mdi-pencil</v-icon>
              </v-btn>
            </template>
            <span>Edit</span>
          </v-tooltip>
          <v-tooltip top>
            <template v-slot:activator="{ on }">
              <v-btn icon v-on="on">
                <v-icon small @click="deleteItem(item)">mdi-delete</v-icon>
              </v-btn>
            </template>
            <span>Delete</span>
          </v-tooltip>
        </template>
      </v-data-table>
    </div>
  </div>
</template>

<script>
import pageHeader from "../../Components/common/page-header.vue";
export default {
  components: { pageHeader },
  name: "purchases",

  data() {
    return {
      headers: [
        {
          text: "ID #",
          align: "center",
          sortable: true,
          value: "id",
        },
        { text: "Purchase id #", value: "purchase_id" },
        { text: "Supplier", value: "supplier" },
        { text: "Phone #", value: "phone" },
        { text: "Date - Time", value: "dateTime" },
        { text: "Actions", align: "center", value: "action", sortable: false },
      ],
      purchases: [
        {
          id: 1,
          purchase_id: 128937,
          supplier: "some one",
          phone: "+92308523523",
          dateTime: "25-12-2021 - 2:20:10",
        },
        {
          id: 2,
          purchase_id: 128937,
          supplier: "some one",
          phone: "+92308523523",
          dateTime: "25-12-2021 - 2:20:10",
        },
        {
          id: 3,
          purchase_id: 128937,
          supplier: "some one",
          phone: "+92308523523",
          dateTime: "25-12-2021 - 2:20:10",
        },
        {
          id: 4,
          purchase_id: 128937,
          supplier: "some one",
          phone: "+92308523523",
          dateTime: "25-12-2021 - 2:20:10",
        },
        {
          id: 5,
          purchase_id: 128937,
          supplier: "some one",
          phone: "+92308523523",
          dateTime: "25-12-2021 - 2:20:10",
        },
        {
          id: 6,
          purchase_id: 128937,
          supplier: "some one",
          phone: "+92308523523",
          dateTime: "25-12-2021 - 2:20:10",
        },
      ],
    };
  },
};
</script>
