<script setup>
import MhLayout from '@/Layouts/MhLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Mypage" />
    <MhLayout>
    </MhLayout>

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
          <label for="full-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 text-left ">キーワード</label>
          <input type="text" id="full-name" name="full-name" class="w-full  bg-white rounded border  border-gray-300 focus:border-blue-500  focus:ring-blue-500 text-base outline-none  py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative flex-grow w-2/3">

          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 text-left">シリーズ</label>
          <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 e dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>指定なし</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
          </select>
       </div>

        <div class="relative flex-grow w-2/3">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 text-left">ハンターの性別</label>
          <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>指定なし</option>
          <option value="US">男性</option>
          <option value="CA">女性</option>
          </select>
       </div>
      </div>
      <button class="flex mx-auto mt-16 text-white bg-black border-0 py-2 px-16 focus:outline-none hover:bg-indigo-600 rounded text-lg ">検索</button>
            </div>
          </div>
        </div>
    </div>
  </section>




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

  <section class="text-gray-600 body-font bg-slate-500" style="background-color: #f2f2f2;">
    <div class="container  mx-auto">
      <div class="flex flex-col">

        <br>
        <br>
      </div>
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


        <div class="p-2 md:w-1/3 sm:mb-0 mb-4">
            <div class="rounded-lg h-96 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505g">
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
        <div class="p-2 lg:w-full">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-8 pb-12 rounded-lg overflow-hidden text-center relative">
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3 text-center">↓ もっと見る</h1>
          </div>
        </div>
    </div>
    </div>
    <br>
    <br>
  </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Master Cleanse Reliac Heirloom</h1>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Shooting Stars</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                  <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">The Catalyzer</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                  <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <circle cx="6" cy="6" r="3"></circle>
                      <circle cx="6" cy="18" r="3"></circle>
                      <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Neptune</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
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
