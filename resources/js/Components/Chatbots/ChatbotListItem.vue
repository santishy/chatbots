<script setup>
import DangerButton from '../DangerButton.vue'
import PrimaryButton from '../PrimaryButton.vue'
import SecondaryButton from '../SecondaryButton.vue'
import dayjs from '@/utils/dayjs'

defineProps({
  chatbot: {
    type: Object,
    required: true,
  },
})
</script>
<template>
  <section
    :aria-label="chatbot.name"
    class="border-gray-200 p-5 dark:border-gray-700"
  >
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
      <div>
        <div class="text-gray-800 dark:text-gray-200">
          {{ chatbot.name }}
        </div>
        <div class="text-sm text-gray-500 dark:text-gray-400">
          {{ dayjs(chatbot.created_at).fromNow() }}
        </div>
      </div>
      <div class="mt-4 flex space-x-2 md:mt-0">
        <PrimaryButton
          aria-label="Ver chatbots"
          :href="`/chatbots/${chatbot.id}`"
          >View</PrimaryButton
        >
        <SecondaryButton>Edit</SecondaryButton>
        <DangerButton>Delete</DangerButton>
      </div>
    </div>
  </section>
</template>
