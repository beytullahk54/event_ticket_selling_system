<template>
  <div class="container mx-auto py-8" >
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div v-for="event in events" :key="event.id" class="card bg-base-100 shadow-xl">
        <NuxtLink :to="`/events/${event.id}`">
          <figure>
            <img :src="event?.image_url" alt="Event Image" class="w-full h-48 object-cover" />
          </figure>
            <div class="card-body">
            <h2 class="card-title">{{ event?.title.length > 35 ? event?.title.substring(0, 35) + '...' : event?.title }}</h2>
            <!-- <p>{{ event?.description }}</p> -->
             {{ event?.venue?.name }} / {{ dateUtils.formatDate(event?.event_date) }}
            </div>
        </NuxtLink>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  events: {
    type: Array,
    required: true
  }
})
</script>