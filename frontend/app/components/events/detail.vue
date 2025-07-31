<template>
  <div class="min-h-screen bg-base-200 p-4">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="order-1 lg:order-1">
          <div class="relative overflow-hidden rounded-2xl shadow-2xl">
            <img 
              :src="event?.image_url" 
              alt="Etkinlik Görseli" 
              class="w-full h-80 lg:h-96 object-cover transition-transform duration-300 hover:scale-105" 
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
          </div>
        </div>

        <div class="order-2 lg:order-2">
          <div class="card bg-base-100 shadow-2xl border-0">
            <div class="card-body p-8">
              <div class="mb-6">
                <h1 class="text-3xl lg:text-4xl font-bold text-base-content mb-2">
                  {{ event?.title }}
                </h1>
                <div class="badge badge-primary badge-lg">Etkinlik</div>
              </div>

              <!-- Etkinlik Detayları -->
              <div class="space-y-4 mb-8">
                <div class="flex items-center gap-3 p-3 bg-base-200 rounded-xl">
                  <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm text-base-content/60">Tarih</p>
                    <p class="font-semibold text-base-content">{{ dateUtils.formatDate(event?.event_date) }} {{ dateUtils.formatTime(event?.event_date) }}</p>
                  </div>
                </div>

                <div class="flex items-center gap-3 p-3 bg-base-200 rounded-xl">
                  <div class="w-10 h-10 bg-secondary/10 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm text-base-content/60">Konum</p>
                    <p class="font-semibold text-base-content">{{ event?.venue?.name }} / {{ event?.venue?.address }}</p>
                  </div>
                </div>
              </div>

              <div class="mb-8">
                <h3 class="text-xl font-semibold mb-3 text-base-content">Etkinlik Hakkında</h3>
                <p class="text-base-content/80 leading-relaxed">{{ event?.description }}</p>
              </div>

              <!-- <div class="card-actions flex flex-col sm:flex-row gap-3">
                <button class="btn btn-primary btn-lg flex-1 gap-2" @click="seatView = true">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Koltuk Seç
                </button>
              </div> -->
              <h3 class="text-xl font-semibold mb-3 text-base-content">Kategori</h3>
              <div class="grid grid-cols-2 gap-2">
                <NuxtLink :to="`/seat-plans/${event.id}/${category.id}`" v-for="category in categories" :key="category.id"> 
                  <button class="btn btn-primary btn-lg flex-1 gap-2 w-full"  >
                    {{ category.name }}
                  </button>
                </NuxtLink>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import axios from 'axios'

 const props = defineProps({
    event: {
      type: Object,
      required: true
    },
    categories: {
      type: Array,
      required: true
    }
})

const seatView = ref(false)

</script>
