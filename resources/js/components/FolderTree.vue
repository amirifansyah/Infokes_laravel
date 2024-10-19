<template>
  <div>
    <ul>
      <li v-for="folder in folders" :key="folder.id" @click="selectFolder(folder.id)">
        {{ folder.name }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      folders: [],
    };
  },
  mounted() {
    this.fetchFolders();
  },
  methods: {
    async fetchFolders() {
      const response = await fetch('/api/folders');
      this.folders = await response.json();
    },
    selectFolder(id) {
      this.$emit('folder-selected', id);
    },
  },
};
</script>
