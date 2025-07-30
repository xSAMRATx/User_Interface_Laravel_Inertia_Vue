<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import StatCard from '@/components/StatCard.vue';
import MonthlyTarget from '@/components/MonthlyTarget.vue'
import { Users, Box , Target, BarChart } from 'lucide-vue-next'

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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Row 1 -->
                <StatCard title="Customers" value="3,782" :trend="11.01" :icon="Users" class="col-span-1 row-span-1" />
                <StatCard title="Orders" value="5,359" :trend="-9.05" :icon="Box"
                    class="col-span-1 row-span-1" />
                <!-- Monthly Target (custom component) -->
                <MonthlyTarget class="col-span-2 row-span-2" />

                <!-- Row 2 -->
                <div class="col-span-2 row-start-2 bg-white rounded-xl p-6 shadow">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Monthly Sales</h2>
                        <BarChart class="w-6 h-6 text-gray-400" />
                    </div>
                    <div class="h-64 flex items-center justify-center text-gray-400">
                        (Chart Goes Here)
                    </div>
                </div>
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
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <PlaceholderPattern />
            </div>
        </div>
    </AppLayout>
</template>
