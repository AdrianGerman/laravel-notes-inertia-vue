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
                            <h3 class="text-lg text-gray-300">Listado de notas</h3>
                            <p class="text-sm text-gray-400 mt-2">
                                Aquí podrás ver el listado completo de las notas existentes, ver el detalle de estas,
                                editarlas y eliminarlas, de igual modo filtrar mediante la búsqueda una nota que estés
                                buscando.
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-800 rounded-md md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-black- md:rounded-md p-4 text-gray-300">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-md mb-2">🔍Buscar:</p>
                                    <input type="text" class="form-input rounded-md shadow-sm bg-gray-900 text-gray-300"
                                        placeholder="Buscar..." v-model="q">
                                </div>
                                <div class="flex flex-col justify-center">
                                    <Link :href="route('notes.create')"
                                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md">
                                    Crear</Link>
                                </div>

                            </div>
                            <hr class="my-6">
                            <table>
                                <tr v-for="(note, i) in notes" :key="i">
                                    <td class="border px-4 py-2">
                                        {{ note.excerpt }}
                                    </td>
                                    <td class="px-4 py-2">
                                        <Link :href="route('notes.show', note.id)">Ver</Link>
                                    </td>
                                    <td class="px-4 py-2">
                                        <Link :href="route('notes.edit', note.id)">Editar</Link>
                                    </td>
                                    <td class="px-4 py-2 text-red-700">
                                        <a href="#" @click.prevent="destroy(note.id)">X</a>
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
import { Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const props = defineProps({
    notes: Array,
});

const destroy = (id) => {
    if (confirm('¿Esta seguro que desea eliminar?')) {
        router.delete(route('notes.destroy', id));
    }
}

const q = ref('');

watch(q, (value) => {
    router.get(route('notes.index', { q: value }), {}, { preserveState: true });
});

</script>
