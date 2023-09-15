<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import { BaseTree, Draggable, pro } from '@he-tree/vue'
import '@he-tree/vue/style/default.css'



  

var treeData =  [
    {
    text: 'Projects',
    children: [
        {
        text: 'Frontend',
        children: [
            {
            text: 'Vue',
            children: [
                {
                text: 'Nuxt',
                },
            ],
            },
            {
            text: 'React',
            children: [
                {
                text: 'Next',
                },
            ],
            },
            {
            text: 'Angular',
            },
        ],
        },
        {
        text: 'Backend',
        },
    ],
    },
    { text: 'Photos' },
    { text: 'Videos' },
]

  
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Draggable v-model="treeData" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
