<script setup>

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


  <section class="text-gray-600 body-font" >
    <div class="container px-5 pb-4 mx-auto">

      <ul class="flex justify-center flex-row text-lg font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="mr-2">
            <a href="#" class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">新しい順</a>
        </li>
        <li class="mr-2">
            <a href="#" class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">古い順</a>
        </li>
      </ul>
    </div>
  </section>

  <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        <div class="p-2 md:w-1/3 sm:mb-0 mb-4">
          <div class="rounded-lg h-96 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505">
          </div>
        </div>
        <div class="p-2 md:w-1/3 sm:mb-0 mb-4">
          <div class="rounded-lg h-96 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505">
          </div>
        </div>
        <div class="p-2 md:w-1/3 sm:mb-0 mb-4">
          <div class="rounded-lg h-96 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505">
          </div>
        </div>
  </div>

  

  

</template>