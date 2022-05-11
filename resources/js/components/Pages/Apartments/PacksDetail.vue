<template>
  <!-- <div class="container text-center fs-1 mb-3" id="page-height">
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
 </div>  -->
  <div class="container">
    <h1 class="pb-4">I Nostri Pacchetti</h1>
    <div class="card-container">
      <div class="card-wrapper">
        <div class="card light">
          <div class="text-overlay">
            <h2>Bronze</h2>
            <div class="price">€2,99</div>
            <div class="details-text">
              <span>Pagamento instantaneo</span>
              <span>Semplice e veloce</span>
              <span>Durata 24 ore</span>
            </div>
          </div>
          <div class="purchase-button-container">
            <h2 class="back-h2">BRONZE</h2>
            <i class="fa-solid fa-medal text-danger"></i>
            <a
              href="/register"
              class="purchase-button dark text-dark text-decoration-none"
              >Registrati ora</a
            >
          </div>
        </div>
      </div>
      <div class="card-wrapper">
        <div class="card dark">
          <div class="text-overlay">
            <h2>Gold</h2>
            <div class="price">€9,99</div>
            <div class="details-text">
              <span>Pagamento instantaneo</span>
              <span>Semplice e veloce</span>
              <span>Durata 144 ore</span>
            </div>
          </div>
          <div class="purchase-button-container">
            <h2 class="back-h2 text-warning">GOLD</h2>
            <i class="fa-solid fa-medal text-warning"></i>
            <a
              href="/register"
              class="purchase-button dark text-warning text-decoration-none"
              >Registrati ora</a
            >
          </div>
        </div>
      </div>
      <div class="card-wrapper">
        <div class="card light">
          <div class="text-overlay">
            <h2>Silver</h2>
            <div class="price">€5,99</div>
            <div class="details-text">
              <span>Pagamento instantaneo</span>
              <span>Semplice e veloce</span>
              <span>Durata 72 ore</span>
            </div>
          </div>
          <div class="purchase-button-container">
            <h2 class="back-h2 text-muted">SILVER</h2>
            <i class="fa-solid fa-medal text-muted"></i>
            <a
              href="/register"
              class="purchase-button dark text-muted text-decoration-none"
              >Registrati ora</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PacksDetail",
};
</script>

<style scoped lang="scss">
/* #page-height{
    height: 70vh;
}

.card-pack {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  background-color: rgba(191,212,255,0.22); 
}

.card-pack:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}  */

@import url("https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Source+Sans+Pro:wght@400;700&display=swap");

$dark: #272727;
$light: #fbfbfb;
$bg: rgb(47, 79, 79);

$animation-speed-fast: 0.8s;
$animation-speed-slow: 1s;

body {
  margin: 0;
  height: 100vh;
  background-color: #d6d6d6;
  font-family: "Libre Baskerville", serif;
  font-family: "Source Sans Pro", sans-serif;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 70vh;
}

.card {
  width: 260px;
  height: 355px;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  position: relative;
  perspective: 1000px;
  transform: perspective(1000px) translateY(0);
  transform-style: preserve-3d;
  transition: transform $animation-speed-fast ease-in-out;

  &.dark {
    background-color: $dark;
    color: $light;

    .purchase-button {
      border: 1px solid $bg;
    }
  }

  &.light {
    background-color: $light;
    color: $dark;
    .purchase-button {
      border: 1px solid $bg;
    }
  }
}

.card-container {
  display: flex;
}

.card-wrapper:hover {
  .card {
    transform: rotateY(179deg);
    z-index: 2;

    .text-overlay {
      opacity: 0;
      transform-style: preserve-3d;
      z-index: 1;
    }

    .purchase-button-container {
      opacity: 1;
    }
  }
}

.text-overlay {
  transform: perspective(1000px) translateY(0) translateZ(80px);
  transition: transform $animation-speed-fast ease-in-out,
    opacity $animation-speed-slow ease;
  pointer-events: none;
  width: 100%;
  perspective: inherit;
  padding-top: 50px;
}

h1 {
  color: $dark;
}

h2 {
  font-size: 0.9rem;
  text-align: center;
  font-weight: 500;
}

.price {
  text-align: center;
  font-size: 1.8rem;
  font-weight: 900;
  margin: 20px;
}

.purchase-button-container {
  color: $bg;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  left: 0;
  top: 0;
  transform: perspective(1000px) rotateY(179deg) translateY(0) translateZ(80px);
  opacity: 0;
  z-index: -1;
  transition: transform $animation-speed-fast ease-in-out,
    opacity $animation-speed-slow ease;
  width: 100%;
  height: 100%;

  .purchase-button {
    padding: 10px 40px;
    border-radius: 50px;
    font-size: 1.2rem;
    transition: background-color 0.25s ease, color 0.25s ease;
    cursor: pointer;

    &.light:hover {
      background-color: $bg;
      color: $light;
    }

    &.dark:hover {
      background-color: $bg;
      color: $dark;
    }
  }
  a.purchase-button {
    &:hover {
      color: white !important;
    }
  }
}

.details-text {
  margin-top: 20px;
  display: flex;
  gap: 10px 10px;
  align-items: center;
  text-align: center;
  flex-direction: column;
  color: #858585;
  font-size: 0.75rem;
}

small {
  font-size: 0.75rem;
  font-weight: 100;
  color: #858585;
}

.fa-solid {
  font-size: 3rem;
  margin-bottom: 2rem;
}

.back-h2 {
  font-size: 2rem;
  margin-top: 0;
}
</style>