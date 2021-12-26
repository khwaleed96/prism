<template>
  <v-row>
    <v-col cols="6" class="pb-0">
      <div
        class="
          tw-h-screen
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
      class="pb-0 justify-center tw-items-center tw-h-screen d-flex"
    >
      <div class="text-center tw-max-w-lg tw-w-full mx-auto">
        <h1 class="tw-text-4xl tw-font-bold tw-text-zinc-900 tw-pb-12">
          Sign In
        </h1>

        <v-form
          @submit.prevent="submit"
          ref="form"
          v-model="valid"
          lazy-validation
        >
          <v-text-field
            v-model="email"
            :rules="emailRules"
            outlined
            label="E-mail"
            required
          ></v-text-field>
          <v-text-field
            :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
            v-model="password"
            :type="show ? 'text' : 'password'"
            outlined
            :rules="passwordRules"
            label="Password"
            @click:append="show = !show"
            required
          ></v-text-field>
          <v-btn :disabled="!valid" block x-large color="primary" type="submit">
            Sing In
          </v-btn>
          <div class="text-right pt-2">
            <span class="tw-font-bold tw-text-neutral-500">New here?</span>
            <router-link :to="{ name: 'register' }">Create account</router-link>
          </div>
        </v-form>
      </div>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: "login",
  data() {
    return {
      valid: true,
      show: false,
      email: "",
      emailRules: [
        (v) => !!v || "E-mail is required",
        (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
      ],
      password: "",
      passwordRules: [(v) => !!v || "Password is required"],
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
