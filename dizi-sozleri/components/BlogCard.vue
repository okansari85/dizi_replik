<template>
<v-col cols="12" sm="6" md="6" class="pr-5 pl-5"  v-for="article in data" :key="article._path">
  <NuxtLink :to="article._path + '/'">
      <v-hover>
        <template v-slot:default="{ isHovering, props }">
          <v-card class="mx-auto mb-12 rounded-lg" :elevation="isHovering ? 16 : 2" v-bind="props">
          <v-img cover height="250" :src="article.cover"></v-img>
          <v-card-item>
            <v-card-title style="font-size: 25px; font-weight: 600;"> {{ article.headline }}</v-card-title>
          </v-card-item>
          <v-card-text>
            <div style="line-height: 1.5rem;">{{ article.description }}</div>
          </v-card-text>
          <v-divider class="mx-4 mb-1"></v-divider>
          <v-card-actions>
            <v-card-text>
            <div> {{ $formatDate(article.date) }}</div>
          </v-card-text>
          </v-card-actions>
        </v-card>
      </template>
    </v-hover>
  </NuxtLink>
</v-col>
</template>
<script setup>
const props = defineProps({
    data: {
        type: Array,
        required: true
    },
    message: {
        type: String,
        default: "There are no posts right now, but stay tuned for newer releases in the future."
    }
});
const { $formatDate } = useNuxtApp();
</script>