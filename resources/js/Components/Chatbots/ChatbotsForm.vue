<script setup>
import InputError from '../InputError.vue';
import InputLabel from '../InputLabel.vue';
import SelectInput from '../SelectInput.vue';
import TextArea from '../TextArea.vue';
import TextInput from '../TextInput.vue';

defineProps({
    form: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <div class="col-span-6 md:col-span-4">
        <InputLabel for="name" value="Chatbot Name" />
        <TextInput id="name" v-model="form.name" class="mt-1 block w-full" />
        <InputError :message="form.errors.name" class="mt-2" />
    </div>
    <div class="col-span-6 md:col-span-4">
        <InputLabel for="model" value="System prompt" />
        <TextArea id="system_prompt" v-model="form.system_prompt" class="mt-1 block w-full" />
        <InputError :message="form.errors.system_prompt" class="mt-2" />
    </div>
    <div class="col-span-6 md:col-span-4">
        <InputLabel for="model" value="Model" />
        <SelectInput id="name" v-model="form.model" :options="[
            { value: 'chat-gpt', label: 'chat-gpt' },
            { value: 'chat-gpt-5.2', label: 'chat-gpt-5.2' },
            { value: 'grok-4.1', label: 'grok-4.1' }
        ]" class="mt-1 block w-full" />
        <InputError :message="form.errors.model" class="mt-2" />
    </div>
    <div class="col-span-6 md:col-span-4">
        <InputLabel for="temperature" value="Temperature" />
        <TextInput id="name" type="number" max="1" min="0" step="0.1" v-model="form.temperature"
            class="mt-1 block w-full" />
        <InputError :message="form.errors.temperature" class="mt-2" />
    </div>
</template>