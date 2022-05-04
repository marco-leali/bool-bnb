<template>
  <section>
    
      <div class="px-5">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Location" v-model="dist">
              <button class="btn btn-outline-secondary" type="button" id="search" @click="searchByLocation">Cerca Per Location</button>
            </div>
      </div>
    <div class="d-flex p-5">
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
    </div>
    
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
      dist:null,
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
    searchByLocation()
    { 
      const config = {
        params: {
          countryCode:'IT',
          municipality : this.dist,
          key : 'IKVotV9Xwnzy8UimnZdGePT1sU3HI33N'
        },
      };
       axios
          .get("https://api.tomtom.com/search/2/structuredGeocode", config)
          .then((res) => {
            
            console.log(res.data);
           
          })
          .catch((err) => {
            console.error(err);
          })
          .then(() => {
            console.log("chiamata terminata");
          });

    },
    distance(lat1, lon1, lat2, lon2, unit)
     {
              if ((lat1 == lat2) && (lon1 == lon2)) {
                return 0;
              }
              else {

                  var radlat1 = Math.PI * lat1/180;
                  var radlat2 = Math.PI * lat2/180;
                  var theta = lon1-lon2;
                  var radtheta = Math.PI * theta/180;
                  var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                  if (dist > 1) {
                    dist = 1;
                  }
                  dist = Math.acos(dist);
                  dist = dist * 180/Math.PI;
                  dist = dist * 60 * 1.1515;
                  if (unit=="K") { dist = dist * 1.609344 }
                  if (unit=="N") { dist = dist * 0.8684 }

                return dist;
              }
  },

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