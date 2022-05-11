<template>
  <section id="jumbotron">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-sm-6 z-index">
          <div class="title mt-5">
            <h1>
              Lasciati <span class="text-primary">guidare</span> dalla curiosità
            </h1>
            <p class="fs-4">
              Pianifica un viaggio con l'aiuto della nostra ricerca da ogni
              parte del mondo
            </p>
            <div class="position-relative">
              <div class="search-box">
                <input
                  id="search"
                  type="text"
                  placeholder="Cerca..."
                  class="search-input"
                  v-model.trim="search"
                />

                <label for="search" class="search-btn">
                  <router-link
                    class="text-decoration-none"
                    :to="{
                      name: 'ApartmentsSearch',
                      params: search,
                      query: { search: search },
                    }"
                  >
                    <i class="fa fa-search"></i>
                  </router-link>
                </label>
              </div>
            </div>
            <!-- <div class="d-flex">
              <div
                class="
                  box-input
                  d-flex
                  align-items-center
                  justify-content-center
                "
              >
                <input type="text" v-model.trim="search" placeholder="Cerca" />

                <router-link
                  class="btn btn-secondary"
                  :to="{
                    name: 'ApartmentsSearch',
                    params: search,
                    query: { search: search },
                  }"
                  ><i class="fa-solid fa-magnifying-glass fa-lg"></i
                ></router-link>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Jumbotron",
  data() {
    return {
      search: "",
    };
  },
};
</script>

<style scoped lang="scss">
::placeholder {
  color: white;
  opacity: 1;
}
#jumbotron {
  height: 100vh;
  background-image: url("https://image.architonic.com/prj2-3/20116834/rua-141-apartment-in-sao-paulo-architonic-3629-01-arcit18.jpg");
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 0;
  &::before {
    content: "";
    background-color: rgb(241 241 241 / 35%);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
  }

  .z-index {
    z-index: 1;
  }

  .title {
    .box-input {
      z-index: 1;
      background-color: white;
      box-shadow: 3px 4px 17px -5px black;
      border-radius: 10px;
      input {
        width: 100%;
        border: 0;
        padding-left: 25px;
        outline: 0;
      }
      button {
        width: 130px;
        height: 51px;
      }
      a {
        width: 130px;
        height: 51px;
        i {
          line-height: 35px;
        }
      }
    }
  }
}

$bg: #353535;
$search: #3490dc;
.search-box {
  position: absolute;
  top: 20px;
  left: 0;
  transform: translate(0, -50%);
  height: 60px;
  background: $bg;
  line-height: 40px;
  padding: 10px;
  border-radius: 60px;
  cursor: pointer;
}

.search-input {
  background: $bg;
  color: #fff;
  outline: none;
  border: none;
  line-height: 40px;
  width: 0px;
  float: left;
  font-size: 1em;
  transition: 0.7s ease;
}

.search-btn a {
  display: flex;
  justify-content: center;
  align-items: center;
  background: $bg;
  padding: 12px;
  border-radius: 50%;
  float: right;
  color: $search;
  transition: 0.4s ease;
}

.search-box:hover > .search-input,
.search-input:focus {
  width: 240px;
  margin: 0 8px;
}

.search-box:hover > .search-btn a,
.search-input:focus + .search-btn a {
  background: $search;
  color: #101010;
}
</style>