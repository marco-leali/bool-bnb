<template>
  <section id="form-message">
    <div class="container h-75">
      <div class="row h-75 align-items-center">
        <div class="col-12 text-center">
          <h2>Contattami</h2>
          <p>
            Se vuoi saperne di più invia una mail, ti contatteremo al più presto
          </p>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="email" class="form-label">Inserici email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="name@example.com"
              v-model="email"
            />
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Inserisci messaggio</label>
            <textarea class="form-control" id="content" rows="3" v-model="message"></textarea>
            <button class="btn btn-secondary mt-3" @click="sendMessage">
              Invia
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "FormMessage",
  props:['apartmentId'],

  data() {
    return {
        email: "",
        message: "",
    };
  },
  methods: {
    sendMessage() {
      const config = {
        params: {
          content: this.message,
          email: this.email,
          apartment_id: this.apartmentId,
          key: "IKVotV9Xwnzy8UimnZdGePT1sU3HI33N",
        },
      };

      axios
        .post("http://localhost:8000/api/message/", config)
        .then((res) => {
          this.form.email = "";
          this.form.message = "";
        })
        .catch((err) => {})
        .then(() => {
          console.log("chiamata terminata");
        });
    },
  },
};
</script>

<style>
#form-message {
  height: 70vh;
}
</style>