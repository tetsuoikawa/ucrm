<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';

const props = defineProps({
  username: Object,
})


onMounted(() => {
  console.log(props.username)
})
const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100" style="min-height: 0vh;">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo
                                        class="block w-14"
                                    />
                                </Link>
                            </div>
                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('mh.index')" :active="route().current('mh.index')">
                                    Topページ
                                </NavLink>
                                <NavLink :href="route('mh.create')" :active="route().current('mh.create')">
                                    新規登録
                                </NavLink>
                                <NavLink :href="route('mh.rank')" :active="route().current('mh.rank')">
                                    ランキング
                                </NavLink>

                                  <NavLink v-if="props.username !== '名無しのユーザー'" :href="route('mh.mypage')" :active="route().current('mh.mypage')">
                                      マイページ
                                  </NavLink>
                                
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                <!-- {{ $page.props.auth.user.name }} -->
                                                <div v-if="props.username == '名無しのユーザー'">
                                                    <div class="inline-flex">
                                                      <button class="  text-gray-800 font-bold py-2 px-4 rounded-l">
                                                        <NavLink :href="route('login')" :active="route().current('login')">ログイン
                                                        </NavLink>
                                                      </button>
                                                      <button class="  text-gray-800 font-bold py-2 px-4 rounded-r">
                                                        <NavLink :href="route('register')" :active="route().current('register')">ユーザー登録
                                                        </NavLink>
                                                      </button>
                                                    </div>                                           
                                                </div>
                                                <div v-if="props.username !== '名無しのユーザー'">
                                                    {{ props.username }} 
                                                </div>
                                            </button>
                                        </span>
                                    </template>

                                    
                                    
                                        <template #content>
                                        <div v-if="props.username !== '名無しのユーザー'">
                                          <DropdownLink :href="route('mh.mypage')" class="mt-2"> マイページ </DropdownLink>
                                          <DropdownLink :href="route('mh.mypage.like')" method="post" as="button" class="mb-2">いいねした記事</DropdownLink>
                                          <hr>
                                          <DropdownLink :href="route('mh.create')" method="get" as="button" class="my-2">新規投稿</DropdownLink>
                                          <hr>
                                          <DropdownLink :href="route('mh.createuser')"  as="button" class="mt-2">ユーザー設定</DropdownLink>
                                          <DropdownLink :href="route('logout')" method="post" as="button">ログアウト</DropdownLink>
                                        </div>
                                      </template>
                                    
                                      

                   
                                </Dropdown>
                                
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-0 flex items-center sm:hidden">

                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Topページ
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('items.index')">
                            新規投稿
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('items.index')">
                            ログイン/ユーザー登録
                        </ResponsiveNavLink>
                    </div>

                      <!-- Responsive Settings Options -->
                      <div class="pt-4 pb-1 border-t border-gray-200">
                          <div class="px-4">
                              <div class="font-medium text-base text-gray-800">
                                <!-- {{ $page.props.auth.user.name }} -->
                                <div v-if="props.username == '名無しのユーザー'">
                                    <p>名無しのユーザー</p>
                                </div>
                              </div>
                              <div class="font-medium text-sm text-gray-500"><!-- {{ $page.props.auth.user.email }} --></div>
                          </div>
                          <div class="mt-3 space-y-1">
                              <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                              <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                  Log Out
                              </ResponsiveNavLink>
                          </div>
                      </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
