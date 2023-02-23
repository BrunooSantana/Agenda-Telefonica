<template>
  <div>
   <h1>Criar Contato</h1>
   <form @submit.prevent="addBook">
     <img alt="Foto do Contato" src="../assets/contacts-icon.png">
     <br><br>
     <label for="t">  Nome: <input type="text" v-model="book.nome"> </label>
     <br><br>
     <label for="t">Celular: <input type="number" v-model="book.telefone"> </label>
     <br><br>
     <label for="t">E-mail: <input type="text" v-model="book.email"> </label>
     <br><br>
     <button type="submit">Criar novo contato</button>
  </form>
  </div>
</template>

<script>
export default {
  name: 'CreateBook',
  data(){
      return {
        book: {}
      }
  },
  methods: {
    addBook(){
      try {
        fetch("http://127.0.0.1:8000/api/books",{
          method: "POST",
          headers: {
            'Content-Type':  'application/json'
          },
          body: JSON.stringify(this.book)
        }).then(response => response.json()).then(data =>{
          this.book = data;
          console.log(this.book);
        })
      }
      catch (error) {
        console.log(this.error);
      }
      console.log(this.book);
    }
  },

  created(){
    this.addBook();
  }
}

</script>

<style>

</style>
