const dateUtils = {
    formatDate(date) {
        //ddate  = 2025-01-02 19:00:00  çevir gün ay yıl
        const dateObj = new Date(date)
        return dateObj.toLocaleDateString('tr-TR', { day: '2-digit', month: '2-digit', year: 'numeric' })
    },

    formatTime(date) {
        //bu formatta gelen dateyi 2025-01-03T19:00:00.000000Z formatına çevir
        const dateObj = new Date(date)
        return dateObj.toLocaleTimeString('tr-TR', { hour: '2-digit', minute: '2-digit' })
    }
}

export default dateUtils