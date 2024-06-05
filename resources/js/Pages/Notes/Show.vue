<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Módulo de notas
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg text-gray-300">Extracto de la nota</h3>
                            <p class="text-sm text-gray-400 mt-2">
                                {{ note.excerpt }}
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-800 rounded-md md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow md:rounded-md p-4 text-gray-300">
                            <h2 class="my-2 text-white text-lg font-bold">Contenido:</h2>
                            <p>{{ note.content }}</p>
                            <hr class="mt-6 mb-6">
                            <Link class="text-blue-400" :href="route('notes.index')">Volver</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    note: Object,
});
</script>
