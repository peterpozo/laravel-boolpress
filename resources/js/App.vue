<template>
    <div>
        <Navbar></Navbar>
        <main class="container">
            <router-view></router-view>
        </main>
        <FooterComponent />
    </div>
</template>

<script>
import Navbar from "./components/NavBar";
import FooterComponent from "./components/FooterComponent";
export default {
    name: "App",
    components: {
        Navbar,
        FooterComponent,
    },
};
</script>

<style lang="scss">
@import "~bootstrap/scss/bootstrap";
</style>
