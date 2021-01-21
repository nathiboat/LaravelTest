<template>
    <div class="media border border-dark rounded p-4" style="cursor: pointer">
        <img :src="client.avatar" class="mr-3" alt="...">
        <div class="media-body">
            <h5 class="mt-0">{{ client.first_namne }}  {{ client.last_name }}</h5>
        </div>
        <button type="button" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary">Delete</button>
    </div>
</template>

<script>
    export default {
        props: {
            client: {
                required: true,
                type: Object
            }
        },

        methods () {

        }
    }
</script>
