<template>
    <div class="grid">
        <div v-for="post in arrRandom" :key="post.id" class="tile">
            <a :href="'admin/posts/' + post.id"
                ><img :src="post.image" class="card-img-top" :alt="post.title"
            /></a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            arrRandom: null,
        };
    },
    created() {
        axios
            .get("/api/posts/random")
            .then((response) => (this.arrRandom = response.data.results));
    },
};
</script>

<style lang="scss" scoped>
.grid {
    display: flex;
    flex-wrap: wrap;
    height: 70vh;
}

.tile {
    flex: 0 0 calc(100% / 3);
    height: calc(100% / 3);
}

.tile img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
