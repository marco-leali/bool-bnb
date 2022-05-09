<template>
  <section id="apartment-detail">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <!-- card -->
          <div class="card shadow mb-3" style="max-width: 80rem">
            <div class="row g-0">
              <div
                class="
                  col-sm-12 col-md-12 col-lg-8
                  position-relative
                  overflow-hidden
                  p-0
                  m-0
                "
              >
                <div class="featured lh-lg">
                  Sponsorizzato <i class="fa-solid fa-circle-check"></i>
                </div>
                <img
                  :src="
                    apartment.image ||
                    'https://www.edengi.it/vendor/paginesi/custom_sdk/src/php_classes/placeholder.jpg'
                  "
                  class="img-fluid rounded-start w-100"
                  alt="..."
                />
              </div>
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card-body">
                  <div class="mb-4">
                    <router-link
                      class="btn btn-sm bg-secondary text-light"
                      :to="{ name: 'ApartmentsSearch' }"
                      ><i class="fa-solid fa-magnifying-glass"></i> Cerca
                      altri</router-link
                    >
                  </div>
                  <hr />
                  <p>
                    <strong>Descrizione appartamento: </strong>
                    {{ apartment.title_desc }}
                  </p>
                  <p class="fs-4">
                    <strong>Metri Quadrati: </strong>
                    {{ apartment.square_meters }}
                  </p>
                  <p><strong>Stanze</strong> {{ apartment.room }}</p>
                  <p><strong>Letti</strong> {{ apartment.bed }}</p>
                  <p><strong>Bagni</strong> {{ apartment.bathroom }}</p>
                  <!-- <router-link
                    class="btn btn-sm bg-secondary text-light"
                    :to="{
                      name: 'FormMessage',
                      params: { apartment_id: apartment.id },
                    }"
                    >Scrimi per ulteriori dettagli</router-link
                  > -->
                </div>
              </div>
              <div class="col-12">
                <FormMessage :id="apartment.id" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import FormMessage from "../FormMessage.vue";
export default {
  name: "ApartmentDetail",
  components: {
    FormMessage,
  },
  data() {
    return {
      apartment: [],
    };
  },
  methods: {
    getApartment() {
      axios
        .get("http://localhost:8000/api/apartment/" + this.$route.params.id)
        .then((res) => {
          this.apartment = res.data;
          /* console.log(res.data); */
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("chiamata terminata");
        });
    },
  },
  mounted() {
    this.getApartment();
  },
};
</script>

<style scoped lang="scss">
#apartment-detail {
  height: 70vh;

  .featured {
    position: absolute;
    transform: rotate(45deg);
    top: 34px;
    right: -38px;
    height: 27px;
    width: 168px;
    background-color: dodgerblue;
    font-size: 0.8rem;
    text-align: center;
  }
}
</style>