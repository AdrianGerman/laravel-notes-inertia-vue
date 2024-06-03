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
                            <h3 class="text-lg text-white">Detalle de una nota</h3>
                            <p class="text-sm text-white mt-2">
                                {{ note.excerpt }}
                            </p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-black md:rounded-md p-4 text-white">
                            <p>{{ note.content }}</p>
                            <hr class="mt-6 mb-6">
                            <Link :href="route('notes.index')">Volver</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    note: Object,
});
</script>
