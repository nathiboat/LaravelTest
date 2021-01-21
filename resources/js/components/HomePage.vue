<template>
   <section>
       <div class="row">
           <div class="col">
               <client-media
                   v-for="client in clients"
                   :client="client"
                   :key="client.id"
               />
           </div>
       </div>
   </section>
</template>

<script>
import axios from 'axios'

export default {
    data () {
        return {
            clients: null
        }
    },

    methods: {
        async getUser() {
            let response = await axios.get('/api/clients')

            this.clients = response.data.data
        }
    },

    mounted() {
        this.getUser()
    }
}
</script>
