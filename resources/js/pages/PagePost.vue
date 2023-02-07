<template>
    <div v-if="objPost">
        <h1>{{ objPost.title }}</h1>
        <h2>Nella categoria: {{ objPost.category.name }}</h2>
        <div class="tags">
            <span v-for="tag in objPost.tags" :key="tag.id" class="tag">{{
                tag.name
            }}</span>
        </div>
        <img :src="post.image" class="card-img-top" :alt="post.title" />
        <p>
            {{ objPost.content }}
        </p>
    </div>
</template>

<script>
// TODO: gestire la 404 dei post non esistenti
export default {
    props: ["slug"],
    data() {
        return {
            objPost: null,
        };
    },
    created() {
        axios
            .get("/api/posts/" + this.slug)
            .then((response) => (this.objPost = response.data.results));
    },
};
</script>

<style lang="scss" scoped>
.tag {
    display: inline-block;
    margin: 0.3em;
    padding: 0.4em 0.6em;
    border-radius: 10em;
    background-color: salmon;
}
</style>
