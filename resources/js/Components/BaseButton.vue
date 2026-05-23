<script setup>
import { Link } from '@inertiajs/vue3'
import { twMerge } from 'tailwind-merge';
import { computed } from 'vue';
// Las propiedades vienen desde los componentes que extienden este BaseButton, como PrimaryButton, SecondaryButton, etc. Esto permite que el BaseButton sea un componente reutilizable y personalizable para diferentes tipos de botones en la aplicación. 
const props = defineProps({
    class: {
        type: String,
        default: '',
    },
    ariaLabel: {
        type: String,
        required: false,
    },
    href: {
        type: String,
        default: '',
    },
    type: {
        type: String,
        default: 'submit',
    },
    // Default classes for the button, can be overridden by passing a different string to the `class` prop
    defaultClasses: {
        type: String,
        default: 'inline-flex  items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 disabled:opacity-50 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300',
    },
})
const mergedClasses = computed(() => {
    return twMerge(
        'space-x-2',
        props.defaultClasses
        , props.class
    );
})

</script>
<template>
    <Link v-if="href" :class="mergedClasses" :aria-label="props.ariaLabel" :href="href">
        <slot />
    </Link>
    <button v-else :aria-label="props.ariaLabel" :type="type" :class="mergedClasses">
        <slot />
    </button>
</template>
