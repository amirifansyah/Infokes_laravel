<template>
  <div>
    <ul>
      <li v-for="subFolder in subFolders" :key="subFolder.id">
        {{ subFolder.name }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['folderId'],
  data() {
    return {
      subFolders: [],
    };
  },
  watch: {
    folderId: 'fetchSubFolders',
  },
  methods: {
    async fetchSubFolders() {
      if (this.folderId) {
        const response = await fetch(`/api/folders/${this.folderId}`);
        this.subFolders = await response.json();
      } else {
        this.subFolders = [];
      }
    },
  },
};
</script>
