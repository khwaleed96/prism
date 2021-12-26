<template>
  <v-row>
    <v-col cols="6" class="pb-0">
      <div
        class="
          tw-h-full
          tw-min-h-screen
          tw-w-full
          tw-bg-gray-900
          tw-flex
          tw-justify-center
          tw-items-center
        "
      >
        <h1 class="tw-text-white tw-text-bold tw-text-7xl">APP</h1>
      </div>
    </v-col>
    <v-col
      cols="6"
      class="
        pb-0
        justify-center
        tw-items-center tw-h-full tw-min-h-screen
        d-flex
      "
    >
      <div class="text-center tw-max-w-xl tw-w-full mx-auto">
        <h1 class="tw-text-4xl tw-font-bold tw-text-zinc-900 tw-pb-8">
          Create Account
        </h1>

        <v-form
          @submit.prevent="submit"
          ref="form"
          v-model="valid"
          lazy-validation
        >
          <v-row>
            <v-col md="6">
              <v-text-field
                v-model="company_name"
                :rules="rules.required"
                outlined
                label="Company name"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                v-model="tag_line"
                outlined
                hide-details="auto"
                label="Tag line (optional)"
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                v-model="email"
                :rules="[rules.required, rules.validEmail]"
                outlined
                label="E-mail"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                v-model="country"
                :rules="rules.required"
                outlined
                label="Country"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                v-model="password"
                :type="show ? 'text' : 'password'"
                outlined
                :rules="[rules.required, rules.min]"
                label="Password"
                @click:append="show = !show"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                v-model="confirm_password"
                :type="show ? 'text' : 'password'"
                outlined
                :rules="[rules.required, rules.match]"
                label="Confirm password"
                @click:append="show = !show"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                v-model="state"
                :rules="rules.required"
                outlined
                label="City"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                v-model="city"
                :rules="rules.required"
                outlined
                label="State"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                v-model="address_one"
                :rules="rules.required"
                outlined
                label="Address Line 1"
                hide-details="auto"
                required
              ></v-text-field>
            </v-col>
            <v-col md="6">
              <v-text-field
                v-model="address_two"
                outlined
                hide-details="auto"
                label="Address Line 2 (optional)"
              ></v-text-field>
            </v-col>
          </v-row>

          <v-btn
            :disabled="!valid"
            block
            x-large
            color="primary"
            class="mt-5"
            type="submit"
          >
            Create
          </v-btn>
          <div class="text-right pt-2">
            <span class="tw-font-bold tw-text-neutral-500">Have Account?</span>
            <router-link :to="{ name: 'login' }">Sign in</router-link>
          </div>
        </v-form>
      </div>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: "register",
  data() {
    return {
      valid: true,
      show: false,
      company_name: "",
      tag_line: "",
      email: "",
      country: "",
      password: "",
      confirm_password: "",
      city: "",
      state: "",
      address_one: "",
      address_two: "",
      state: "",
      rules: {
        required: (value) => !!value || "Required.",
        min: (v) => v.length >= 8 || "Min 8 characters",
        match: (v) => v === this.password || `The password don't match`,
        validEmail: (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
      },
    };
  },
  methods: {
    submit() {
      this.$refs.form.validate();
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
