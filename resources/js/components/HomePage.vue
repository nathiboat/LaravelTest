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
    import { mapActions, mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters({
            clients: 'clients/clients'
        })
    },
    methods: {
        ...mapActions({
            getClients: 'clients/getClients'
        })
    },

    mounted() {
        this.getClients()
    }


}
</script>
