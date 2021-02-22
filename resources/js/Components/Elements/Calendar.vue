<template>
    <div>
        <FullCalendar :options="calendarOptions" />
    </div>
</template>

<script>

import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import timeGrid from '@fullcalendar/timegrid'
import esLocale from '@fullcalendar/core/locales/es';

export default {
    components:{
        FullCalendar
    },

    data() {
        return {
        calendarOptions: {
            plugins: [ dayGridPlugin, interactionPlugin, timeGrid ],
            initialView: 'dayGridMonth',
            locale: esLocale,
            headerToolbar:{
                left: 'prev,next,today',
                center: 'title',
                right: 'dayGridMonth, timeGridWeek, timeGridDay'
            },
            dateClick: this.handleDateClick,
        }
        }
    },

    methods: {
        handleDateClick (clickinfo) {
            this.$emit('dateClick', clickinfo)
        }
    }
}

</script>