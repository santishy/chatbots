<script setup>
import { useForm } from '@inertiajs/vue3';
import DialogModal from '../DialogModal.vue';
import KnowledgeSourcesForm from './KnowledgeSourcesForm.vue';
import PrimaryButton from '../PrimaryButton.vue';
import SecondaryButton from '../SecondaryButton.vue';

const emit = defineEmits(['close']);
const props = defineProps({
    showModal: {
        type: Boolean,
        required: true,
    },
    chatbotId: {
        type: String,
        required: true,
    },
});
const form = useForm({
    name: '',
    type: 'pdf',
    website: '',
    pdf: null,
});
const handleSubmit = () => {
    // console.log(form.data());
    form.post(route('chatbots.knowledge-sources.store', props.chatbotId), {
        onSuccess: () => {

            form.reset();
            emit('close');

        },
        forceFormData: true,
    });
};
</script>

<template>
    <DialogModal :show="showModal" @close="$emit('close')">
        <template #title>
            Create Knowledge Source
        </template>

        <template #content>
            <KnowledgeSourcesForm :form="form" />
        </template>

        <template #footer>
            <div class="flex justify-between items-center w-full">
                <SecondaryButton @click="$emit('close')">Cancel</SecondaryButton>
                <PrimaryButton @click="handleSubmit">Guardar</PrimaryButton>
            </div>
        </template>
    </DialogModal>
</template>