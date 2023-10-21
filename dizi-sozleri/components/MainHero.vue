<template>
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
<ol itemscope itemtype="https://schema.org/BreadcrumbList" class="blog-breadcrumb">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/"> <span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1" />
    </li>
</ol>
  <div class="d-flex flex-column fill-height justify-center align-left text-white">
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
</template>