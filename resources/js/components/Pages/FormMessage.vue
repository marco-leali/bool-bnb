<template>
  <section id="form-message" class="py-5">
    <div class="container h-75">
      <div class="row h-75 align-items-center">
        <div class="col-12 text-center">
          <h2 class="mt-3">Contattami</h2>
          <p>
            Se vuoi saperne di più invia una mail, ti contatteremo al più presto
          </p>

          <!-- Alert -->
          <div
            v-if="hasErrors || successAlert"
            class="alert w-50 my-3 mx-auto"
            :class="hasErrors ? 'alert-danger' : 'alert-success'"
            role="alert"
          >
            <div v-if="successAlert">
              {{ successAlert }}
            </div>
            <ul v-if="hasErrors">
              <li
                class="list-unstyled"
                v-for="(error, key) in errors"
                :key="key"
              >
                {{ error }}
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 w-75 mx-auto">
          <div class="mb-3">
            <label for="email" class="form-label">Inserici email</label>
            <input
              type="email"
              class="form-control"
              :class="{ 'is-invalid': errors.email }"
              id="email"
              placeholder="name@example.com"
              v-model.trim="form.email"
            />
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Inserisci messaggio</label>
            <textarea
              class="form-control"
              :class="{ 'is-invalid': errors.content }"
              id="content"
              rows="3"
              v-model.trim="form.content"
            ></textarea>
            <button class="btn btn-secondary mt-3" @click="sendMessage()">
              Invia
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { isEmpty } from "lodash";
export default {
  name: "FormMessage",
  props: {
    id: Number,
  },

  data() {
    return {
      form: {
        email: "",
        content: "",
        apartment_id: this.id,
      },
      errors: {},
      successAlert: null,
      match:
        /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i,
    };
  },
  computed: {
    hasErrors() {
      return !isEmpty(this.errors);
    },
  },
  methods: {
    validateForm() {
      this.successAlert = "";
      const errors = {};
      if (!this.form.email) errors.email = "La Mail è obbligatoria";
      if (!this.form.content)
        errors.content = "Il testo del messaggio è obbligatorio";

      if (this.form.email && !this.form.email.match(this.match)) {
        errors.email = "La mail non è valida";
      }

      this.errors = errors;
    },

    sendMessage() {
      this.validateForm();

      if (!this.hasErrors) {
        this.form.apartment_id = this.id;
        axios
          .post("http://127.0.0.1:8000/api/message", this.form)
          .then((res) => {
            this.form.email = "";
            this.form.content = "";
            this.successAlert = "Messaggio inviato con successo";
          })
          .catch((err) => {
            console.error(err);
            this.errors = { error: "Si è verificato un errore" };
          })
          .then(() => {
            console.log("chiamata terminata");
          });
      }
    },
  },
};
</script>

<style>
/* #form-message {
  height: 70vh;
} */
</style>