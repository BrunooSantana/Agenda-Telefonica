<template>
  <div>
   <h1>Lista Telefônica</h1>
   <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Celular</th>
        <th>E-mail</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="book in books" v-bind:key="book.id">
        <td>{{ book.nome }}</td>
        <td>{{ book.celular }}</td>
        <td>{{ book.e-mail }}</td>
        <td> <router-link :to="'/edit/book/${book.id}'"><button>Edit</button></router-link></td>
        <td><button>Delete</button></td>
      </tr>
    </tbody>
   </table>
  </div>
</template>

<script>
export default {
  name: 'BookList',
  data(){
    return {
      books: {}
    }
  },
  methods:{
    listBook(){
      try {
        fetch("http://127.0.0.1:8000/api/books").then(response => response.json()).then(data =>{
          this.book = data;
          console.log(this.books);
        });
      }
      catch (error) {
        console.log(this.error);
      }
      console.log(this.books);
    }
  },
  mounted(){
    this.listBook();
  }
}
</script>

<style>

</style>
