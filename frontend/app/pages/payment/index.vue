<template>
    <div class="min-h-screen bg-base-200 p-4">
      <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          
          <div class="order-1 lg:order-2">
            <div class="card bg-base-100 shadow-2xl border-0">
              <div class="card-body p-8">
                <div class="mb-6">
                  <h1 class="text-3xl lg:text-4xl font-bold text-base-content mb-2">
                    Ödeme Sayfası
                  </h1>
                </div>
              <form @submit.prevent="paymentCreate">
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-8 col-span-2">                                      
                      <label class="floating-label w-full">
                        <input type="email" v-model="payment.customer_email" placeholder="Email" class="input input-md w-full" required />
                        <span>Email</span>
                      </label>
                    </div>

                    <div class="mb-8">                                      
                      <label class="floating-label">
                        <input type="text" v-model="payment.customer_name" placeholder="Adı" class="input input-md w-full" required />
                        <span>Adı</span>
                      </label>
                    </div>
                
                    <div class="mb-8">                                      
                      <label class="floating-label">
                        <input type="text" v-model="payment.customer_surname" placeholder="Soyadı" class="input input-md w-full" required />
                        <span>Soyadı</span>
                      </label>
                    </div>
                </div>
      
                <div class="grid grid-cols-3 gap-4">
                  <div class="mb-8 col-span-3">                                      
                    <label class="floating-label">
                      <input type="number" v-model="payment.customer_phone" placeholder="Telefon Numarası" class="input input-md w-full" required />
                      <span>Telefon Numarası</span>
                    </label>
                  </div>
              
                  <h2 class="text-xl font-semibold mb-3 text-base-content">Kart Bilgileri</h2>

                  <div class="mb-8 col-span-3">                                      
                    <label class="floating-label">
                      <input type="text" v-model="payment.cc_name" placeholder="Kart Üzerindeki Adı Soyadı" class="input input-md w-full" required />
                      <span>Kart Üzerindeki Adı Soyadı</span>
                    </label>
                  </div>
                  <div class="mb-8 col-span-3">                                      
                    <label class="floating-label">
                      <input type="text" v-model="payment.cc_number" placeholder="Kart Numarası" class="input input-md w-full" required />
                      <span>Kart Numarası</span>
                    </label>
                  </div>
                  <div class="mb-8">                                      
                    <label class="floating-label">
                      <input type="text" v-model="payment.cc_exp_cvv" placeholder="Cvv" class="input input-md w-full" required />
                      <span>Cvv</span>
                    </label>
                  </div>
                  
                  <div class="mb-8">                                      
                    <label class="floating-label">
                      <select class="select select-bordered w-full" v-model="payment.cc_exp_month" required>
                        <option disabled selected>Ay</option>
                        <option v-for="i in 12" :key="i" >{{ i }}</option>
                      </select>
                      <span>Ay</span>
                    </label>
                  </div>
                  <div class="mb-8">                                      
                    <label class="floating-label">
                      <select class="select select-bordered w-full"  v-model="payment.cc_exp_year" required  >
                        <option disabled selected>Yıl</option>
                        <option v-for="i in 10" :key="i" :value="2024 + i">{{ 2024 + i }}</option>
                      </select>
                      <span>Yıl</span>
                    </label>
                  </div>
                  
                </div>

                <div class="flex justify-end">
                  <button class="btn btn-primary btn-lg flex-1 gap-2" type="submit">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Ödeme Yap
                  </button>
                </div>
              </form>
              </div>
            </div>  
          </div>
  
          <div class="order-1 lg:order-2">
            <div class="card bg-base-100 shadow-2xl border-0">
              <div class="card-body p-8">
                <div class="mb-6">
                  <h1 class="text-3xl lg:text-4xl font-bold text-base-content mb-2">
                    {{ ticketStore.selectedEvent?.title }}
                  </h1>
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
                      <p class="font-semibold text-base-content">{{ dateUtils.formatDate(ticketStore.selectedEvent?.event_date) }} {{ dateUtils.formatTime(ticketStore.selectedEvent?.event_date) }}</p>
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
                      <p class="font-semibold text-base-content">{{ ticketStore?.selectedEvent?.venue?.name }} / {{ ticketStore?.selectedEvent?.venue?.address }}</p>
                    </div>
                  </div>
                </div>
  
                <div class="mb-8">
                  <h3 class="text-xl font-semibold mb-3 text-base-content">Etkinlik Hakkında</h3>
                  <p class="text-base-content/80 leading-relaxed">{{ ticketStore.selectedEvent?.description }}</p>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>

  import { useRouter } from 'vue-router'
  const router = useRouter()
  const seatView = ref(false)
  const ticketStore = useMyTicketStore()
  import axios from 'axios' 
  import { useToast } from 'vue-toast-notification';
  import 'vue-toast-notification/dist/theme-sugar.css';
  const toast = useToast();
  const config = useRuntimeConfig()
  const payment = ref({
    customer_email: '',
    customer_name: '',
    customer_surname: '',
    customer_phone: '',
    cc_name: '',
    cc_number: '',
    cc_exp_month: '',
    cc_exp_year: '',
    cc_exp_cvv: '',
    event_id: ticketStore.selectedEvent?.id || null,
  })

  onMounted(() => {
    if(ticketStore.selectedEvent?.id == null) {
      return router.push(`/`)
    }
  })

  const paymentCreate = async () => {
    const payload = {
      ...payment.value,
      ticket_id: ticketStore.ticket.id,
      category_id: ticketStore.ticket.category_id,
      seat_id: ticketStore.ticket.seats.join(',')
    }

    
    try{
      const response = await axios.post(`${config.public.apiBase}/api/payments`, payload)
      if (response.status == 201) {
        toast.success(response.data.message)
        payload.data = response.data 
        ticketStore.setPayment(payload)
        router.push(`/success-page`)
      } 
    }catch(error){
      toast.error(error.response.data.message)
    }
    
    
  }

  </script>
  