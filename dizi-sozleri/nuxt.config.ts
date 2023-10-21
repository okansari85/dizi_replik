// https://nuxt.com/docs/api/configuration/nuxt-config
import vuetify, { transformAssetUrls } from 'vite-plugin-vuetify'

export default defineNuxtConfig({


  googleFonts: {
    useStylesheet: true
  },
  css: ['/assets/css/main.css'],
  devtools: { enabled: true },
  
  build: {
    transpile: ['vuetify'],
  },
 
  modules: 
 
  [
    (_options, nuxt) => {
      nuxt.hooks.hook('vite:extendConfig', (config) => {
        // @ts-expect-error
        config.plugins.push(vuetify({ autoImport: true }))
      })
    },
    '@nuxt/content',
   
    [
      '@nuxtjs/google-fonts', {
      families: {
        Roboto: true,
        Inter: [400, 700],
         'Josefin+Sans': true,
        Lato: [100, 300],
        Raleway: {
          wght: [100, 400],
          ital: [100]
        },
      }
    }],
  ], 
  vite: {
    vue: {
      template: {
        transformAssetUrls,
      },
    },
  },

})
