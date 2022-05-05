<template>
     <section id="jumbotron">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-sm-6 z-index">
          <div class="title mt-5">
            <h1>
              Let's <span class="text-primary">Find A Home</span> That's Perfect
              Place For You
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              modi aliquid. Veritatis voluptates iste tenetur aliquam et dolores
              hic, expedita rerum enim consequatur quaerat culpa sed earum
              veniam nihil eveniet.
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
                <input type="text" placeholder="cerca" />
                <button class="btn btn-secondary">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
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
    name:"Jumbotron"
}
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
    background-color: rgb(241 241 241 / 35%);    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
  }

  .z-index{
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
    }
  }
}
</style>