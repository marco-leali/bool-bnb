<template>
  <header class="shadow">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"
            ><img
              src="http://www.mattonsbnb.com/wp-content/uploads/2016/04/cropped-icon-1.png"
              width="50"
              alt=""
            />
            BoolBnB</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <router-link
                  class="nav-link"
                  aria-current="page"
                  :to="{ name: 'HomePage' }"
                  >Home</router-link
                >
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'ApartmentsSearch' }"
                  >Appartamenti</router-link
                >
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'PacksDetail' }"
                  >I nostri pacchetti</router-link
                >
              </li>
            </ul>
            <ul class="navbar-nav d-flex justify-content-end flex-grow-1">
              <li class="nav-item">
                <a
                  class="nav-link btn btn-secondary text-light rounded-pill"
                  href="/login"
                  ><i class="fa-solid fa-user"></i> Area personale</a
                >
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link btn btn-secondary mx-3 text-light" href="/register">Registrati</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
</template>

<script>
import Select from "../components/Select.vue";
export default {
  name: "Header",
  components: {
    Select,
  },
  data() {
    return {};
  },
  methods: {
    setValueSelect(value, type) {
      this[type] = value;
    },
  },
};
</script>

<style scoped lang="scss">
header {
  width: 100%;
  background: #2f4f4f;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 5;
  a {
    color: white;
  }
  .nav-item {
    position: relative;

    a:hover {
      color: white;
      text-shadow: 0 1px 1px #000;
    }

    &::before {
      content: "";
      position: absolute;
      bottom: -19px;
      width: 100%;
      height: 0;
      background: #fff;
      transition: height 0.5s ease;
    }
    &:hover::before {
      height: 5px;
    }
    .nav-link {
      color: white;
      position: relative;
      &.active::before {
        content: "";
        position: absolute;
        bottom: -19px;
        left: 0;
        width: 100%;
        height: 5px;
        background: #fff;
      }
    }
  }
}
</style>