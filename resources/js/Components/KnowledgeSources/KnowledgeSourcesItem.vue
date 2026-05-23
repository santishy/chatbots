<template>
    <div
        class="grid grid-cols-12 gap-3 p-2 even:bg-gray-100/30 dark:even:bg-gray-900/30 dark:hover:bg-gray-900 hover:bg-gray-100">
        <div class="col-span-3 text-gray-700 dark:text-gray-300">{{ knowledgeSource.name }}</div>
        <div
            class="col-span-3 text-gray-700 dark:text-gray-300 flex  justify-start space-x-2 underline-offset-4 underline">
            <a :href="route('chatbots.knowledge-sources.show', [chatbotId, knowledgeSource.id])" target="_blank"
                rel="noopener noreferrer">
                {{ knowledgeSource.type }}
            </a>
            <ArrowTopRightOnSquareIcon class="size-4" />
        </div>
        <div class="col-span-1 flex  justify-start space-x-2">
            <CheckIcon v-if="knowledgeSource.content_extracted" class="size-4 text-green-600" />
            <ArrowPathIcon v-else class="size-4 text-orange-600 animate-spin" />
        </div>
        <div class="col-span-4 text-gray-700 dark:text-gray-300">{{
            dayjs(knowledgeSource.created_at).format('DD/MM/YYYY') }}</div>
        <div class="col-span-1">
            <XMarkIcon class="size-4 text-red-600" />
        </div>
    </div>
</template>
<script setup>
import dayjs from '@/utils/dayjs'
import { XMarkIcon } from '@heroicons/vue/24/outline';
import { ArrowTopRightOnSquareIcon, ArrowPathIcon, CheckIcon } from '@heroicons/vue/24/solid';
defineProps({
    knowledgeSource: {
        type: Object,
        required: true,
    },
    chatbotId: {
        type: String,
        required: true,
    },
});
</script>
