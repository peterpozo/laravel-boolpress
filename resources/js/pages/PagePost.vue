<template>
    <div>
        <h1>Show del post</h1>
        <p>
            Lo slug del post è: {{ slug }}
        </p>
    </div>

</template>

<script>
export default {
    props:[
        'slug',
        'author',
    ]
}
</script>

<style>

</style>
