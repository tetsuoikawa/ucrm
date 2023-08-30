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
      <a class="mr-5 pl-6 text-white   text-lg">新規投稿</a>
      <a class="mr-5 pl-6 text-white font-'ヒラギノ角ゴシック'">ランキング</a>
      <a class="mr-5 pl-6 text-white">ログイン</a>
      <a class="mr-5 pl-6 text-white">ユーザー登録</a>
    </nav>
</div>
</header>



<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-col">
      <div class="lg:w-5/6 mx-auto">
        <div class="flex flex-col sm:flex-row mt-0">
          <div class="sm:w-3/5 text-center sm:pr-8 sm:py-8">

            <div class="flex flex-col text-center w-full mb-8">
                <h1 class=" sm:text-4xl text-2xl font-medium title-font mb-4 text-gray-900 font-'ヒラギノ角ゴシック'">ユーザーランキングaaa</h1>
              </div>

<span class="flex justify-center border-space-x-px overflow-hidden rounded-md mb-8">

<button class="inline-block px-4 py-2 text-md font-medium text-gray-700 hover:bg-gray-50 focus:relative">全て</button>

<button class="inline-block px-4 py-2 text-md font-medium text-gray-700 hover:bg-gray-50 focus:relative">月間</button>

<button class="inline-block px-4 py-2 text-md font-medium text-gray-700 hover:bg-gray-50 focus:relative">週間</button>

</span>




            <div class="flex flex-col items-center text-center justify-center">

              <table class="min-w-full divide-y-2 divide-gray-500 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right bg-white">
                  <tr>
                    <th class="w-1/12 whitespace-nowrap px-6 py-2 font-medium text-gray-900">
                      Rank
                    </th>
                    <th class=" w-1/6 whitespace-nowrap px-8 py-2 font-medium text-gray-900 text-left">
                      Name
                    </th>
                    <th class=" whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-right pr-28">
                      Rank Score
                    </th>
                  </tr>
                </thead>
            
                <tbody class="divide-y divide-gray-200">
                  <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #1
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
                  <tr class="odd:bg-blue-500 text-center ">
                    <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900">
                      #2
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Jane Doe</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">143874</td>
                  </tr>
            
                  <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #3
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
                  <tr class="odd:bg-gray-500 text-center ">
                      <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900">
                        #4
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Gary Barlow</td>
                      <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">123864</td>
                    </tr>
                    <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #5
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
                  <tr class="odd:bg-gray-500 text-center">
                      <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900 ">
                        #6
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Gary Barlow</td>
                      <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">123864</td>
                  </tr>
                  <tr class="odd:bg-gray-50 text-center bg-gray-50">
                      <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        #7
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                      <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                    </tr>
              
                    <tr class="odd:bg-blue-500 text-center ">
                      <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900">
                        #8
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Jane Doe</td>
                      <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">143874</td>
                    </tr>
              
                    <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #9
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
                    <tr class="odd:bg-gray-500 text-center ">
                        <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900">
                          #10
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Gary Barlow</td>
                        <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">123864</td>
                      </tr>
                      <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #11
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
                    <tr class="odd:bg-gray-500 text-center">
                        <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900 ">
                          #12
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Gary Barlow</td>
                        <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">123864</td>
                    </tr>
                                      <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #13
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
            
                  <tr class="odd:bg-blue-500 text-center ">
                    <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900">
                      #14
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Jane Doe</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">143874</td>
                  </tr>
                  <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #15
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
                  <tr class="odd:bg-gray-500 text-center ">
                      <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900">
                        #16
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Gary Barlow</td>
                      <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">123864</td>
                    </tr>
                    <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #17
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
                  <tr class="odd:bg-gray-500 text-center">
                      <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900 ">
                        #18
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Gary Barlow</td>
                      <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">123864</td>
                  </tr>
                                  <tr class="odd:bg-gray-50 text-center bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                      #19
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Developer</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">158745</td>
                  </tr>
            
                  <tr class="odd:bg-blue-500 text-center ">
                    <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900">
                      #20
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">Jane Doe</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">143874</td>
                  </tr>
            

                  <tr>
                    <td></td>
                    <td class="text-center py-4"><h1>・<br>・<br>・</h1></td>
                    <td></td>
                  </tr>
                  <tr class="odd:bg-gray-500 text-center bg-green-50">
                    <td class="whitespace-nowrap px-4 py-4 font-medium text-gray-900 ">
                      #143
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-gray-700 text-left">my name</td>
                    <td class="whitespace-nowrap px-4 py-4 text-gray-700 text-right pr-28">431</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="sm:w-2/5 sm:pl-8 sm:pt-32 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
            <img class=" mt-28 xl:w-full  block mx-auto mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            <img class="xl:w-full  block mx-auto mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            <p class="leading-relaxed text-lg mb-4">Meggings portland fingerstache lyft, post-ironic fixie man bun banh mi umami everyday carry hexagon locavore direct trade art party. Locavore small batch listicle gastropub farm-to-table lumbersexual salvia messenger bag. Coloring book flannel truffaut craft beer drinking vinegar sartorial, disrupt fashion axe normcore meh butcher. Portland 90's scenester vexillologist forage post-ironic asymmetrical, chartreuse disrupt butcher paleo intelligentsia pabst before they sold out four loko. 3 wolf moon brooklyn.</p>
            <a class="text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
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



  </section>









</template>
