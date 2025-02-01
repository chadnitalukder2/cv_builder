<template>
    <div>
      <h1>My CVs</h1>
      <router-link to="/create">Create New CV</router-link>
      <ul>
        <li v-for="cv in cvs" :key="cv.id">
          <router-link :to="'/edit/' + cv.id">{{ cv.title }}</router-link>
          <button @click="deleteCv(cv.id)">Delete</button>
          <button @click="downloadPdf(cv.id)">Download as PDF</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  // Reactive state
  const cvs = ref([]);
  
  // Fetch data on component mount
  onMounted(async () => {
    try {
      const response = await axios.get('/api/cvs');
      cvs.value = response.data;
    } catch (error) {
      console.error('Error fetching CVs:', error);
    }
  });
  
  // Methods
  const deleteCv = async (id) => {
    try {
      await axios.delete(`/api/cvs/${id}`);
      cvs.value = cvs.value.filter((cv) => cv.id !== id);
    } catch (error) {
      console.error('Error deleting CV:', error);
    }
  };
  
  const downloadPdf = (id) => {
    window.open(`/cvs/${id}/download`, '_blank');
  };
  </script>
  