<template>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="http://www.mattonsbnb.com/wp-content/uploads/2016/04/cropped-icon-1.png" width="50" alt=""> BoolBnB</a>
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
                <router-link class="nav-link active" aria-current="page" :to="{name:'HomePage'}">Home</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'ApartmentsSearch' }">Appartamenti</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'PacksDetail' }">I nostri pacchetti</router-link>
              </li>
            </ul>
            <ul class="navbar-nav d-flex justify-content-end flex-grow-1">
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-secondary mx-3 text-light" href="/register">Registrati</a>
              </li>
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

<style>
</style>