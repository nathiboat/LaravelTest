<template>
    <div>
        {{ user }}
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        data () {
            return {
                user: null
            }
        },

        methods: {
            async getUser() {
                let response = await axios.get('/api/clients')

                this.user = response.data.data
            }
        },

        mounted() {
            this.getUser()
        }
    }
</script>
