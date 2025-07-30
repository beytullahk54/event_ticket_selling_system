<template>
  <EventsList :events="events" />
</template>

<script>
export default {
  data() {
    return {
      events: [
        {
          id: 1,
          image: 'https://picsum.photos/906/701',
          name: 'Etkinlik 1',
          description: 'Bu etkinlik hakkında kısa bir açıklama.'
        },
        {
          id: 2,
          image: 'https://picsum.photos/906/702',
          name: 'Etkinlik 2',
          description: 'Bu etkinlik hakkında kısa bir açıklama.'
        },
        {
          id: 3,
          image: 'https://picsum.photos/906/703',
          name: 'Etkinlik 2',
          description: 'Bu etkinlik hakkında kısa bir açıklama.'
        },
        {
          id: 4,
          image: 'https://picsum.photos/906/704',
          name: 'Etkinlik 3',
          description: 'Bu etkinlik hakkında kısa bir açıklama.'
        },
        {
          id: 5,
          image: 'https://picsum.photos/906/705',
          name: 'Etkinlik 4',
          description: 'Bu etkinlik hakkında kısa bir açıklama.'
        },
        {
          id: 6,
          image: 'https://picsum.photos/906/706',
          name: 'Etkinlik 5',
          description: 'Bu etkinlik hakkında kısa bir açıklama.'
        },
        {
          id: 7,
          image: 'https://picsum.photos/906/707',
          name: 'Etkinlik 6',
          description: 'Bu etkinlik hakkında kısa bir açıklama.'
        },
        // Diğer etkinlikler...
      ]
    }
  }
}
</script>
