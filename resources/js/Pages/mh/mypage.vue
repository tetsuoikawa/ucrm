<script setup>
import MhLayout from '@/Layouts/MhLayout.vue';
import MicroModal from '@/Components/MicroModal1way.vue';
import { nl2br } from '@/common';
import { Link } from '@inertiajs/inertia-vue3';


defineProps({
  posts: Array
})



</script>




<template>
  <Head title="Mypage" />
  <MhLayout></MhLayout>
  

  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">性別</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">シリーズ</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">頭</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="post in posts" :key="post.id">
            <td class="border-t-2 border-gray-200 px-4 py-3">{{ post.id }}</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">
              <span v-if="post.gender === 1">男</span>
              <span v-if="post.gender === 2">女</span>
            </td>
            <td class="border-t-2 border-gray-200 px-4 py-3">{{ post.series }}</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">{{ post.head }}</td>
            <td class="border-t-2 border-gray-200 w-10 text-center"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
    </div>
  </div>
</section>


  

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
          <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">Raclette knausgaard hella meggs normcore williamsburg enamel pin sartorial venmo tbh hot chicken gentrify portland.</p>

            <section class="text-gray-600 body-font">
              <div class="container px-5 py-12 mx-auto">

                <div class="flex flex-wrap -m-4 text-center">
                  <div class="p-4 sm:w-full w-1/2">
                    <h2 class="title-font font-medium sm:text-xl text-xl text-gray-900">
                      <span style="font-size: 20px;">27</span>
                      <span style="font-size: 16px;">pt</span>
                      <div v-for="post in posts" :key="post.id">
                        <Link class="text-blue-400" :href="route('mh.show', { mh: post.id })">
                          {{ post.id }}
                        </Link>
                        
                      </div>
                      
                      
                    </h2>
                    <hr>              
                  </div>                                
                  <div class="p-4 sm:w-1/3 w-1/2">
                    <h2 class="title-font font-medium sm:text-xl text-2xl text-gray-900">2.7K</h2>
                    <p class="leading-relaxed" style="font-size: 16px;">投稿</p>
                  </div>
                  <div class="p-4 sm:w-1/3 w-1/2">
                    <h2 class="title-font font-medium sm:text-xl text-2xl text-gray-900">1.8K</h2>
                    <p class="leading-relaxed" style="font-size: 16px;">フォロー</p>
                  </div>
                  <div class="p-4 sm:w-1/3 w-1/2">
                    <h2 class="title-font font-medium sm:text-xl text-2xl text-gray-900">35</h2>
                    <p class="leading-relaxed" style="font-size: 16px;">フォロワー</p>
                  </div>
                </div>
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
        </li>
        <li class="mr-2">
            <a href="#" class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">コメントした記事</a>
        </li>
        <li class="mr-2">
            <a href="#" class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">いいね一覧</a>
        </li>
      </ul>
    </div>
  </section>
  <div v-for="post in posts">
  <MicroModal />
</div>
  <br>
  <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
  



</template>
