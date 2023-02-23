<template>
 <p>
    <router-link to="/">Book List</router-link>
</p>
 <p>
    <router-link to="/create/book">Create Book</router-link>
</p>
 <p>
    <router-link to="/edit/book">Edit Book</router-link>
</p>
  <router-view></router-view>
</template>

<script>

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
