<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import StatCard from '@/components/StatCard.vue';
import MonthlyTarget from '@/components/MonthlyTarget.vue';
import { Users, Box, Target, BarChart } from 'lucide-vue-next'
import MonthlySalesChart from '@/components/MonthlySalesChart.vue';
import Statistics from '@/components/Statistics.vue';
import CustomersDemographic from '@/components/CustomersDemographic.vue';
import RecentOrders from '@/components/RecentOrders.vue';

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
                <StatCard title="Customers" value="3,782" :trend="11.01" :icon="Users" class="w-full" />
                <StatCard title="Orders" value="5,359" :trend="-9.05" :icon="Box" class="w-full" />

                <MonthlyTarget class="w-full sm:col-span-2 lg:col-span-2 lg:row-span-2 order-2" />

                <div
                    class="w-full sm:col-span-2 lg:col-span-2 lg:row-start-2 bg-white rounded-xl p-6 shadow order-1 sm:order-none overflow-x-auto">
                    <div class="min-w-[300px] w-full">
                        <MonthlySalesChart class="w-full"/>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mb-6">
                <Statistics />
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <CustomersDemographic />
                <RecentOrders />
            </div>
        </div>
    </AppLayout>
</template>
