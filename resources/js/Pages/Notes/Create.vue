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
                            <h3 class="text-lg text-gray-300">Crear una nota</h3>
                            <p class="text-sm text-gray-400 mt-2">
                                Mas adelante la podrás editar
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-800 rounded-md md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow md:rounded-md p-4">
                            <form @submit.prevent="submit">
                                <label class="block font-medium text-md text-gray-300">
                                    Resumen
                                </label>
                                <textarea class="bg-gray-900 text-gray-300 form-input w-full rounded-md shadow-sm mb-4"
                                    v-model="form.excerpt"></textarea>
                                <label class="block font-medium text-md text-gray-300">
                                    Contenido
                                </label>
                                <textarea class="bg-gray-900 text-gray-300 form-input w-full rounded-md shadow-sm mb-4"
                                    v-model="form.content" rows="8"></textarea>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                                    Crear
                                </button>
                                <Link class="text-blue-400 ml-4" :href="route('notes.index')">Volver</Link>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/vue3';

const props = defineProps({
    note: Object,
});

const form = useForm({
    excerpt: '',
    content: ''
})

const submit = () => {
    form.post(route('notes.store'), form);
}
</script>
