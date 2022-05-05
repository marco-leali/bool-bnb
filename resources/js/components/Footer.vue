<template>
   <footer>
      <div class="container h-100">
          <div class="row align-item-center justify-content-evenly h-100">
              <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                  <h2 class="mb-5">Contattaci</h2>
                  
                  <div class="row justify-content-center">
                      <div class="col-sm-12 col-md-3 col-lg-3"><i class="fa-brands fa-facebook fa-2x"></i></div>
                      <div class="col-sm-12 col-md-3 col-lg-3"><i class="fa-brands fa-twitter fa-2x"></i></div>
                      <div class="col-sm-12 col-md-3 col-lg-3"><i class="fa-brands fa-instagram fa-2x"></i></div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4">
                  <h2 class="mb-5 text-center">Servizi</h2>
                  
                  <ul class="navbar-nav px-5" >
                      <li class="nav-item"><router-link class="nav-link text-dark" :to="{name:'HomePage'}">Home</router-link></li>
                      <li class="nav-item"><router-link class="nav-link text-dark" :to="{name:'ApartmentsSearch'}">Cerca appartamenti</router-link></li>
                      <li class="nav-item"><router-link class="nav-link text-dark" :to="{name:'HomePage'}">Contattaci</router-link></li>
                  </ul>
                  
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                  <h2 class="mb-5">About</h2>
                  <p>BoolBnB@info.it</p>
                  
              </div>
          </div>
      </div>
  </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped lang="scss">
footer{
    background: lightgray;
   /*  height: 30vh; */
    padding: 25px; 
}

</style>