<template>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BoolBnB</a>
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
            
              <li>
                <Select
                  placeholder="il raggio"
                  :options="optionsKm"
                  :type="km"
                />
              </li>
              <li class="mx-3">
                <Select
                placeholder="n. letti"
                  :options="optionsBeds"
                  :type="bed"
                />
              </li>
              <li>
                <Select
                placeholder="n. bagni"
                  :options="optionsBaths"
                  :type="bath"
                />
              </li>

            </ul>
            <ul class="navbar-nav d-flex justify-content-end flex-grow-1">
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Registrati</a>
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
    return {
      optionsKm: [
        { text: "20km", value: 20 },
        { text: "30km", value: 30 },
        { text: "50km", value: 50 },
        { text: "100km", value: 100 },
        { text: "200km", value: 200 },
      ],
      optionsBeds: [
        { text: "1 letto", value: 1 },
        { text: "2 letti", value: 2 },
        { text: "3 letti", value: 3 },
        { text: "4 letti", value: 4 },
        { text: "5 letti", value: 5 },
      ],
      optionsBaths: [
        { text: "1 bagno", value: 1 },
        { text: "2 bagni", value: 2 },
        { text: "3 bagni", value: 3 },
        { text: "4 bagni", value: 4 },
        { text: "5 bagni", value: 5 },
      ],
    };
  },
};
</script>

<style>
</style>