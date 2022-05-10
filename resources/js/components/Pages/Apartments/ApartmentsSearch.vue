<template>
  <section>
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-6">
          <div id="map" style="width: 100%; height: 400px"></div>
        </div>
        <div class="col-6">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Location"
              v-model="dist"
            />
            <button
              class="btn btn-outline-secondary"
              type="button"
              id="search"
              @click="searchByLocation"
            >
              Cerca Per Location
            </button>
          </div>

          <div class="col-12 py-4">
            <Select
              @on-selected="getApartments"
              placeholder="il raggio"
              :options="optionsKm"
              type="radius"
            />
          </div>
          <div class="row">
            <div class="col-6">
              <Select
                @on-selected="getApartments"
                placeholder="n. letti"
                :options="optionsBeds"
                type="bed"
              />
            </div>
            <div class="col-6">
              <Select
                @on-selected="getApartments"
                placeholder="n. stanze"
                :options="optionsRooms"
                type="room"
              />
            </div>
            <div class="col-12 text-center pt-4">
              <h3>Filtra gli appartamenti per raggio, letti e stanze</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <Card v-if="!isLoading" :items="apartments" />
    <PlaceholderCard v-else />
  </section>
</template>

<script>
import Card from "../../Card.vue";
import PlaceholderCard from "../../CardPlaceholder.vue";

import Select from "../../Select.vue";
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
      dist: null,
      bed: null,
      room: null,
      lat: null,
      long: null,
      radius: 20,
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
    searchByLocation() {
      if (this.dist) {
        const config = {
          params: {
            countryCode: "IT",
            municipality: this.dist,
            key: "IKVotV9Xwnzy8UimnZdGePT1sU3HI33N",
          },
        };

        delete axios.defaults.headers.common["X-Requested-With"];
        axios
          .get("https://api.tomtom.com/search/2/structuredGeocode.json", config)
          .then((res) => {
            this.lat = res.data.results[0].position.lat;
            this.long = res.data.results[0].position.lon;

            this.getApartments(this.radius || 20, "radius");
          })
          .catch((err) => {
            console.error(err);
          })
          .then(() => {
            console.log("chiamata terminata LatLong");
          });
      } else {
        this.dist = null;
        this.lat = null;
        this.long = null;
        this.apartments = [];
        this.getApartments();
      }
    },
    distance(lat1, lon1, lat2, lon2, unit) {
      if (lat1 == lat2 && lon1 == lon2) {
        return 0;
      } else {
        var radlat1 = (Math.PI * lat1) / 180;
        var radlat2 = (Math.PI * lat2) / 180;
        var theta = lon1 - lon2;
        var radtheta = (Math.PI * theta) / 180;
        var dist =
          Math.sin(radlat1) * Math.sin(radlat2) +
          Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
        if (dist > 1) {
          dist = 1;
        }
        dist = Math.acos(dist);
        dist = (dist * 180) / Math.PI;
        dist = dist * 60 * 1.1515;
        if (unit == "K") {
          dist = dist * 1.609344;
        }
        if (unit == "N") {
          dist = dist * 0.8684;
        }

        return dist;
      }
    },

    setValueSelect(value, type) {
      this[type] = value;
    },

    getApartments(value, type, page = 1) {
      // Mappa al caricamento
      this.apartments = [];
      this.setValueSelect(value, type);
      this.isLoading = true;
      const config = {
        params: {
          room: this.room,
          bed: this.bed,
          page,
        },
      };

      axios
        .get("http://127.0.0.1:8000/api/apartments", config)
        .then((res) => {
          const apartments = res.data;
          if (this.lat && this.long) {
            this.apartments = apartments.filter((apartment) => {
              const lat = apartment.position.latitude;
              const long = apartment.position.longitude;

              if (
                this.distance(lat, long, this.lat, this.long, "K") < this.radius
              ) {
                return true;
              }

              return false;
            });
          } else {
            for (let el of res.data) {
              this.apartments.push(el);

              this.apartments.sort((a, b) =>
                a.packs < b.packs ? 1 : b.packs < a.packs ? -1 : 0
              );
            }
            /* this.apartments = res.data.data; */
          }
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("chiamata terminata Appartamenti");
          this.isLoading = false;
          this.getMap();
        });
    },

    getMap() {
      if (!this.lat && !this.long) {
        const map = tt.map({
          key: "IKVotV9Xwnzy8UimnZdGePT1sU3HI33N",
          container: "map",
          center: [12.496366, 41.902782],
          zoom: 4,
        });
        map.addControl(new tt.FullscreenControl());
        map.addControl(new tt.NavigationControl());
        var popupOffset = 25;
        map.on("load", () => {
          this.apartments.forEach((element) => {
            var marker = new tt.Marker()
              .setLngLat([
                element.position.longitude,
                element.position.latitude,
              ])
              .addTo(map);
            var popup = new tt.Popup({ offset: popupOffset }).setHTML(
              `<p class="mt-1">${element.title_desc}</p>
              <p class="m-0">${element.position.street}</p>`
            );
            marker.setPopup(popup);
          });
        });
      } else {
        const map = tt.map({
          key: "IKVotV9Xwnzy8UimnZdGePT1sU3HI33N",
          container: "map",
          center: [this.long, this.lat],
          zoom: this.radius > 30 ? 6 : 8,
        });
        var popupOffset = 25;
        map.on("load", () => {
          this.apartments.forEach((element) => {
            var marker = new tt.Marker()
              .setLngLat([
                element.position.longitude,
                element.position.latitude,
              ])
              .addTo(map);
            var popup = new tt.Popup({ offset: popupOffset }).setHTML(
              `<p class="mt-1">${element.title_desc}</p>
              <p class="m-0">${element.position.street}</p>`
            );
            marker.setPopup(popup);
          });
        });
        map.addControl(new tt.FullscreenControl());
        map.addControl(new tt.NavigationControl());
      }
    },
  },
  mounted() {
    this.getApartments();
  },
};
</script>

<style scoped lang="scss">
#map {
  border-radius: 20px;
  box-shadow: black 5px 6px 20px -11px;
}
</style>