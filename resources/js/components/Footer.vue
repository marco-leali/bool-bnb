<template>
  <footer>
    <div class="container h-100 position-relative">
      <div class="row align-item-center justify-content-evenly h-75">
        <div class="col-sm-12 col-md-4 col-lg-4 text-center">
          <h2 class="mb-5">Contattaci</h2>

          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-3 col-lg-3">
              <i
                role="button"
                class="fa-brands fa-facebook fa-3x text-secondary"
              ></i>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
              <i
                role="button"
                class="fa-brands fa-twitter fa-3x text-secondary"
              ></i>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
              <i
                role="button"
                class="fa-brands fa-instagram fa-3x text-secondary"
              ></i>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <h2 class="mb-5 text-center">Servizi</h2>

          <ul class="navbar-nav pad">
            <li class="nav-item">
              <router-link class="nav-link text-dark" :to="{ name: 'HomePage' }"
                >Home</router-link
              >
            </li>
            <li class="nav-item">
              <router-link
                class="nav-link text-dark"
                :to="{ name: 'ApartmentsSearch' }"
                >Cerca appartamenti</router-link
              >
            </li>
            <li class="nav-item">
              <router-link
                class="nav-link text-dark"
                :to="{ name: 'PacksDetail' }"
                >I nostri servizi</router-link
              >
            </li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 text-center">
          <h2 class="mb-5">About</h2>
          <a href="mailto:boolbnb@info.it ">boolbnb@info.it</a>
        </div>
      </div>
      <div class="row position-absolute bottom-0 start-0">
        <div class="col-12">
          <i class="m-0 fs-4"
            >Copyright<small>&#169;</small>
            <a
              class="text-secondary"
              target="_blank"
              href="https://github.com/Narresx"
              ><small>Antonio Nicodemo</small></a
            >
            <a
              class="text-secondary"
              target="_blank"
              href="https://github.com/Gioelinz"
              ><small>Gioele Runza</small></a
            >
            <a
              class="text-secondary"
              target="_blank"
              href="https://github.com/marco-leali"
              ><small>Marco Leali</small></a
            >
            <a
              class="text-secondary"
              target="_blank"
              href="https://github.com/Salvo170586SP"
              ><small>Salvatore Pitanza</small></a
            >
          </i>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped lang="scss">
footer {
  background: lightgray;
  height: 30vh;
  padding: 25px;

  .pad {
    padding-left: 80px;
  }

  .nav-link:hover {
    filter: drop-shadow(0 0 0.2rem rgb(47, 79, 79));
  }
  .fa-brands:hover {
    filter: drop-shadow(0 0 25px rgb(6, 175, 28));
  }
}
</style>