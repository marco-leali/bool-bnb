<template>
  <div>
    <select name="" id="" class="form-select" aria-label="Default select example">
      <option value="">Seleziona...</option>
      <option v-for="(option, i) in options" :key="i" :value="option.value">
        {{ option.text }}
      </option>
    </select>
  </div>
</template>

<script>
export default {
  nome: "Select",
  props: ["options"],
};
</script>

<style>
</style>