<template>
<v-app-bar
id="nav"
:class="foo ? 'affix' : 'normal'"
elevation="0"
app
>
<v-toolbar-title>
<img src="/images/dizi_sozleri_logo.png" id="logo">
</v-toolbar-title>
</v-app-bar>
</template>
<script>
export default {
  data(){
    return {
      foo : false,
      windowTop: 0
    }
  },
  mounted() {
    window.addEventListener("scroll", this.onScroll)
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.onScroll)
  },
  methods: {
    onScroll(e) {
      this.windowTop = window.top.scrollY /* or: e.target.documentElement.scrollTop */
      this.foo = this.windowTop > 250 ? true: false;
    }
  }
}

</script>
<style>
#nav {
  position: sticky !important;
  border-bottom:1px solid #efefef;
  text-align: center;
}
#nav.affix{
  top:0px !important;
  transition: top 0.5s;
}
#nav.normal{
  top:-64px !important;
  transition: top 0.3s;
}
#logo{
  width:130px;
  padding-top:5px
}
</style>