<template>
  <section id="jumbotron">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-sm-6 z-index">
          <div class="title mt-5">
            <h1>
              Lasciati <span class="text-primary">guidare</span> dalla curiosità
            </h1>
            <p>
              Pianifica un viaggio con l'aiuto della nostra ricerca da ogni
              parte del mondo
            </p>
            <div class="d-flex">
              <div
                class="
                  box-input
                  d-flex
                  align-items-center
                  justify-content-center
                "
              >
                <input type="text" v-model.trim="search" placeholder="Cerca" />
                <!-- <button class="btn btn-secondary">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button> -->
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
            </div>
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
</style>