<template>
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-500">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div 
                class="inline-block  bg-white rounded-lg text-left overflow-hidden shadow-lg transform transition"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal-headline"
                >
                
                <form>
                    <div class="flex justify-between border-b border-gray-100 px-5 py-4">
                        <h3 class="w-full">Habilitar juego</h3>
                    </div>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div>
                            <div class="mb-4">
                                <input
                                    v-model="form.date"
                                    type="text"
                                    disabled="true"
                                    class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                                    id=""
                                    >  
                            </div>
                            <div class="mb-4">
                                <input
                                    v-model="form.hour"
                                    type="text"
                                    disabled="true"
                                    class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                                    id=""
                                    >  
                            </div>
                        </div>

                    </div>

                    <div class="bg-gray-50 px-4 py-4 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button 
                        @click.prevent="store()"
                        :type="button"
                        class="inline-flex justify-center w-full border border-teal-500 text-white bg-gray-700 rounded-md px-4"
                        >Guardar</button>

                        <button 
                        @click.prevent="CloseModal"
                        :type="button"
                        class="inline-flex justify-center w-full border border-gray-500 text-white bg-green-700 rounded-md px-4"
                        >Cancelar</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
    
</template>

<script>

export default {
    name: "CalendarModal",
    props: {
        form: {
            type: Object,
            default: () => {}
        }
    },
    components: { },
    methods: {
        CloseModal() {
            this.$emit('CloseModal');
        }
    }
    
}
</script>