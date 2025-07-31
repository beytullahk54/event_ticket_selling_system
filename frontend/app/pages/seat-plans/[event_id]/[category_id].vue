<template>
    <div class="mb-8 p-4">
        <EventsBus :eventId="eventId" />
    </div>

    <div class=" flex justify-end " >
          <NuxtLink to="/payment" class="btn btn-secondary btn-lg m-4 gap-2 w-1/4">
            Bilet Oluştur
          </NuxtLink>
      </div>
</template>

<script setup>
  const route = useRoute()
  const eventId = route.params.event_id
  const categoryId = route.params.category_id

  const ticketStore = useMyTicketStore()

  onMounted(async () => {
      ticketStore.setEventId(eventId)
      ticketStore.setCategoryId(categoryId)
  })
</script>