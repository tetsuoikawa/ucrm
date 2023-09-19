<script setup>
import { ref } from 'vue'
import { Head, Link } from '@inertiajs/vue3';

const isShow = ref(false)
const toggleStatus = () => { isShow.value = !isShow.value}
</script>
<template>
    
  <div v-show="isShow" class="modal" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container w-full" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <header class="modal__header">
          <h2 class="modal__title" id="modal-1-title">
            Microm
          </h2>
          <button @click="toggleStatus" type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </header>
        <main class="modal__content" id="modal-1-content">

          <section class="text-gray-600 body-font">
  <div class="container px-5 py-12 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
      </div>
      <div class="flex flex-col sm:flex-row">
        <div class="sm:w-full text-center sm:pr-8 sm:py-8">

          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Phoebe Caulfield</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">Raclette knausgaard hella meggs normcore williamsburg enamel pin sartorial venmo tbh hot chicken gentrify portland.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="text-gray-600 body-font">
  <div class="container px-5 mx-auto mb-8">
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 sm:w-1/5 w-1/2">
        <h2 class="title-font font-medium sm:text-2xl text-3xl text-gray-900"></h2>
        <p class="leading-relaxed"></p>
      </div>
      <div class="p-4 sm:w-1/5 w-1/2">
        <p class="leading-relaxed mb-1">投稿日</p>
        <h2 class="title-font font-medium sm:text-2xl text-3xl text-gray-900">2023/9/11</h2>  
      </div>
      <div class="p-4 sm:w-1/5 w-1/2 ">
        <p class="leading-relaxed mb-1">シリーズ</p>
        <h2 class="title-font font-medium sm:text-2xl text-3xl text-gray-900">MH2G</h2>      
      </div>
      <div class="p-4 sm:w-1/5 w-1/2">
        <p class="leading-relaxed mb-1">いいね数</p>
        <h2 class="title-font font-medium sm:text-2xl text-3xl text-gray-900">35</h2>       
      </div>
      <div class="p-4 sm:w-1/5 w-1/2">
        <h2 class="title-font font-medium sm:text-2xl text-3xl text-gray-900"></h2>
        <p class="leading-relaxed"></p>
      </div>
    </div>
  </div>
</section>



<section class="text-gray-600 body-font">
  <div class="container px-5 pt-12 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1201x501">
        </div>
      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1202x502">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="text-gray-600 body-font">
  <div class="container px-5 py-12 mx-auto flex flex-wrap">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-2/3 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h1 class="text-gray-900 text-lg title-font  mb-4" style="text-align: center;  font-size: 24px;">作品詳細</h1>
            <p class="leading-relaxed text-base"><hr><br>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <table class="min-w-full divide-y-2 divide-gray-500 bg-white text-sm">
    <thead class="ltr:text-left rtl:text-right bg-white">
      <tr>
        <th class="w-1/12 whitespace-nowrap px-6 py-2 font-medium text-gray-900">
          
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
        <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
      </tr>
      <tr class="odd:bg-blue-500 text-center ">
        <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900" style="font-size: 16px;">
          胴
        </td>
        <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Jane Doe</td>
      </tr>
      <tr class="odd:bg-gray-50 text-center bg-gray-50">
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900" style="font-size: 16px;">
          手
        </td>
        <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
      </tr>
      <tr class="odd:bg-blue-500 text-center ">
        <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900" style="font-size: 16px;">
          腰
        </td>
        <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Jane Doe</td>
      </tr>
      <tr class="odd:bg-gray-50 text-center bg-gray-50">
        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900" style="font-size: 16px;">
          足
        </td>
        <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
      </tr>
    </tbody>
  </table>
  



            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        
      </div>
      <div class="p-4 lg:w-1/3 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">コメント1</h2>
            <p class="leading-relaxed text-base"><hr><br>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <br>
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">コメント2</h2>
            <p class="leading-relaxed text-base"><hr><br>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <br>
        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">コメント3 </h2>
            <p class="leading-relaxed text-base"><hr><br>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>


        </main>
        <footer class="modal__footer">
          <button @click="toggleStatus" type="button" class="modal__btn modal__btn-primary">Continue</button>
          <button @click="toggleStatus" type="button" class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
        </footer>
      </div>
    </div>
  </div>

  <section class="text-gray-600 body-font bg-slate-500" style="background-color: #f2f2f2;">
    <div class="container  mx-auto">
      <div class="flex flex-col">
        <br>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        <div class="p-2 md:w-1/3 sm:mb-0 mb-4">
          <div class="rounded-lg h-96 overflow-hidden" >
            <img @click="toggleStatus" data-micromodal-trigger="modal-1" href='javascript:;' alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505" >
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
    </div>
  </section>

  <button @click="toggleStatus" type="button" data-micromodal-trigger="modal-1" href='javascript:;'>Open Modal Dialog</button>
</template>