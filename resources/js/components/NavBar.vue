<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <router-link :to="{name: 'home'}" class="navbar-brand">Home</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto pl-4">
                    <li class="nav-item">
                        <router-link :to="{name: 'about'}" class="navbar-brand">About</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'postsIndex'}" class="navbar-brand">Posts</router-link>
                    </li>
                </ul>
                <form action="">
                    <ul class="navbar-nav mr-auto pl-4 gap-5">
                        <li class="nav-item">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"></input>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
