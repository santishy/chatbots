<script setup>
import DangerButton from '../DangerButton.vue'
import PrimaryButton from '../PrimaryButton.vue'
import SecondaryButton from '../SecondaryButton.vue'
import dayjs from '@/utils/dayjs'
import { EyeIcon, PencilIcon, TrashIcon } from '@heroicons/vue/24/outline'
defineProps({
  chatbot: {
    type: Object,
    required: true,
  },
})
</script>
<template>
  <section :aria-label="chatbot.name" class="border-gray-200 p-5 dark:border-gray-700">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
      <div>
        <div class=" dark:text-gray-200 text-gray-800">
          {{ chatbot.name }}
        </div>
        <div class="text-sm text-gray-500 dark:text-gray-400">
          {{ dayjs(chatbot.created_at).fromNow() }}
        </div>
      </div>
      <div class="mt-4 flex space-x-2 md:mt-0">
        <PrimaryButton :href="route('chatbots.show', chatbot.id)" class="text-blue-500 dark:text-blue-500"
          aria-label="view chatbot">
          <EyeIcon class="size-4" />
          <span>
            View
          </span>
        </PrimaryButton>
        <SecondaryButton :href="route('chatbots.edit', chatbot.id)" aria-label="Editar botones">
          <PencilIcon class="size-4" />
          <span>
            Edit
          </span>
        </SecondaryButton>
        <DangerButton>
          <TrashIcon class="size-4" />
          <span>Delete</span>
        </DangerButton>
      </div>
    </div>
  </section>
</template>
