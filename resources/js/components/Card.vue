<template>
  <section id="detail-apartment" class="container-fluid my-5 p-5">
    <!-- Card -->
    <div class="row g-5">
      <div
        class="col-sm-12 col-md-6 col-lg-4 col-xl-3"
        v-for="apartment in items"
        :key="apartment.id"
      >
        <div class="card position-relative px-0">
          <div v-if="apartment.packs.length" class="featured lh-lg">
            Sponsorizzato <i class="fa-solid fa-circle-check"></i>
          </div>

          <img
            :src="
              apartment.image ||
              'https://www.edengi.it/vendor/paginesi/custom_sdk/src/php_classes/placeholder.jpg'
            "
            :alt="apartment.title_desc"
          />

          <p class="mt-4">
            {{ apartment.title_desc }}
          </p>
          <div>
            <p><strong>Stanze: </strong> {{ apartment.room }}</p>
            <p><strong>Bagni: </strong> {{ apartment.bathroom }}</p>
            <p><strong>Letti:</strong> {{ apartment.bed }}</p>
            <p>
              <strong>Metri quadrati:</strong> {{ apartment.square_meters }}
            </p>
            <p><strong>Località: </strong>{{ apartment.position.city }}</p>
          </div>

          <router-link
            :to="{
              name: 'ApartmentDetail',
              params: { id: apartment.id, apartment: apartment },
            }"
            class="btn btn-sm btn-secondary mt-3"
            >Scopri di più</router-link
          >
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Card",
  props: ["items"],
};
</script>

<style scoped lang="scss">
.card {
  background-color: gainsboro ;
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
    background-color: dodgerblue;
    font-size: 0.8rem;
    text-align: center;
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