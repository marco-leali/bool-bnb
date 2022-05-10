<template>
  <!-- Card -->
  <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
    <div class="card position-relative px-0">
      <div v-if="item.packs.length" class="featured lh-lg">
        Consigliato <i class="fa-solid fa-star"></i>
      </div>

      <img
        :src="
          item.image ||
          'https://www.edengi.it/vendor/paginesi/custom_sdk/src/php_classes/placeholder.jpg'
        "
        :alt="item.title_desc"
      />

      <p class="mt-4">
        {{ item.title_desc }}
      </p>
      <div>
        <p><strong>Stanze: </strong> {{ item.room }}</p>
        <p><strong>Bagni: </strong> {{ item.bathroom }}</p>
        <p><strong>Letti:</strong> {{ item.bed }}</p>
        <p><strong>Metri quadrati:</strong> {{ item.square_meters }}</p>
        <p>
          <strong>Località: </strong>{{ item.position.city }} ({{
            item.position.province
          }})
        </p>
      </div>

      <div class="d-flex">
        <div
          class="icon mx-2"
          v-for="service in item.services"
          :key="service.id"
        >
          <i
            class="fa-solid fa-lg"
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
        <div v-if="!item.services.length" class="icon">
          <i class="fa-solid fa-ban-smoking fa-lg"></i>
        </div>
      </div>

      <!-- <div class="icon">
          <i class="fa-solid fa-square-parking"></i>
          <i class="fa-solid fa-person-swimming"></i>
          <i class="fa-solid fa-bell-concierge"></i>
          <i class="fa-solid fa-umbrella-beach"></i>
          <i class="fa-solid fa-hot-tub-person"></i>
          <i class="fa-solid fa-wifi"></i>
          <i class="fa-solid fa-smoking"></i>
        </div> -->
      <router-link
        :to="{
          name: 'ApartmentDetail',
          params: { id: item.id, apartment: item },
        }"
        class="btn btn-sm btn-secondary mt-3"
        >Scopri di più</router-link
      >
    </div>
  </div>
</template>

<script>
export default {
  name: "Card",
  props: ["item"],
};
</script>

<style scoped lang="scss">
.card {
  background-color: gainsboro;
  padding-bottom: 1rem;
  box-shadow: black 1px 4px 15px -4px;
  background-image: linear-gradient(
    var(--card-gradient),
    white max(17.5rem, 31vh)
  );
  overflow: hidden;
  border: 0;

  img {
    border-radius: 0.5rem 0.5rem 0 0;
    width: 100%;
    height: 380px;
    mix-blend-mode: var(--card-blend-mode);

    ~ * {
      margin-left: 1rem;
      margin-right: 1rem;
    }
  }

  > :last-child {
    margin-bottom: 0;
  }

  &:hover,
  &:focus-within {
    --card-gradient: #616262 max(8.5rem, 20vh);
  }

  .featured {
    position: absolute;
    transform: rotate(45deg);
    top: 34px;
    right: -41px;
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

.card h3 {
  margin-top: 1rem;
  font-size: 1.25rem;
}

.card-wrapper {
  list-style: none;
  padding: 0;
  margin: 0;
  max-width: 100vw;
  width: 450px;
  padding-left: 1rem;
  padding-right: 1rem;
}
</style>