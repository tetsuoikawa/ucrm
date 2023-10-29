<script setup>
import MhLayout from '@/Layouts/MhLayout.vue';
import image1way from '@/Components/image1way.vue';
import MicroModal from '@/Components/MicroModal1way.vue';
import { nl2br } from '@/common';
import { Link } from '@inertiajs/inertia-vue3';
import { onMounted } from 'vue';


const props = defineProps({
  posts: Object,
  total: Object,
  points: Object,
  users: Object,
  username: Object,
  followsum: Object,
  followersum: Object,
})


onMounted(() => {
  console.log(props.users.data[0].content)
})
</script>

<template>
  <Head title="Mypage" />
  <MhLayout :username = props.username></MhLayout>

  <section class="text-gray-600 body-font">
    
   <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-5/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
      </div>
      
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">


          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg"> {{ $page.props.auth.user.name }}</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-2 ">
            </div>
            
            <div class="sm:w-full w-3/5">

            <p class="my-4 text-base text-center">{{ props.users.data[0].content }}.</p>
          </div>
          
            <section class="text-gray-600 body-font">
              
              <div class="container px-5 py-0 mx-auto">
                <div class="p-2 w-1/2 mt-0">
                  
          </div>
          
                <div class=" mb-4 flex flex-wrap -m-4 text-center">
                  <div class="sm:w-full w-1/2">
                    <h2 class="pb-2 title-font font-medium sm:text-xl text-xl text-gray-900">
                      <span style="font-size: 20px;">{{ props.points }}</span>
                      <span style="font-size: 16px;">pt</span>                      
                    </h2>
                    <hr>        
                  </div>                                
                  <div class="p-4 sm:w-1/3 w-1/2">
                    <h2 class="title-font font-medium sm:text-xl text-2xl text-gray-900">{{ props.total }}</h2>
                    <p class="leading-relaxed" style="font-size: 12px;">投稿</p>
                  </div>
                  <div class="p-4 sm:w-1/3 w-1/2">
                    <h2 class="title-font font-medium sm:text-xl text-2xl text-gray-900">{{ props.followsum }}</h2>
                    <p class="leading-relaxed" style="font-size: 12px;">フォロー</p>
                  </div>
                  <div class="p-4 sm:w-1/3 w-1/2">
                    <h2 class="title-font font-medium sm:text-xl text-2xl text-gray-900">{{ props.followersum }}</h2>
                    <p class="leading-relaxed" style="font-size: 12px;">フォロワー</p>
                  </div>
                </div>
                <Link as="button" :href="route('mh.createuser', {mh: 1})" 
            class="flex justify-center mx-auto w-full text-black bg-gray-300 border-0 py-2 px-4 focus:outline-none hover:bg-gray-400 rounded text-lg">プロフィールを編集する</Link>
              </div> 
            </section>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <div class="leading-relaxed text-lg mb-4">

            <section class="text-gray-600 body-font" >
              <div class="container px-5 pb-4 mx-auto">

      <ul class="flex justify-center flex-row text-lg font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="mr-2">
            <a href="#" class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">投稿一覧</a>
            <div class="w-24 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
        </li>
        <li class="mr-2">
          <Link as="button" :href="route('mh.mypage.comment')" 
            class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">コメントした記事</Link>
        </li>
        <li class="mr-2">
          <Link as="button" :href="route('mh.mypage.like')" 
            class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">いいね一覧</Link>
        </li>
      </ul>
    </div>
  </section>
  <div v-for="(post, index) in props.total" :key="props.total">
  <div class="rounded-lg h-96 overflow-hidden">
    <Link class="text-blue-400" :href="route('mh.show', {mh: props.posts.data[index].id })">
        <image1way />     
    </Link>
  </div> 
</div>
  <br>
  <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="text-gray-600 body-font">
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
