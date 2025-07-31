import { defineStore } from 'pinia'

export const useMyTicketStore = defineStore('myTicketStore', {
  state: () => ({
    selectedEvent: null,
    ticket: {
      event_id: null,
      category_id: null,
      seats: [],
      payment: {}
    },
    seat_plan: {},
  }),
  actions: {
    setSelectedEvent(event) {
      this.selectedEvent = event
    },
    setSeatPlan(seat_plan) {
      this.seat_plan = seat_plan
    },
    setEventId(event_id) {
      this.ticket.event_id = event_id
    },
    setCategoryId(category_id) {
      this.ticket.category_id = category_id
    },
    setPayment(payment) {
      this.ticket.payment = payment
    }
  }
})
