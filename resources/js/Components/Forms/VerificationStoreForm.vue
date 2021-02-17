<template>
    <form
        @submit.prevent="$emit('submit')"
        class="">
        <div class="mb-4">
            <text-input
                label="Address store"
                v-model="form.address_store"
                :error="errors.address_store"
            />
        </div>
        <div class="px-8 py-4 border-t border-gray-200 flex justify-end items-center">
            <slot name="buttons" />
        </div>
    </form>
</template>


<script>
import BackendLayout from "@/Layouts/BackendLayout";
import TextInput from "../Elements/TextInput"
export default {
    name: "VerificationStoreForm",
    components: {BackendLayout, TextInput},
    props: {
        errors: Object,
        form: Object,
    }
    
    
}
</script>