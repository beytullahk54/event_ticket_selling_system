<template>
  <div class="min-h-screen bg-base-200 p-4">
    <div class="max-w-4xl mx-auto">
      
      <!-- Başarı Mesajı -->
      <div class="card bg-success text-success-content shadow-2xl mb-8">
        <div class="card-body text-center">
          <div class="text-6xl mb-4">✅</div>
          <h1 class="text-3xl font-bold mb-2">Ödeme Başarılı!</h1>
          <p class="text-lg">Biletiniz başarıyla satın alındı.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- Müşteri Bilgileri -->
        <div class="card bg-base-100 shadow-2xl">
          <div class="card-body">
            <h2 class="text-2xl font-bold mb-6">Müşteri Bilgileri</h2>
            
            <div class="space-y-4">
              <div class=" pb-3">
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-semibold">{{ ticketStore.ticket.payment.customer_email }}</p>
              </div>
              
              <div class=" pb-3">
                <p class="text-sm text-gray-500">Ad Soyad</p>
                <p class="font-semibold">{{ ticketStore.ticket.payment.customer_name }} {{ ticketStore.ticket.payment.customer_surname }}</p>
              </div>
              
              <div class=" pb-3">
                <p class="text-sm text-gray-500">Telefon</p>
                <p class="font-semibold">{{ ticketStore.ticket.payment.customer_phone }}</p>
              </div>
            </div>

            <h3 class="text-xl font-bold mt-8 mb-4">Ödeme Bilgileri</h3>
            <div class="space-y-4">
              <div class=" pb-3">
                <p class="text-sm text-gray-500">Kart Sahibi</p>
                <p class="font-semibold">{{ ticketStore.ticket.payment.cc_name }}</p>
              </div>
              
              <div class=" pb-3">
                <p class="text-sm text-gray-500">Kart Numarası</p>
                <p class="font-semibold">{{ ticketStore.ticket.payment.cc_number }}</p>
              </div>
              
              <div class=" pb-3">
                <p class="text-sm text-gray-500">Son Kullanma Tarihi</p>
                <p class="font-semibold">{{ ticketStore.ticket.payment.cc_exp_month }}/{{ ticketStore.ticket.payment.cc_exp_year }}</p>
              </div>

              <div class=" pb-3"> 
                <p class="text-sm text-gray-500">Sipariş Numarası</p>
                <p class="font-semibold">PNR{{ ticketStore.ticket.payment.data.order_id.toString().padStart(10, '0') }}</p>
              </div>

            </div>
          </div>
        </div>

        <!-- Etkinlik Bilgileri -->
        <div class="card bg-base-100 shadow-2xl">
          <div class="card-body">
            <h2 class="text-2xl font-bold mb-6">{{ ticketStore.selectedEvent?.title }}</h2>
            
            <div class="space-y-4 mb-6">
              <div class="flex items-center gap-3 p-3 bg-base-200 rounded-lg">
                <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Tarih</p>
                  <p class="font-semibold">{{ dateUtils.formatDate(ticketStore.selectedEvent?.event_date) }} {{ dateUtils.formatTime(ticketStore.selectedEvent?.event_date) }}</p>
                </div>
              </div>

              <div class="flex items-center gap-3 p-3 bg-base-200 rounded-lg">
                <div class="w-8 h-8 bg-secondary/10 rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 616 0z"></path>
                  </svg>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Konum</p>
                  <p class="font-semibold">{{ ticketStore?.selectedEvent?.venue?.name }} / {{ ticketStore?.selectedEvent?.venue?.address }}</p>
                </div>
              </div>
            </div>

            <div class="border-t pt-6">
              <h3 class="text-lg font-semibold mb-3">Etkinlik Hakkında</h3>
              <p class="text-gray-600 leading-relaxed">{{ ticketStore.selectedEvent?.description }}</p>
            </div>

            <div class="mt-6 pt-6 border-t">
              <div class="flex justify-between items-center">
                <span class="text-lg font-semibold">Toplam Tutar:</span>
                <span class="text-2xl font-bold text-primary">{{ ticketStore.ticket.payment.data.total_amount }} TL</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Meta title tanımla
definePageMeta({
  title: 'Ödeme Başarılı - Bilet Satış Sistemi'
})

const ticketStore = useMyTicketStore()
</script>
  