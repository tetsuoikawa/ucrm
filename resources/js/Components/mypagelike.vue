<script setup>
import MhLayout from '@/Layouts/MhLayout.vue';
import { nl2br } from '@/common';
import { Link } from '@inertiajs/inertia-vue3';
import { onMounted } from 'vue';


const props = defineProps({
  posts: Object,
  total: Object,
  like: Object,
})


onMounted(() => {
  console.log()
  //props.posts.data[1].title
  //props.like.data[0].articlenumber
  //props.posts.data[props.like.data[ 1 ].articlenumber].title
})
</script>

<template>
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

  <section class="text-gray-600 body-font">
              <div class="container px-5 pb-4 mx-auto">

      <ul class=" flex justify-center flex-row text-lg font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="mr-2">
          <Link as="button" :href="route('mh.mypage')" 
            class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">投稿一覧</Link>
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
    <p v-if="props.like.total == 0" class="text-center mt-4">いいねした記事はありません</p>
  </section>
  <div v-for="(post, index) in props.like.total" :key="props.like.total">
    <section class="text-gray-600 body-font">
      <div class="container mx-auto">
        <div class="flex items-center lg:w-4/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
          <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">
              <a class="inline-flex items-center">
                <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900">{{ $page.props.auth.user.name }}</span>
                  <span class="text-gray-500 text-sm">2023/12/23</span>
                </span>
              </a>
            </h2>
            <Link :href="route('mh.show', {mh: props.like.data[ index ].likearticle })">
              <p class="leading-relaxed text-xl mt-4">{{ props.like.data[index].articletitle }}</p>
            <img @click="toggleStatus" data-micromodal-trigger="modal-1" href='javascript:;' alt="content" class=" mt-8 object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505" >
          </Link>
          </div>
        </div>
      </div>
    </section>
  </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</template>
