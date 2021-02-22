<template>
    <backend-layout>
        <Calendar @dateClick="dateClick" />
        <ModalCalendar v-if="ShowModal" :form="NewEvent" @CloseModal="CloseModal" />
     </backend-layout>
</template>

<script>
import BackendLayout from "@/Layouts/BackendLayout";
import Calendar from "../../Components/Elements/Calendar";
import ModalCalendar from "../../Components/Modals/CalendarModal"
export default {
    // name: "Calendar",
    components: {BackendLayout, Calendar, ModalCalendar},
    data() {
        return {
            ShowModal: false,
            NewEvent: {
                date: '',
                hour: ''
            }
        }
    },
    methods: {
        dateClick(arg) {
            this.ShowModal = true;
            this.setModalOpen(arg);
        },
        CloseModal() {
            this.ShowModal = false;
        },
        setModalOpen(obj) {
            const dateAndTime = obj.dateStr.split("T");
            this.NewEvent.date = dateAndTime[0];
            this.NewEvent.hour = dateAndTime[1];
            return;
        }
    }
}
</script>