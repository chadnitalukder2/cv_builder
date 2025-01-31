<template>
  <div>
    <h1>Create CV</h1>
    <form @submit.prevent="createCv">
      <input v-model="title" placeholder="Title" required />
      <textarea v-model="content" placeholder="Content" required></textarea>
      <button type="submit">Save</button>
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
  methods: {
    async createCv() {
      await axios.post('/api/cvs', {
        title: this.title,
        content: this.content,
        user_id: 1,
      });
      this.$router.push('/');
    },
  },
};
</script>
