<template>
    <div class="mb-8 p-4">
        <EventsBus />
    </div>

    <div class=" flex justify-end " >
          <!-- <button @click="ticketCreate" class="btn btn-secondary btn-lg flex-1 gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
              </svg>
              Bilet Oluştur
          </button> -->
          <NuxtLink to="/payment" class="btn btn-secondary btn-lg m-4 gap-2 w-1/4">
            Bilet Oluştur
          </NuxtLink>
      </div>
</template>

<script setup>
  const route = useRoute()
  const ticketId = route.params.ticket_id
  const categoryId = route.params.category_id
  const ticket = ref(null)

  const ticketStore = useMyTicketStore()

  onMounted(async () => {
      // const response = await axios.get(`http://localhost:8000/api/tickets/${ticketId}`)
      // ticket.value = response.data.data
      ticketStore.setEventId(ticketId)
      ticketStore.setCategoryId(categoryId)
  })
</script>