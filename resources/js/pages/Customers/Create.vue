<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import { Label } from '@/components/ui/label';
import { Input } from '@/components/ui/input';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Create Customer',
    href: '/customers/create',
  },
];
</script>

<template>

  <Head title="Create Customer" />

  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="p-4">
      <h1>Create Customer Form</h1>

      <form action="">
        <div className="grid w-full max-w-sm items-center gap-3 mb-4">
          <Label htmlFor="name">Name</Label>
          <Input type="text" name="name" id="name" placeholder="Email" />
        </div>

        <div className="grid w-full max-w-sm items-center gap-3">
          <Label htmlFor="phone">Phone</Label>
          <Input type="text" name="phone" id="phone" placeholder="Phone" />
        </div>

        <Button class="mt-4" type="submit">Submit</Button>
      </form>
    </div>
  </AppLayout>
</template>
