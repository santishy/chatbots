<script setup>
import FileInput from '../FileInput.vue';
import InputError from '../InputError.vue';
import InputLabel from '../InputLabel.vue';
import SelectInput from '../SelectInput.vue';
import TextInput from '../TextInput.vue';

defineProps({
    form: {
        type: Object,
        required: true,
    },

});
const sourceTypes = [
    { value: 'website', label: 'Website' },
    { value: 'pdf', label: 'PDF' },
];
</script>
<template>
    <div class="space-y-4">
        <div class="col-span-6 md:col-span-4">
            <InputLabel for="name" value="Nombre" />
            <TextInput id="name" class="mt-1 block w-full" type="text" v-model="form.name" />
            <InputError :message="form.errors.name" class="mt-2" />
        </div>
        <div class="col-span-6 md:col-span-4">
            <InputLabel for="type" value="Tipo" />
            <SelectInput id="type" class="mt-1 block w-full" :options="sourceTypes" v-model="form.type" />
            <InputError :message="form.errors.type" class="mt-2" />
        </div>
        <div v-if="form.type === 'pdf'" class="col-span-6 md:col-span-4">
            <InputLabel for="pdf" value="PDF File" />
            <FileInput id="pdf" class="mt-1 block w-full" v-model="form.pdf" accept="application/pdf" />
            <InputError :message="form.errors.pdf" class="mt-2" />
        </div>
        <div v-else class="col-span-6 md:col-span-4">
            <InputLabel for="website" value="Website" />
            <TextInput id="website" class="mt-1 block w-full" type="text" v-model="form.website" />
            <InputError :message="form.errors.website" class="mt-2" />
        </div>
    </div>


</template>