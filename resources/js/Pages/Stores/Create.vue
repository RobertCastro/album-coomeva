<template>
    <backend-layout>
        <div class="flex justify-center pb-6">
            <h3 class=" text-3xl text-green-600">Create store <strong class="font-black"> {{ form.legal_name }} </strong></h3>
        </div>
        <div class="steps">
            <ul class="flex justify-evenly">
                <li>1</li>
                <li>2</li>
                <li class="active">3</li>
                <li>4</li>
                <li>5</li>
            </ul>
        </div>
        <verification-store-form :errors="errors" :form="form" @submit="submit">
            <template #buttons class="flex">
                <action-button
                    :loading="processing"
                        class="btn-accions-ok"
                        type="submit">
                        Check score 
                </action-button>
            </template>
        </verification-store-form>
    </backend-layout>
</template>

<script>
import BackendLayout from "@/Layouts/BackendLayout";
import VerificationStoreForm from '../../Components/Forms/VerificationStoreForm.vue';
import ActionButton from '../../Components/Elements/ActionButton';

export default {
    name: "Create",
    components: {BackendLayout, VerificationStoreForm, ActionButton},
    props: {        
        errors: Object,
    },
    data() {
        return {
            processing: false,
            address_store: '',
            form: {
                address_store: null
            },
            score: false
        }
    },
    methods: {
        submit() {
            this.processing = true;
            this.score = true;
        }
    }
}
</script>