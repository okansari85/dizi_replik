<template>
<ol itemscope itemtype="https://schema.org/BreadcrumbList" class="blog-breadcrumb">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/"> <span itemprop="name">Anasayfa</span></a>
        <meta itemprop="position" content="1" />
    </li>
    <ContentQuery :path="$route.path" find="one" v-if="$route.path !='/'">
        <template #default="{ data }">
    <li class="separator"> / </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> 
        <span itemprop="name">{{ data?.headline }}</span>
        <meta itemprop="position" content="2" />
    </li>
    </template>
    </ContentQuery>
    

</ol>

</template>
