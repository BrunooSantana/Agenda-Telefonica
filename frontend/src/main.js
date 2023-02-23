import { createApp } from 'vue'
import App from './App.vue'
import {createRouter, createWebHashHistory} from 'vue-router'
import BookList from './components/BookList.vue'
import CreateBook from './components/CreateBook.vue'
import EditBook from './components/EditBook.vue'

const routes  = [
  {
    path: '/', component: BookList
  },
  {
    path: '/create/book', component: CreateBook
  },
  {
    path: '/edit/book/:id', component: EditBook
  }
]

const router = createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: createWebHashHistory(),
  routes, // short for `routes: routes`
})

createApp(App).use(router).mount('#app')
