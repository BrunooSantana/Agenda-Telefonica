<template>
  <div>
   <h1>Edit List</h1>
   <p>{{ id }}</p>
  </div>
</template>

<script>
export default {
  name: 'EditList',
  data(){
    return {
      id: this.$route.params.id
    }
  }
}
</script>

<style>

</style>
