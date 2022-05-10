<template>
  <section id="subscribe">
    <div class="container">
      <!-- alert -->
      <div class="layover" v-if="alertActive">
        <div class="alert shadow">
          <div class="main-alert">
            <i class="fa-solid fa-check fa-2x"></i>
            <h2>La tua email è stata inviata con successo</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <h3>ISCRIVITI ORA ALLA NOSTRA NEWSLETTER</h3>
          <p>Unisciti alla community</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <div
            class="box-input d-flex align-items-center justify-content-center"
          >
            <input
              type="text"
              placeholder="Inserisci email"
              v-model.trim="term"
              @keyup.enter="uploadMail"
            />
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
              @click="uploadMail"
            >
              Iscriviti
            </button>
            <!-- <button class="btn btn-secondary" @click="sendEmail()">Iscriviti</button> -->
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "SectionSubscribe",
  data() {
    return {
      term: "",
      alertActive: false,
    };
  },
  methods: {
    uploadMail() {
      //CONTROLLO//
      const lowerTerm = this.term.toLowerCase();
      if (!lowerTerm) return;

      //CONTROLLO//
      if (!lowerTerm.includes("@")) {
        return alert("inserisci email valida");
      }

      this.alertActive = true;
      setTimeout(() => {
        this.alertActive = false;
        this.term = "";
      }, 4000);
    },
  },
};
</script>

<style scoped lang="scss">
#subscribe {
  padding: 70px 0;

  .box-input {
    width: 50%;
    height: 65px;
    box-shadow: 3px 4px 17px -5px black;
    border-radius: 10px;
    input {
      width: 75%;
      border: 0;
      padding-left: 25px;
      outline: 0;
      background-color: #f8fafc;
    }
    button {
      width: 189px;
      height: 66px;
    }
  }
}

/* alert */
.layover {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.411);
  z-index: 1;

  .alert {
    width: 663px;
    height: 250px;
    border-radius: 10px;
    background-color: white;
    overflow: hidden;
    border: 1px solid white;

    .main-alert {
      margin-top: 40px;
      text-align: center;
    }

    i {
      border: 2px solid white;
      border-radius: 50%;
      padding: 20px;
      margin-bottom: 15px;
    }
  }
}
</style>