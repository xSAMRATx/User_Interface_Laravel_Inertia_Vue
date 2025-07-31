<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Customers',
        href: '/customers',
    },
];
</script>

<template>

    <Head title="Customers" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="p-4">
            <Link :href="route('customers.create')"><Button>Create Customer</Button></Link>
        </div>
    </AppLayout>
</template>
