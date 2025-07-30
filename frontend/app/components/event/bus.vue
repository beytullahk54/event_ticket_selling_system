<template>
    <div>
   
        <form method="dialog">
            <div class="flex flex-col gap-2">
                <div class="flex justify-center mb-4">
                    <div class="bg-gray-300 px-8 py-2 rounded-t-lg text-sm text-gray-600">
                        EKRAN
                    </div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <div v-for="(row, rowIndex) in seats" :key="rowIndex" class="flex justify-center gap-2">
                        <span class="w-6 text-center font-bold text-gray-600">{{ String.fromCharCode(65 + rowIndex) }}</span>
                        
                        <div class="flex gap-1">
                            <button 
                                v-for="(seat, seatIndex) in row.slice(0, 4)"
                                :key="`${rowIndex}-${seatIndex}`"
                                @click="toggleSeat(rowIndex, seatIndex)"
                                :class="getSeatClass(seat)"
                                class="w-8 h-8 rounded-t-lg text-xs font-bold transition-colors"
                                :disabled="seat.status === 'occupied'"
                            >
                                {{ seat.id }}
                            </button>
                        </div>
                        
                        <div class="w-6"></div>
                        
                        <div class="flex gap-1">
                            <button 
                                v-for="(seat, seatIndex) in row.slice(4, 8)"
                                :key="`${rowIndex}-${seatIndex + 4}`"
                                @click="toggleSeat(rowIndex, seatIndex + 4)"
                                :class="getSeatClass(seat)"
                                class="w-8 h-8 rounded-t-lg text-xs font-bold transition-colors"
                                :disabled="seat.status === 'occupied'"
                            >
                                {{ seat.id }}
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center gap-4 mt-4 text-xs">
                    <div class="flex items-center gap-1">
                        <div class="w-4 h-4 bg-green-500 rounded-t"></div>
                        <span>Boş</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <div class="w-4 h-4 bg-blue-500 rounded-t"></div>
                        <span>Seçili</span>
                    </div>
                </div>
                
                <div v-if="selectedSeats.length > 0" class="mt-4 p-3 bg-gray-100 rounded">
                    <p class="font-bold">Seçili Koltuklar:</p>
                    <p class="text-sm">{{ selectedSeats.join(', ') }}</p>
                </div>
            </div>
        </form>

    </div>
</template>

<script setup>
import { ref, computed } from 'vue'

// Koltuk verileri - 6 sıra, her sırada 8 koltuk
const seats = ref([
    // A sırası
    [
        { status: 'available', id: 1 }, { status: 'available', id: 2 }, { status: 'available', id: 3 }, { status: 'available', id: 4 },
        { status: 'available', id: 5 }, { status: 'available', id: 6 }, { status: 'available', id: 7 }, { status: 'available', id: 8 }
    ],
    // B sırası
    [
        { status: 'available', id: 9 }, { status: 'available', id: 10 }, { status: 'available', id: 11 }, { status: 'available', id: 12 },
        { status: 'available', id: 13 }, { status: 'available', id: 14 }, { status: 'available', id: 15 }, { status: 'available', id: 16 }
    ],
    // C sırası
    [
        { status: 'available', id: 17 }, { status: 'available', id: 18 }, { status: 'available', id: 19 }, { status: 'available', id: 20 },
        { status: 'available', id: 21 }, { status: 'available', id: 22 }, { status: 'available', id: 23 }, { status: 'available', id: 24 }
    ],
    // D sırası
    [
        { status: 'available', id: 25 }, { status: 'available', id: 26 }, { status: 'available', id: 27 }, { status: 'available', id: 28 },
        { status: 'available', id: 29 }, { status: 'available', id: 30 }, { status: 'available', id: 31 }, { status: 'available', id: 32 }
    ],
    // E sırası
    [
        { status: 'available', id: 33 }, { status: 'available', id: 34 }, { status: 'available', id: 35 }, { status: 'available', id: 36 },
        { status: 'available', id: 37 }, { status: 'available', id: 38 }, { status: 'available', id: 39 }, { status: 'occupied', id: 40 }
    ],
    // F sırası
    [
        { status: 'available', id: 41 }, { status: 'available', id: 42 }, { status: 'available', id: 43 }, { status: 'available', id: 44 },
        { status: 'available', id: 45 }, { status: 'available', id: 46 }, { status: 'available', id: 47 }, { status: 'available', id: 48 }
    ]
])

// Koltuk durumuna göre CSS sınıfı döndür
const getSeatClass = (seat) => {
    switch (seat.status) {
        case 'available':
            return 'bg-green-500 hover:bg-green-600 text-white'
        case 'selected':
            return 'bg-blue-500 hover:bg-blue-600 text-white'
        default:
            return 'bg-gray-300'
    }
}

const toggleSeat = (rowIndex, seatIndex) => {
    const seat = seats.value[rowIndex][seatIndex]
    if (seat.status === 'occupied') return
    
    if (seat.status === 'available') {
        seat.status = 'selected'
    } else if (seat.status === 'selected') {
        seat.status = 'available'
    }
}

// Seçili koltukları hesapla
const selectedSeats = computed(() => {
    const selected = []
    seats.value.forEach((row, rowIndex) => {
        row.forEach((seat, seatIndex) => {
            if (seat.status === 'selected') {
                const rowLetter = String.fromCharCode(65 + rowIndex)
                const seatNumber = seatIndex + 1
                selected.push(`${rowLetter}${seatNumber}`)
            }
        })
    })
    return selected
})
</script>