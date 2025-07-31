<template>
    <EventsDetail :event="event" :categories="categories" />
</template>

<script setup>
import axios from 'axios'
const route = useRoute()
const eventId = route.params.id
const ticketStore = useMyTicketStore()
const event = ref(null)
const categories = ref(null)

onMounted(async () => {
    const response = await axios.get(`http://localhost:8000/api/events/${eventId}`)
    event.value = response.data.data
    categories.value = response.data.ticket_categories
    ticketStore.setSelectedEvent(event.value)
})



// const event = {
//     id: eventId,
//     name: 'Örnek Etkinlik',
//     date: '2023-12-01',
//     location: 'İstanbul',
//     image: 'https://picsum.photos/906/701',
//     description: 'Bu bir örnek etkinlik açıklamasıdır.'
// }
</script>