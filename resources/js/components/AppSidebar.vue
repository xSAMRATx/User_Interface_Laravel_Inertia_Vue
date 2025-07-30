<script setup lang="ts">
import NavFooter from '@/components/NavFooter.vue';
import NavMain from '@/components/NavMain.vue';
import NavSupport from '@/components/NavSupport.vue';
import NavOther from '@/components/NavOther.vue';
import NavUser from '@/components/NavUser.vue';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { type SupportNavItem } from '@/types';
import { Link } from '@inertiajs/vue3';
import { BookOpen, Folder, LayoutGrid, UsersRound, Box, Calendar, CircleUser, Layers, Sheet,BookCopy, SquareMenu, Mail, MessageCircleMore, StickyNote, ChartPie, KeyRound } from 'lucide-vue-next';
import AppLogo from './AppLogo.vue';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
        icon: LayoutGrid,
        subItems: [
            {
                title: 'Ecommerce',
                href: '#',
            },
            {
                title: 'Marketing',
                href: '#',
            },
            {
                title: 'CRM',
                href: '#',
            },{
                title: 'Stock',
                href: '#',
            }
        ]
    },
    {
        title: 'Customer',
        href: '/customers',
        icon: UsersRound,
    },
    {
        title: 'Calendar',
        href: '#',
        icon: Calendar,
    },
    {
        title: 'User Profile',
        href: '#',
        icon: CircleUser,
    },
    {
        title: 'Task',
        href: '#',
        icon: Layers,
        subItems: [
            {
                title: 'Tasks List',
                href: '#',
            }
        ]
    },
    {
        title: 'Forms',
        href: '#',
        icon: SquareMenu,
        subItems: [
            {
                title: 'Forms List',
                href: '#',
            }
        ]
    },
    {
        title: 'Tables',
        href: '#',
        icon: Sheet,
        subItems: [
            {
                title: 'Tables List',
                href: '#',
            }
        ]
    },
    {
        title: 'Pages',
        href: '#',
        icon: BookCopy,
        subItems: [
            {
                title: 'Pages List',
                href: '#',
            }
        ]
    },
];

const supportNavItems: NavItem[] = [
    {
        title: 'Chat',
        href: '#',
        icon: MessageCircleMore,
    },
    {
        title: 'Email',
        href: '#',
        icon: Mail,
        subItems: [
            {
                title: 'Inbox',
                href: '#',
            }
        ]
    },
    {
        title: 'Invoice',
        href: '#',
        icon: StickyNote,
    }
];

const otherNavItems: NavItem[] = [
    {
        title: 'Chart',
        href: '#',
        icon: ChartPie,
        subItems: [
            {
                title: 'Chart List',
                href: '#',
            }
        ]
    },
    {
        title: 'UI Elements',
        href: '#',
        icon: Box,
        subItems: [
            {
                title: 'Elements List',
                href: '#',
            }
        ]
    },
    {
        title: 'Authentication',
        href: '#',
        icon: KeyRound,
        subItems: [
            {
                title: 'Authentication List',
                href: '#',
            }
        ]
    }
];

const footerNavItems: NavItem[] = [
    {
        title: 'Github Repo',
        href: 'https://github.com/laravel/vue-starter-kit',
        icon: Folder,
    },
    {
        title: 'Documentation',
        href: 'https://laravel.com/docs/starter-kits#vue',
        icon: BookOpen,
    },
];
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link :href="route('dashboard')">
                            <AppLogo />
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent className="mb-2">
            <NavMain :items="mainNavItems" />
        </SidebarContent>

        <SidebarContent className="my-2">
            <NavSupport :items="supportNavItems" />
        </SidebarContent>

        <SidebarContent className="mt-2">
            <NavOther :items="otherNavItems" />
        </SidebarContent>

        <SidebarFooter>
            <NavFooter :items="footerNavItems" />
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
