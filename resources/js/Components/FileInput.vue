<script setup>
import { onMounted, ref } from 'vue'
import { XCircleIcon } from '@heroicons/vue/24/solid';

defineProps({
  modelValue: Object,
})

const emit = defineEmits(['update:modelValue'])

const input = ref(null)

onMounted(() => {
  if (input.value.hasAttribute('autofocus')) {
    input.value.focus()
  }
})

const clearFile = () => {
  input.value.value = ''
  emit('update:modelValue', null)
}

defineExpose({ focus: () => input.value.focus() })
</script>

<template>
  <div class="flex items-center justify-between relative">
    <input ref="input" type="file" v-bind="$attrs"
      class="rounded-md file:py-1 p-2 border file:rounded-md file:dark:bg-gray-700 file:dark:text-white file:px-2 file:border-none file:bg-gray-200 file:mr-2 file:cursor-pointer border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
      @input="$emit('update:modelValue', $event.target.files[0])" />
    <button v-if="modelValue" @click="clearFile" class="absolute right-2 top-3.5">
      <XCircleIcon class="text-red-500 dark:text-red-700 size-6" />
    </button>
  </div>
</template>