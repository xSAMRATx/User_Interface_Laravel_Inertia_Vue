<script setup lang="ts">
import { SidebarTrigger } from '@/components/ui/sidebar';
import { Moon, Bell, Search, Ellipsis } from 'lucide-vue-next';
import AppLogo from './AppLogo.vue';
</script>

<template>
  <nav class="w-full bg-white shadow-sm px-4 py-2">
    <div class="max-w-full flex items-center justify-between">
      <!-- for mobile -->
      <div class="flex w-full items-center justify-between md:hidden">
        <SidebarTrigger class="w-8 h-8 border border-gray-300" aria-label="Toggle sidebar" />
        <div class="flex items-center space-x-1.5">
          <AppLogo />
        </div>

        <button type="button" class="p-2 rounded-full hover:bg-gray-100" aria-label="View notifications">
          <Ellipsis class="w-6 h-6 text-gray-600" />
        </button>
      </div>

      <!-- for desktop -->
      <div class="hidden md:flex items-center justify-between w-full">
        <div class="flex items-center space-x-4 w-2/5">
          <SidebarTrigger class="w-8 h-8 border border-gray-300" aria-label="Toggle sidebar" />

          <div class="flex-1 flex justify-center">
            <div class="relative w-full max-w-xl">
              <input type="search" aria-label="Search or type command" placeholder="Search or type command..."
                class="w-full pl-10 pr-16 py-2 text-sm border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
              <span class="absolute left-3 top-2.5 pointer-events-none">
                <Search class="w-5 h-5 text-gray-500" />
              </span>
              <span
                class="absolute right-3 top-1.5 text-xs text-gray-500 bg-gray-100 border rounded px-1 py-0.5 select-none">
                ⌘ K
              </span>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-end space-x-4 w-3/5">
          <button type="button" class="p-2 rounded-full hover:bg-gray-100" aria-label="Toggle dark mode">
            <Moon class="w-5 h-5 text-gray-600" />
          </button>

          <div class="relative">
            <button type="button" class="p-2 rounded-full hover:bg-gray-100" aria-label="View notifications">
              <Bell class="w-5 h-5 text-gray-600" />
            </button>
            <span class="absolute top-0 right-0 w-2 h-2 bg-orange-500 rounded-full ring-2 ring-white"
              aria-hidden="true"></span>
          </div>

          <div class="relative flex items-center space-x-2 min-w-[120px]">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User avatar"
              class="w-8 h-8 rounded-full object-cover" />
            <span class="hidden sm:block text-sm font-medium text-gray-700 truncate">
              Emirhan Boruch
            </span>
            <svg class="hidden sm:block w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>
