<template>
<v-layout class="rounded rounded-md" >
      <v-app flex>
      <AppHeader />
      <v-parallax
      id="info_bar"
    height="250"
    src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
  >
  <v-container fluid  style="max-width: 1200px; position: relative;" class="d-flex pa-0">
    <v-row no-gutters class="ma-0 pa-0">
      <v-col
      cols="12"
      sm="12"
      md="12"
      class="pr-5 pl-5">
      <BreadCrumbs/>
      <ContentQuery :path="$route.path" find="one" v-if="$route.path !='/'">
        <template #default="{ data }">
          <div class="d-flex flex-column fill-height justify-center align-left text-white">
            <h1 class="text-h4 font-weight-thin mb-0">
              {{ data.headline }}
            </h1>
            <h4 class="subheading font-weight-thin">
              Dizilerden hayatımıza yerleşen meşhur sözler
            </h4>
      </div>
    </template>
    </ContentQuery>
      <div class="d-flex flex-column fill-height justify-center align-left text-white"  v-if="$route.path =='/'">
            <h1 class="text-h4 font-weight-thin mb-0">
              Dizi Sözleri
            </h1>
            <h4 class="subheading font-weight-thin">
              Dizilerden hayatımıza yerleşen meşhur sözler
            </h4>
      </div>
      </v-col>
  </v-row>
  </v-container>
</v-parallax>
      <v-main class="d-flex align-center justify-center" style="min-height: 300px;">
        <slot />
    </v-main>
      <AppFooter />
    </v-app>
</v-layout>
</template>
<style>
#info_bar{
align-items: center;
font-size: 14px;

}

.text-h4{
  color:rgb(255, 230, 177);
}

.subheading{
  color:rgb(253, 189, 49);
}
</style>