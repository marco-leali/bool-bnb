<template>
<div class="container text-center fs-1 mb-3 mt-5" id="page-height">
    <div>In basso troverai le nostre migliori offerte per sponsorizzare il tuo appartamento</div>
    <div class="row g-5 mt-5">
    <div class="card-pack text-center col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div><i class="fa-solid fa-medal fa-lg fs-1 text-danger"></i></div>
        <h2>Pacchetto Bronze</h2>
        <div class="fs-3">Sponsorizza un appartamento per 24 ore</div>
        <div><span><i class="fa-solid fa-euro-sign"></i></span>2,99 </div>
    </div>
    <div class="card-pack text-center col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div><i class="fa-solid fa-medal fa-lg fs-1 text-muted"></i></div>
        <h2>Pacchetto Silver</h2>
        <div class="fs-3">Sponsorizza un appartamento per 72 ore</div>
        <div><span><i class="fa-solid fa-euro-sign"></i></span>5,99 </div>
    </div>
    <div class="card-pack text-center col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div><i class="fa-solid fa-medal fa-lg fs-1 text-warning"></i></div>
        <h2>Pacchetto Gold</h2>
        <div class="fs-3">Sponsorizza un appartamento per 144 ore</div>
        <div><span><i class="fa-solid fa-euro-sign"></i></span>9,99 </div>
    </div>
    </div>
</div>
</template>

<script>
export default {
name:"PacksDetail"
}
</script>

<style>
#page-height{
    height: 70vh;
}

.card-pack {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  background-color: rgba(191,212,255,0.22); 
}

.card-pack:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
</style>