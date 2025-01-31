<template>
    <div>
      <h1>Edit CV</h1>
      <form @submit.prevent="updateCv">
        <input v-model="title" required />
        <textarea v-model="content" required></textarea>
        <button type="submit">Update</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        title: '',
        content: '',
      };
    },
    async created() {
      let response = await axios.get(`/api/cvs/${this.$route.params.id}`);
      this.title = response.data.title;
      this.content = response.data.content;
    },
    methods: {
      async updateCv() {
        await axios.put(`/api/cvs/${this.$route.params.id}`, {
          title: this.title,
          content: this.content,
        });
        this.$router.push('/');
      },
    },
  };
  </script>
  