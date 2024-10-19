<template>
    <div class="app">
      <div class="left-panel">
        <FolderTree @folder-selected="updateSelectedFolder" />
      </div>
      <div class="right-panel">
        <SubFolders :folderId="selectedFolder" />
      </div>
    </div>
  </template>
  
  <script>
  import FolderTree from './components/FolderTree.vue';
  import SubFolders from './components/SubFolders.vue';
  
  export default {
    components: {
      FolderTree,
      SubFolders,
    },
    data() {
      return {
        selectedFolder: null, // Menyimpan ID folder yang dipilih
      };
    },
    methods: {
      updateSelectedFolder(id) {
        this.selectedFolder = id; // Memperbarui ID folder yang dipilih
      },
    },
  };
  </script>
  
  <style scoped>
  .app {
    display: flex;
  }
  .left-panel, .right-panel {
    width: 50%;
    padding: 10px;
  }
  </style>
  