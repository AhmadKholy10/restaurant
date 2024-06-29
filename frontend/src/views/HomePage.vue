<template>
     <!-- eslint-disable -->
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row align-items-center">
                <Menu />
            </div>
        </div>
    </section>
</template>

<script>
    //eslint-disable
    import Menu from "../components/Menu.vue";
    export default {
    name: 'HomePage',
    components: {
        Menu,
    },
    }
</script>

<style>

</style>