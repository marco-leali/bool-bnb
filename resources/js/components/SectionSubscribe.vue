<template>
   <section id="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3>ISCRIVITI ORA ALLA NOSTRA NEWSLETTER</h3>
          <p>Unisciti alla community</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <div
            class="box-input d-flex align-items-center justify-content-center"
          >
            <input type="text" placeholder="inserisci email" />
            <button class="btn btn-secondary">Iscriviti</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
    name:"SectionSubscribe"
}
</script>

<style scoped lang="scss">
#subscribe {
  padding: 70px 0; 

  .box-input {
    width: 50%;
    height: 65px;
    box-shadow: 3px 4px 17px -5px black;
    border-radius: 10px;
    input {
      width: 75%;
      border: 0;
      padding-left: 25px;
      outline: 0;
    }
    button {
      width: 189px;
      height: 66px;
    }
  }
}
</style>