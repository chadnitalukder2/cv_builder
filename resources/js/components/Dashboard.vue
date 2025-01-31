<template>
    <div>
      <h1>My CVs</h1>
      <router-link to="/create">Create New CV</router-link>
      <ul>
        <li v-for="cv in cvs" :key="cv.id">
          <router-link :to="'/edit/' + cv.id">{{ cv.title }}</router-link>
          <button @click="deleteCv(cv.id)">Delete</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return { cvs: [] };
    },
    async created() {
      let response = await axios.get('/api/cvs');
      this.cvs = response.data;
    },
    methods: {
      async deleteCv(id) {
        await axios.delete(`/api/cvs/${id}`);
        this.cvs = this.cvs.filter(cv => cv.id !== id);
      }
    }
  };
  </script>
  