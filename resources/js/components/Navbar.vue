<script setup lang="ts">
import { SidebarTrigger } from '@/components/ui/sidebar';
import { Moon, Bell, Search } from 'lucide-vue-next';
</script>

<template>
  <nav class="w-full bg-white shadow-sm px-4 py-2">
    <div class="max-w-full flex items-center justify-between">
      <div class="flex items-center space-x-4" style="width: 40%;">
        <SidebarTrigger class="w-8 h-8 border border-gray-300" />

        <div class="flex-1 flex justify-center">
          <div class="relative w-full max-w-xl">
            <input type="text" placeholder="Search or type command..."
              class="w-full pl-10 pr-16 py-2 text-sm border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <span class="absolute left-3 top-2.5">
              <Search class="w-5 h-5 text-gray-500" />
            </span>
            <span class="absolute right-3 top-1.5 text-xs text-gray-500 bg-gray-100 border rounded px-1 py-0.5">
              ⌘ K
            </span>
          </div>
        </div>
      </div>

      <div class="flex items-center justify-end" style="width: 60%;">
        <div>
          <button class="p-2 rounded-full hover:bg-gray-100">
            <Moon class="w-5 h-5 text-gray-600" />
          </button>
        </div>
        <div class="relative mr-3">
          <button class="p-2 rounded-full hover:bg-gray-100">
            <Bell class="w-5 h-5 text-gray-600" />
          </button>

          <span class="absolute top-0 right-0 w-2 h-2 bg-orange-500 rounded-full"></span>
        </div>

        <div class="relative flex items-center space-x-2">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar" class="w-8 h-8 rounded-full" />
          <span class="text-sm font-medium text-gray-700">Emirhan Boruch</span>
          <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>
    </div>
  </nav>
</template>
