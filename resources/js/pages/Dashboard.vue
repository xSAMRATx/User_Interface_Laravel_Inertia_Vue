<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3" style="border: 1px solid red;">
                
                <div class="p-6 bg-white rounded-xl shadow">Customers Card</div>
                <div class="p-6 bg-white rounded-xl shadow">Orders Card</div>
                <div class="p-6 bg-white rounded-xl shadow">Monthly Target Card</div>

                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                    <h1>Hello</h1>
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
            </div>
            
             <!-- Top Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-6">
                <div class="p-6 bg-white rounded-xl shadow">Customers Card</div>
                <div class="p-6 bg-white rounded-xl shadow">Orders Card</div>
                <div class="p-6 bg-white rounded-xl shadow">Monthly Target Card</div>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
                <div class="p-6 bg-white rounded-xl shadow">Monthly Sales Chart</div>
                <div class="p-6 bg-white rounded-xl shadow">Statistics Line Chart</div>
            </div>

             <!-- Bottom Section -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <div class="p-6 bg-white rounded-xl shadow">Customer Demographics</div>
                <div class="p-6 bg-white rounded-xl shadow">Recent Orders Table</div>
            </div>
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <PlaceholderPattern />
            </div>
        </div>
    </AppLayout>
</template>
