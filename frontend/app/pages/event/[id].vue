<template>
    <Header :title="`EVENT TICKET SELLING SYSTEM ${eventId}`" />
    <EventDetail :event="event" />
</template>

<script setup>
const route = useRoute()
const eventId = route.params.id

// Sahte etkinlik verisi
const event = {
    id: eventId,
    name: 'Örnek Etkinlik',
    date: '2023-12-01',
    location: 'İstanbul',
    image: 'https://picsum.photos/906/701',
    description: 'Bu bir örnek etkinlik açıklamasıdır.'
}
</script>