<template>
   <section id="best-apartment">
    <div class="container">
      <div class="row">
        <div class="col-12 my-5 text-center">
          <h3>I nostri migliori appartamenti</h3>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 my-4">
          <div class="card shadow" >
            <figure>
            <img
              src="https://images.unsplash.com/photo-1445510861639-5651173bc5d5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y29uZm9ydHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
              class="card-img-top"
              alt="..."
              
            />
            </figure>
            
            <div class="card-body">
              <p class="card-text">
                Offriamo il miglior confort al minor prezzo
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 my-4">
          <div class="card shadow" >
            <figure>
            <img
              src="https://images.unsplash.com/photo-1642209896450-0dd782cc6a86?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGNvbmZvcnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
              class="card-img-top"
              alt="..."
             
            />
            </figure>
            
            <div class="card-body">
              <p class="card-text">
                Le migliori località per i tuoi viaggi di piacere
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 my-4">
          <div class="card shadow" >
            <figure>
            <img
              src="https://images.unsplash.com/photo-1570737543098-0983d88f796d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=986&q=80"
              class="card-img-top"
              alt="..."
            />
            </figure>
            <div class="card-body">
              <p class="card-text">
                Coniuga il lavoro con il relax
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 my-4">
          <div class="card shadow" >
            <figure>
            <img
              src="https://images.unsplash.com/photo-1620838059412-a5e5057fb67f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=985&q=80"
              class="card-img-top"
              alt="..."
            />
            </figure>
            <div class="card-body">
              <p class="card-text">
                Scopri paesaggi e culture diverse con noi
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 my-5 text-center">
          <router-link class="btn btn-secondary" :to="{name:'ApartmentsSearch'}"
            >Guarda tutti <i class="fa-solid fa-arrow-right-long"></i
          ></router-link>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
    name: 'SectionBestApartments'
}
</script>

<style scoped lang="scss">
#best-apartment {
  background-color: lightgray;
  /* padding: 50px 0; */

  .card{
    figure{
      height: 200px;
      overflow: hidden;
    }
    height: 300px;
    transition: transform 0.8s;
    &:hover{
     transform: translateY(-15px);
    }
  }
}
</style>