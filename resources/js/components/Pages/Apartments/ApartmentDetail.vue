<template>
  <section id="apartment-detail" class="mt-5">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <!-- card -->
          <div v-if="isLoading" class="spinner-grow my-5" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div v-else class="card shadow mb-3" style="max-width: 80rem">
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
                <div v-if="isSponsored" class="featured lh-lg">
                  Consigliato <i class="fa-solid fa-star"></i>
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
                  <p class="fs-2">
                    <strong>Descrizione appartamento: </strong>
                    {{ apartment.title_desc }}
                  </p>
                  <p>
                    <strong>Metri Quadrati: </strong>
                    {{ apartment.square_meters }}
                  </p>
                  <p><strong>Stanze:</strong> {{ apartment.room }}</p>
                  <p><strong>Letti:</strong> {{ apartment.bed }}</p>
                  <p><strong>Bagni:</strong> {{ apartment.bathroom }}</p>
                  <p>
                    <strong>Località:</strong>
                    {{ apartment.position.city }},
                    {{ apartment.position.province }},
                    {{ apartment.position.postal_code }} <br />
                    {{ apartment.position.street }}
                  </p>
                  <!-- <router-link
                    class="btn btn-sm bg-secondary text-light"
                    :to="{
                      name: 'FormMessage',
                      params: { apartment_id: apartment.id },
                    }"
                    >Scrimi per ulteriori dettagli</router-link
                  > -->
                  <div class="d-flex">
                    <div
                      class="icon mx-2 my-2"
                      v-for="service in apartment.services"
                      :key="service.id"
                    >
                      <i
                        class="fa-solid fa-2x"
                        :class="{
                          'fa-square-parking': service.name == 'Parking',
                          'fa-person-swimming': service.name == 'Swimming pool',
                          'fa-bell-concierge': service.name == 'Concierge',
                          'fa-umbrella-beach': service.name == 'Sea view',
                          'fa-hot-tub-person': service.name == 'Sauna',
                          'fa-wifi': service.name == 'Wi-Fi',
                          'fa-smoking': service.name == 'Smoking',
                        }"
                        :title="service.name"
                      ></i>
                    </div>
                    <div v-if="!apartment.services.length" class="icon">
                      <i class="fa-solid fa-ban-smoking fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="m-0 p-0" />
            <div class="row">
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
      isLoading: false,
      isSponsored: false,
    };
  },
  methods: {
    getApartment() {
      this.isLoading = true;
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
          this.isLoading = false;
          if (this.apartment.packs.length) this.isSponsored = true;
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
    height: 100vh;
    margin-bottom: 200px ;
 
  .card {
    background-color: gainsboro;
  }
  .featured {
    position: absolute;
    transform: rotate(45deg);
    top: 34px;
    right: -38px;
    height: 27px;
    width: 168px;
    background-color: white;
    box-shadow: black 1px 5px 16px 0px;
    font-size: 0.8rem;
    text-align: center;
    font-weight: bold;
    .fa-star {
      color: rgb(253, 204, 13);
    }
  }
}
</style>