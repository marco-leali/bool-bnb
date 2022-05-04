<template>
  <section>
    <Select placeholder="il raggio" :options="optionsKm" type="km" />
    <Select
      @on-selected="getApartments"
      placeholder="n. letti"
      :options="optionsBeds"
      type="bed"
    />
    <Select
      @on-selected="getApartments"
      placeholder="n. stanze"
      :options="optionsRooms"
      type="room"
    />
    <Card v-if="!isLoading" :items="apartments" />
    <PlaceholderCard v-else />
  </section>
</template>

<script>
import Card from "../Card.vue";
import PlaceholderCard from "../CardPlaceholder.vue";

import Select from "../Select.vue";
export default {
  name: "Home",
  components: {
    Card,
    Select,
    PlaceholderCard,
  },
  data() {
    return {
      isLoading: false,
      apartments: [],
      bed: null,
      room: null,
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
      optionsRooms: [
        { text: "1 stanza", value: 1 },
        { text: "2 stanza", value: 2 },
        { text: "3 stanza", value: 3 },
        { text: "4 stanza", value: 4 },
        { text: "5 stanza", value: 5 },
      ],
    };
  },
  methods: {
    setValueSelect(value, type) {
      this[type] = value;
    },

    getApartments(value, type, page = 1) {
      this.setValueSelect(value, type);
      this.isLoading = true;
      const config = {
        params: {
          room: this.room,
          bed: this.bed,
          page,
        },
      };
      setTimeout(() => {
        axios
          .get("http://127.0.0.1:8000/api/apartments", config)
          .then((res) => {
            this.apartments = res.data.data;
          })
          .catch((err) => {
            console.error(err);
          })
          .then(() => {
            console.log("chiamata terminata");
            this.isLoading = false;
          });
      }, 2000);
    },
  },
  mounted() {
    this.getApartments();
  },
};
</script>

<style>
</style>