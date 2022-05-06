<template>
  <section id="apartment-detail">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <!-- card -->
          <div class="card shadow mb-3" style="max-width: 80rem">
            <div class="row g-0">
              <div class="col-sm-12 col-md-12 col-lg-8 position-relative  overflow-hidden">
                <div class="featured lh-lg">
                  Sponsorizzato <i class="fa-solid fa-circle-check"></i>
                </div>
                <img
                  src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/5b/2c/f1/adina-apartment-hotel.jpg?w=900&h=-1&s=1"
                  class="img-fluid rounded-start"
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
                  </p>
                  <p><strong>Metri Quadrati</strong> </p>
                  <p><strong>Stanze</strong> </p>
                  <p><strong>Letti</strong>  </p>
                  <p><strong>Bagni</strong>  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ApartmentDetail",
  props: ['apartment']
};
</script>

<style scoped lang="scss">
#apartment-detail{
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