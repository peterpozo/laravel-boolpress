<template>
    <div>
        <Navbar></Navbar>
        <main class="container">
            <router-view></router-view>
        </main>
    </div>

</template>

<script>
    import Navbar from './components/NavBar'
    export default{
        name: 'App',
        components:{
            Navbar,
        },

    }
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>


