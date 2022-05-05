<template>
   <section id="best-apartment">
    <div class="container">
      <div class="row">
        <div class="col-12 my-5 text-center">
          <h3>I nostri migliori appartamenti</h3>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <div class="card shadow" >
            <img
              src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/5b/2c/f1/adina-apartment-hotel.jpg?w=900&h=-1&s=1"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <div class="card shadow" >
            <img
              src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/5b/2c/f1/adina-apartment-hotel.jpg?w=900&h=-1&s=1"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <div class="card shadow" >
            <img
              src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/5b/2c/f1/adina-apartment-hotel.jpg?w=900&h=-1&s=1"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <div class="card shadow" >
            <img
              src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/5b/2c/f1/adina-apartment-hotel.jpg?w=900&h=-1&s=1"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 my-5 text-center">
          <router-link class="btn btn-secondary" :to="{name:'ApartmentsSearch'}"
            >Guarda tutti <i class="fa-solid fa-arrow-right-long"></i
          ></router-link>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
    name: 'SectionBestApartments'
}
</script>

<style scoped lang="scss">
#best-apartment {
  background-color: lightgray;
  /* padding: 50px 0; */

  .card{
    transition: transform 0.8s;
    &:hover{
     transform: translateY(-15px);
    }
  }
}
</style>