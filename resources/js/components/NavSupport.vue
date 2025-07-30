<script setup lang="ts">
import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import SidebarMenuSub from '@/components/ui/sidebar/SidebarMenuSub.vue';
import SidebarMenuSubItem from '@/components/ui/sidebar/SidebarMenuSubItem.vue';
import SidebarMenuSubButton from '@/components/ui/sidebar/SidebarMenuSubButton.vue';
import {
    Collapsible,
    CollapsibleTrigger,
    CollapsibleContent,
} from '@/components/ui/collapsible';

import { ChevronDown } from 'lucide-vue-next';

defineProps<{
    items: NavItem[];
}>();

const page = usePage();
</script>

<template>
    <SidebarGroup class="px-2 py-0">
        <SidebarGroupLabel>SUPPORT</SidebarGroupLabel>
        <SidebarMenu>
            <Collapsible v-for="item in items" :key="item.title" :defaultOpen="item.subItems?.some((subItem) => page.url === subItem.href)" class="group/collapsible">
                <SidebarMenuItem>
                    <CollapsibleTrigger as-child>
                        <SidebarMenuButton :tooltip="item.title">
                            <component :is="item.icon" v-if="item.icon" class="mr-2 h-4 w-4" />
                            <span>{{ item.title }}</span>
                            <ChevronDown
                             v-if="item.subItems && item.subItems.length"
                                class="ml-auto h-4 w-4 transition-transform duration-200 ease-in group-data-[state=open]/collapsible:rotate-180" />
                        </SidebarMenuButton>
                    </CollapsibleTrigger>

                    <CollapsibleContent v-if="item.subItems && item.subItems.length">
                        <SidebarMenuSub>
                            <SidebarMenuSubItem v-for="subItem in item.subItems" :key="subItem.title">
                                <SidebarMenuSubButton as-child :is-active="page.url === subItem.href">
                                    <Link :href="subItem.href" prefetch>
                                    <span>{{ subItem.title }}</span>
                                    </Link>
                                </SidebarMenuSubButton>
                            </SidebarMenuSubItem>
                        </SidebarMenuSub>
                    </CollapsibleContent>
                </SidebarMenuItem>
            </Collapsible>
        </SidebarMenu>
    </SidebarGroup>
</template>
