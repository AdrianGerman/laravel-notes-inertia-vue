<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

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
                            <p class="text-sm text-white">Toma el registro correcto y ejecuta cualquier función
                                (ver,
                                editar
                                o eliminar)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
