<template>
<v-container fluid  style="max-width: 1200px; position: relative;" class="d-flex pa-0">
    <v-row no-gutters class="ma-0 pa-0">
      <ContentQuery
                path="/"
                :only="['headline', 'date', '_path', 'cover','description', 'excerpt']"
                :sort="{
                    date: -1
                }"
                :limit="blogCountLimit"
                v-slot="{ data }"
            >
              <BlogCard :data="data"></BlogCard>
            </ContentQuery>
    </v-row>
</v-container>
</template>
<script setup lang="ts">
definePageMeta({
  documentDriven: false
})
// Find the number of blogs present
const blogCountLimit = 6;
const { data } = await useAsyncData(`content-/`, async () => {
    const _posts = await queryContent('/').only('headline').find()
    return Math.ceil(_posts.length / blogCountLimit);
});
</script>
