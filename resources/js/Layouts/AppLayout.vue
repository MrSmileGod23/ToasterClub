<template>


    <Header/>

    <slot/>

    <Footer/>


</template>


<script>

import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';

export default {
    name: "AppLayout",
    components: {
        Header,Footer
    }
};
</script>

