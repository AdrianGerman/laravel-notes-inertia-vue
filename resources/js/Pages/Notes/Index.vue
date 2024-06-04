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
                            <h3 class="text-lg text-white">Listado de notas</h3>
                            <p class="text-sm text-white mt-2">Toma el registro correcto y ejecuta cualquier función
                                (ver, editar o eliminar)
                            </p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <Link :href="route('notes.create')"
                            class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md">
                        Crear</Link>
                        <div class="shadow bg-black md:rounded-md p-4 text-white">
                            <table>
                                <tr v-for="(note, i) in notes" :key="i">
                                    <td class="border px-4 py-2">
                                        {{ note.excerpt }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        <Link :href="route('notes.show', note.id)">Ver</Link>
                                    </td>
                                    <td class="border px-4 py-2">
                                        <Link :href="route('notes.edit', note.id)">Editar</Link>
                                    </td>
                                </tr>
                            </table>
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
    notes: Array,
});
</script>
