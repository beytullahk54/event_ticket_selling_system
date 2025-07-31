<template>
  <EventsList :events="events" />
</template>

<script>
import axios from 'axios'

export default {
  setup() {
    const config = useRuntimeConfig()

    const events = ref([])
    
    const getEvents = async () => {
      try {
        const response = await axios.get(`${config.public.apiBase}/api/events`)
        events.value = response.data.data
      } catch (error) {
        console.error('Etkinlikler yüklenirken hata oluştu:', error)
      }
    }

    onMounted(() => {
      console.log('mounted')
      getEvents()
    })

    return {
      events
    }
  }
}
</script>
