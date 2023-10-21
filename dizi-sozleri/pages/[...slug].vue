<template>
    <v-container  style="max-width: 1200px;" class="">
        <ContentDoc>
                <template v-slot="{ doc }">
    <v-row>
      
        <v-col cols="12" sm="9" md="9" class="pr-5 pl-5">
     
           
          {{$formatDate(doc.date)}}
                        
                        {{ doc.headline }}
                
       {{doc.author}}
     <NavShareIcons :headline="doc.headline" :excerpt="doc.description" :path="doc._path + '/'" />
                       {{ $formatDate(doc.dateUpdated) }}
                        
                        <!-- Blog content -->
                        <ContentRenderer :value="doc" class="blog-content blog-post-text" />
            
     
    </v-col>
    <v-col cols="12" sm="3" md="3" class="pr-5 pl-5 ">
        <div class="sticky-top">
        <h2
          class="uppercase text-black font-h2 text-lg lg:mt-16 tracking-wider"
        >
          Table of contents
        </h2>
        <TableOfContents :links="doc.body?.toc?.links"  />
    </div>
    </v-col>

</v-row>
</template>
</ContentDoc>
</v-container>
</template>

<script setup>
const { $formatDate } = useNuxtApp();
const { path } = useRoute();
const cleanPath = path.replace(/\/+$/, '');
const { data, error } = await useAsyncData(`content-${cleanPath}`, async () => {
    // Remove a trailing slash in case the browser adds it, it might break the routing
    // fetch document where the document path matches with the cuurent route
    let article = queryContent('/').where({ _path: cleanPath }).findOne();
    // get the surround information,
    // which is an array of documeents that come before and after the current document
    let surround = queryContent('/').sort({ date: -1 }).only(['_path', 'headline', 'description']).findSurround(cleanPath, { before: 1, after: 1 });
    return {
        article: await article,
        surround: await surround
    };
});

// Set the meta
const baseUrl = 'https://dizisozleri.com';
const canonicalPath = baseUrl + (path + '/').replace(/\/+$/, '/');

const image = baseUrl + (data.value?.article?.socialImage.src || '/sample.webp');

// JSON+LD
const jsonScripts = [
    {
        type: 'application/ld+json',
        children: JSON.stringify({
            '@context': 'https://schema.org',
            '@type': 'BlogPosting',
            mainEntityOfPage: {
                '@type': 'WebPage',
                '@id': 'https://dizisozleri.com/'
            },
            url: canonicalPath,
            image: image,
            headline: data.value?.article?.headline,
            abstract: data.value?.article?.description,
            datePublished: data.value?.article?.date,
            dateModified: data.value?.article?.dateUpdated || data.value?.article?.date,
            author:data.value?.article?.author,
            publisher:'Okan SARI'
        })
    }
];
useHead({
    title: data.value?.article?.title,
    meta: [
        { name: 'author', content: data.value?.article?.author },
        { name: 'description', content: data.value?.article?.description },
        { property: 'article:published_time', content: data.value?.article?.date.split('T')[0] },
        // OG
        { hid: 'og:title', property: 'og:title', content: data.value?.article?.headline },
        { hid: 'og:url', property: 'og:url', content: canonicalPath },
        { hid: 'og:description', property: 'og:description', content: data.value?.article?.description },
        { hid: 'og:image', name: 'image', property: 'og:image', content: image },
        { hid: 'og:type', property: 'og:type', content: 'Article' },
        { hid: 'og:image:type', property: 'og:image:type', content: `image/${data.value?.article?.socialImage.mime}` },
        { hid: 'og:image:width', property: 'og:image:width', content: data.value?.article?.socialImage.width || 190 },
        { hid: 'og:image:height', property: 'og:image:height', content: data.value?.article?.socialImage.height || 190 },
        { hid: 'og:image:alt', property: 'og:image:alt', content: data.value?.article?.socialImage.alt },
        // Twitter
        { hid: 'twitter:card', name: 'twitter:card', content: 'Summary' },
        { hid: 'twitter:title', name: 'twitter:title', content: data.value?.article?.headline },
        { hid: 'twitter:url', name: 'twitter:url', content: canonicalPath },
        { hid: 'twitter:description', name: 'twitter:description', content: data.value?.article?.description },
        { hid: 'twitter:image', name: 'twitter:image', content: image },
        { hid: 'twitter:image:alt', name: 'twitter:image:alt', content: data.value?.article?.socialImage.alt }
    ],
    link: [
        {
            hid: 'canonical',
            rel: 'canonical',
            href: canonicalPath
        }
    ],
    script: jsonScripts
});
</script>

<style>
.sticky-top {
    position: sticky;
    top: 64px !important;
}

</style>