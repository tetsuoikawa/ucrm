<script setup>
import MhLayout from '@/Layouts/MhLayout.vue';
import image3way from '@/Components/image3way.vue';
import { nl2br } from '@/common';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { onMounted } from 'vue';




const props = defineProps({
  posts: Object,
  totals: Object,
  username: Object,
})


onMounted(() => {
  console.log(props.posts)
})


const search = ref('')
const searchgender = ref('')
const searchseries = ref('')

// ref の値を取得するには .valueが必要

const resultposts = () => {
  Inertia.get(route('mh.search', { search: search.value , searchgender: searchgender.value, searchseries: searchseries.value }))
}
</script>

<template>
<Head title="Mypage" />
<MhLayout :username="props.username"></MhLayout>  

<p>{{ props.totals }}</p>

<div v-if="$page.props.flash.message" class="bg-blue-300">
  {{ $page.props.flash.message }}
  </div>


<section class="text-gray-500 body-font">
<div class="container px-5 py-24 mx-auto">
<div class="flex justify-center flex-wrap -m-4">
<div class="p-2 lg:w-2/3">
<div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-8 pb-12 rounded-lg overflow-hidden text-center relative">
          
  <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">全ての投稿から検索</h1>
  <br>
  <hr>
  <br>
  <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
  </div>
  <div class="flex lg:w-full w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end" >
    <div class="relative flex-grow w-full">
      <label for="full-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 text-left" >キーワード</label>
      <input type="text" id="full-name" name="search" v-model="search" class="w-full  bg-white rounded border  border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-base outline-none  py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" >
    </div>
    <div class="relative flex-grow w-2/3">
      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 text-left">シリーズ</label>
      <select id="countries"  v-model="searchseries" name="searchseries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 e dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="" selected>指定なし</option>
        <option value="サンブレイク">サンブレイク</option>
        <option value="ライズ">ライズ</option>
        <option value="アイスボーン">アイスボーン</option>
        <option value="ワールド">ワールド</option>
        <option value="ストーリーズ">ストーリーズ</option>
        <option value="ダブルクロス">ダブルクロス</option>
        <option value="クロス">クロス</option>
        <option value="MH4G">MH4G</option>
        <option value="MH4">MH4</option>
        <option value="ポータブル 3nd">ポータブル 3nd</option>
        <option value="G (wii版">G (wii版)</option>
        <option value="MH3 （トライ">MH3 （トライ）</option>
        <option value="ポータブル 2nd">ポータブル 2nd</option>
        <option value="MH2 (ドス)">MH2 (ドス)</option>
        <option value="MHG">MHG</option>
        <option value="初代">初代</option>
        <option value="その他">その他</option>
      </select>
    </div>

    <div class="relative flex-grow w-2/3">
      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 text-left">ハンターの性別</label>
      <select id="countries" v-model="searchgender" name="searchgender" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="" selected>指定なし</option>
      <option value="1">男性</option>
      <option value="2">女性</option>
      </select>
    </div>
</div>

<div class="flex justify-center">
  <button class="flex mx-auto mt-12 text-white bg-black border-0 py-2 px-16 focus:outline-none"
   @click="resultposts">検索</button>
</div>

    
</div>
</div>
</div>
</div>
</section>




  <section class="text-gray-600 body-font bg-slate-500" style="background-color: #f2f2f2;">
    <div class="container  mx-auto">
      <br>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        <div v-for="modal in posts.data" :key="modal.id" class="p-2 md:w-1/3 sm:mb-0 mb-4">
          <div class="rounded-lg h-96 overflow-hidden">
            <Link class="text-blue-400" :href="route('mh.show', {mh: modal.id })">
              <image3way />
            </Link>
          </div> 
        </div>
      </div> 
    </div>
  </section>

  <div class="mt-16">
    <Pagination class="mt-6" :links="posts.links"></Pagination>
  </div>

  <footer class="text-gray-600 body-font mt-12">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Tailblocks</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
        <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</template>
