<script setup>
import { ref } from 'vue'
import { VueElement, reactive } from 'vue' 
import { Inertia } from '@inertiajs/inertia'
import MhLayout from '@/Layouts/MhLayout.vue';
import MicroModal from '@/Components/MicroModal.vue';
import { Head, Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import NavLink from '@/Components/NavLink.vue';

const editurl = "http://127.0.0.1:8000/mh/29";

const result = defineProps({
  posts: Object ,
  comments: Object,
  likes: Object,
  userid: Object,
  click: Object,
  articlenumber: Object,
  username: Object,
  hostname: Object,
  hostid: Object,
  nowuser: Object,
})

const deletecomment = reactive({
  id: result.posts.id,
})

const destroycomment = id => {
  Inertia.put(route('comments.destroy', {item: id}), deletecomment)
}


const form_comment = reactive({
    articleid: result.posts.id,
    articlename: result.posts.username,
    articletitle: result.posts.title,
    comment: null,
    commentusername: result.nowuser,
})


const updateItem = articleid => {
    Inertia.put(route('comments.update', { item: articleid[1] }) , form_comment)
}

const form_like = reactive({
    likeid: result.posts.id,
    articletitle: result.posts.title,
    getuser: result.hostname,
    getid: result.hostid,
})

const likeItem = likeid => {
    Inertia.put(route('likes.store2', { item: likeid }) , form_like)
}

const destroy_like = reactive({
    likeid:  result.posts.id,
    likeuser: result.userid,
})

const destroylike = likeid => {
    Inertia.put(route('likes.destroy', { item: likeid }) , destroy_like)
}

const deleteItem = id => {
  Inertia.delete(route('mh.destroy', {mh: id}), {
        onBefore: () => confirm('本当に削除しますか？')
    })
}

const articleuser = reactive({
    username:result.hostname,
    nowname: result.nowuser,
})

const otherpage = name => {
    Inertia.get(route('mh.otherpage', { mh: name }) , articleuser )
}

const isShow = ref(false)
const toggleStatus = () => { isShow.value = !isShow.value}

</script>

<template>

<MhLayout :username="result.nowuser">
</MhLayout>  
<section class="text-gray-600 body-font">
  <div class="container px-5 pt-12 mx-auto flex flex-col">
    <div class="lg:w-3/6 mx-auto">

      <div v-if="result.hostname == result.nowuser">
        <MicroModal></MicroModal>  
        <nav class="mb-8  md:ml-auto flex flex-wrap items-center text-base justify-left">
          <div class="p-2 w-1/2 mt-0">
            <Link as="button" :href="route('mh.edit', {mh: result.articlenumber})" 
            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集する</Link>
          </div>
          <button @click="deleteItem(result.posts.id)" class="flex mx-auto text-white bg-black border-0 py-2 px-4 focus:outline-none hover:bg-black rounded text-lg">削除する</button>
        </nav>
      </div>
      <form  v-if="result.hostname !== result.nowuser" @submit.prevent="otherpage(result.hostname)">
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
          {{ result.hostname }}
        </button>
      </form>
      <NavLink v-if="result.hostname == result.nowuser" :href="route('mh.mypage')" :active="route().current('mh.mypage')">
        投稿ユーザー：{{ result.hostname }}
      </NavLink>

      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
      </div>
      <div class="flex flex-col sm:flex-row">
        <div class="sm:w-full text-center sm:pr-8 sm:py-8">
          <div class="flex flex-col items-center text-center justify-center">
            <h1 class="font-medium title-font mt-4 text-gray-900 text-2xl">
                タイトル：{{ posts.title }}
            </h1>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font ">
  <div class="container px-8 mx-auto my-6">
    <div class="flex justify-center flex-wrap -m-4">
      <div class="p-4 sm:w-1/6 lg:w-1/12">
        <p class="flex justify-center leading-relaxed mb-1 text-center">性別</p>
        <h2 class="flex justify-center title-font font-medium sm:text-xl text-3xl text-gray-900">
          <div v-if="posts.gender == 1">男性</div>
          <div v-if="posts.gender == 2">女性</div>
        </h2>  
      </div>
      <div class="p-4 sm:w-1/6 lg:w-1/12 ">
        <p class="flex justify-center leading-relaxed mb-1">シリーズ</p>
        <h2 class="flex justify-center title-font font-medium sm:text-xl text-3xl text-gray-900">
          {{ posts.series }}
        </h2>      
      </div>
      <div class="p-4 sm:w-1/6 lg:w-1/12">
        <p class="flex justify-center leading-relaxed mb-1 ">いいね数</p>
        <div class="flex justify-center title-font font-medium sm:text-xl text-3xl text-gray-900">
          {{ likes.total }}
        </div>       
      </div>
    </div>
  </div>

  <div class="flex justify-center">
    <div v-if="result.click == true">
      <form @submit.prevent="likeItem(form_like.likeid)">
        <button class="bg-transparent hover:bg-green-500 text-gray-500 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
</svg>
        </button>
      </form>
    </div>
    <div v-if="result.click == false">
      <form @submit.prevent="destroylike(destroy_like.likeid)">
        <button class="bg-transparent  bg-white hover:bg-white text-green-500 font-semibold hover:text-green-500 py-2 px-4 border border-green-500 hover:border-green-500 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-filled" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" stroke-width="0" fill="currentColor"></path>
          </svg>
        </button>
      </form>
    </div>
    <button class="ml-6 bg-transparent  text-black font-semibold    border border-white hover:border-transparent rounded">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-x" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
       <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
       <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
      </svg>
    </button>
    <button class="pl-1 bg-transparent  text-blue-500 font-semibold border border-white hover:border-transparent rounded">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
      </svg>
    </button>
    <button class="pl-1 bg-transparen font-semibold border border-white hover:border-transparent rounded">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 64 64">
        <linearGradient id="jm_nAfYbxsVmTlYr5N4x9a_43625_gr1" x1="32" x2="32" y1="6.667" y2="57.872" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#jm_nAfYbxsVmTlYr5N4x9a_43625_gr1)" d="M44,57H20c-7.168,0-13-5.832-13-13V20c0-7.168,5.832-13,13-13h24c7.168,0,13,5.832,13,13v24 C57,51.168,51.168,57,44,57z M20,9C13.935,9,9,13.935,9,20v24c0,6.065,4.935,11,11,11h24c6.065,0,11-4.935,11-11V20 c0-6.065-4.935-11-11-11H20z"></path><linearGradient id="jm_nAfYbxsVmTlYr5N4x9b_43625_gr2" x1="32" x2="32" y1="18.167" y2="45.679" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#jm_nAfYbxsVmTlYr5N4x9b_43625_gr2)" d="M32,45c-7.168,0-13-5.832-13-13c0-7.168,5.832-13,13-13c7.168,0,13,5.832,13,13 C45,39.168,39.168,45,32,45z M32,23c-4.962,0-9,4.038-9,9c0,4.963,4.038,9,9,9c4.963,0,9-4.037,9-9C41,27.038,36.963,23,32,23z"></path><linearGradient id="jm_nAfYbxsVmTlYr5N4x9c_43625_gr3" x1="46" x2="46" y1="12.75" y2="23.049" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#jm_nAfYbxsVmTlYr5N4x9c_43625_gr3)" d="M46 15A3 3 0 1 0 46 21A3 3 0 1 0 46 15Z"></path>
      </svg>
    </button>
    
  </div>
  
</section>


<section class="text-gray-600 body-font">
  <div class="container px-5 pt-12 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="lg:w-1/6"></div>
      <div class="sm:w-1/2 mb-10 px-4 lg:w-1/3">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1201x501">
        </div>
      </div>
      <div class="sm:w-1/2 lg:w-1/3 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1202x502">
        </div>
      </div>
      <div class="lg:w-1/6"></div>
    </div>
  </div>
</section>


<section class="text-gray-600 body-font">
  <div class="container px-5 py-12 mx-auto flex flex-wrap">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/6"></div>
      <div class="p-4 lg:w-5/12 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path>
              <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
              <path d="M15 8l2 0"></path>
              <path d="M15 12l2 0"></path>
              <path d="M7 16l10 0"></path>
            </svg>

          </div>
          <div class="flex-grow">
            <h1 class="text-gray-900 text-lg title-font  mb-4" style="text-align: center;  font-size: 24px;">作品詳細</h1>
            <table class="min-w-full divide-y-2 divide-gray-500 bg-white text-sm">
              <thead class="ltr:text-left rtl:text-right bg-white">
                <tr>
                  <th class="w-[800px] whitespace-nowrap px-6 py-2 font-medium text-gray-900">   
                  </th>
                  <th class=" w-11/12 whitespace-nowrap px-8 py-2 font-medium text-gray-900 text-left">      
                  </th>
                </tr>
              </thead>
            
              <tbody class="divide-y divide-gray-200">
                <tr class="odd:bg-gray-50 text-center bg-gray-50">
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900" style="font-size: 16px;">
                    頭
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">{{ posts.head }}</td>
                </tr>
                <tr class="odd:bg-blue-500 text-center ">
                  <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900" style="font-size: 16px;">
                    胴
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">{{ posts.shoulder }}</td>
                </tr>
                <tr class="odd:bg-gray-50 text-center bg-gray-50">
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900" style="font-size: 16px;">
                    手
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">{{ posts.arm }}</td>
                </tr>
                <tr class="odd:bg-blue-500 text-center ">
                  <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900" style="font-size: 16px;">
                    腰
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">{{ posts.waist }}</td>
                </tr>
                <tr class="odd:bg-gray-50 text-center bg-gray-50">
                  <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900" style="font-size: 16px;">
                    足
                  </td>
                  <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">{{ posts.leg }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>  


        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col mt-12">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M8 9h8"></path>
              <path d="M8 13h6"></path>
              <path d="M9 18h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-3l-3 3l-3 -3z"></path>
            </svg>
           

          </div>
          <div class="flex-grow">
            <h1 class="text-gray-900 text-lg title-font  mb-4" style="text-align: center;  font-size: 24px;">制作者のコメント</h1>
            <br>
            <p class="leading-relaxed text-base"><hr><br>{{ posts.contact }}</p>
          </div>
        </div>
      </div>
      <form @submit.prevent="updateItem(form_comment.comment)">
        <div class="p-4 lg:w-[400px] md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">

    <div class="h-80 px-7 rounded-[12px] bg-white p-4">
        <p class="text-xl font-semibold text-blue-900 cursor-pointer transition-all hover:text-black">Add Comment/Questions</p>
        <hr> 
        <textarea 
        class="h-40 w-full px-3 text-sm py-1 mt-5 outline-none border-black-300  resize-none border rounded-lg placeholder:text-sm" 
        placeholder="100文字以内で入力して下さい"
        name="comment"
        type="text"
        v-model="form_comment.comment"></textarea>  
        
        
        <div class="flex justify-between mt-2"> 
          <button class="h-12 w-[150px] bg-blue-600 text-sm text-white rounded-lg transition-all cursor-pointer hover:bg-blue-600">コメントする</button>
        </div>   
      </div>   
        </div>
        <br>

        <div v-for="(comment, index) in comments.data.length" :key="comments.id">
          <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col mb-8">
            <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium">{{ comments.data[ index ].username }}</h2>
              <h2 class="text-gray-500 text-sm mb-3">user_id:{{ comments.data[ index ].userid }}</h2>
              <p class="leading-relaxed text-base"><hr><br>{{ comments.data[ index ].comment }}</p>

              <div v-if="comments.data[ index ].userid  == result.userid">
                <form @submit.prevent="destroycomment(comments.data[ index ].id)">
                  <a class="mt-3 text-indigo-500 inline-flex items-center">
                    <button class="mt-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-blue-500 hover:border-transparent rounded">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M4 7l16 0"></path>
                         <path d="M10 11l0 6"></path>
                         <path d="M14 11l0 6"></path>
                         <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                         <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                      </svg>
                    </button>
                  </a>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
      </form>
  
      <div class="lg:w-1/6"></div>
    </div>
  </div>
</section>


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