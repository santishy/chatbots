<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ChatbotsForm from '@/Components/Chatbots/ChatbotsForm.vue';
import { createForm, store } from '@/Forms/chatbot';

const props = defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
});
const form = createForm(props.chatbot);
const handleSubmit = () => {
    store(form);
};
</script>

<template>
    <AppLayout title="Create chatbot">
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Crear Chatbot
            </h1>
        </template>
        <section class="py-6" aria-label="Chatbot">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <FormSection @submitted="handleSubmit">
                    <template #title>
                        Nuevo Chatbot
                    </template>
                    <template #description>
                        Crea un nuevo chatbot.
                    </template>
                    <template #form>
                        <ChatbotsForm :form="form" />
                    </template>
                    <template #actions>
                        <PrimaryButton aria-label="Guardar cambios"
                            :class="{ 'cursor-not-allowed opacity-50': form.processing }" :disabled="form.processing">
                            Guardar cambios
                        </PrimaryButton>
                    </template>
                </FormSection>
            </div>
        </section>
    </AppLayout>
</template>