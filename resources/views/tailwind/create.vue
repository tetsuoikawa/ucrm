<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'
</script>

<template>
    
<header class="text-gray-600 body-font" style="background-color: black;">

    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-black rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-2xl text-white">MH重ね着投稿サイト</span>
        </a>
        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-6 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
          <a class="mr-5 pl-6 text-white">新規投稿</a>
          <a class="mr-5 pl-6 text-white">ランキング</a>
          <a class="mr-5 pl-6 text-white">ログイン</a>
          <a class="mr-5 pl-6 text-white">ユーザー登録</a>
        </nav>
  
      </div>


</header>
  
</template>