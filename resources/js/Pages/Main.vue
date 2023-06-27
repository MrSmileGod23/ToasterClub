
<template>
    <AppLayout>
    <div class="mx-auto grid h-full max-w-7xl grid-cols-5 px-5 pt-5 xl:px-0">
        <div class="col-span-5 sm:pr-20 md:col-span-4 md:p-0 lg:pr-60">
            <p class="pb-10 text-5xl md:text-6xl">КТО ТАКИЕ ТОСТЕРЫ?</p>
            <p class="text-xl NunitoSans sm:text-2xl">Мы владельцы автомобилей, обладающих уникальной формой кузова, напоминающей в некотором роде тостер, гордимся своими машинами. Наши автомобили, такие как Toyota bB, Scion xB, Daihatsu Coo, Rumion и другие, выделяются на дороге своей привлекательной внешностью и стилем. Они привлекают внимание людей и вызывают у них удивление.
                <br> <br> <br>
                Мы увлекаемся тюнингом и кастомизацией наших автомобилей, чтобы сделать их еще более уникальными и индивидуальными. Мы стремимся принимать участие в различных мероприятиях, связанных с нашими автомобилями, таких как выставки, сходки и соревнования.
                <br> <br> <br>
                Наш клуб "ToasterClub" объединяет людей, которые разделяют наши интересы и страсть к этим уникальным автомобилям. Мы общаемся, делимся опытом и информацией о технических аспектах модификации и тюнинга автомобилей.
                <br> <br> <br>
                В целом, наши автомобили "тостеры" являются не только транспортными средствами, но и способом выражения нашей индивидуальности и стиля.</p>
        </div>
        <div class="col-span-1 hidden flex-col gap-24 pt-20 md:flex">
            <img src="storage/img/bb.svg" />
            <img src="storage/img/bB2.svg" />
            <img src="storage/img/Daihatsu Coo.svg" />
            <img src="storage/img/Rumion.svg" />
        </div>
    </div>
    </AppLayout>
</template>


<script>

import AppLayout from '../layouts/AppLayout.vue';

export default {
    name: "Main",
    components: {
        AppLayout,
    },
    created() {
        this.getTopics();
    },
    data() {
        return {
            topics: [],
        }
    },
    methods: {
        getTopics() {
            axios.get('/api/topics')
                .then((response) => (this.topics = response.data.data.topics))
        },
    }
};
</script>
