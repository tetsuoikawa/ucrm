<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>upload</title>
  <style>

  </style>
</head>
<body>
    

    

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
<div class="h-full  px-8 pt-16 rounded-lg overflow-hidden text-center relative">
    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-0">ー 新規投稿 ー</h1>
</div>

    <div class="mx-auto max-w-screen-md px-4 py-16 sm:px-6 lg:px-8 ">
      <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">

        </div>
        
  
        <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <label for="full-name" class="block mb-4 text-xl font-medium text-gray-900 dark:text-gray-100 text-left">必須  作品名</label>
          <form action="" class="space-y-4">
            <div>
              <label class="sr-only" for="name">Name</label>
              <input
                class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
                placeholder="Name"
                type="text"
                id="name"
              />
            </div>
            <br>

            <div>
                <label for="HeadlineAct" class="block text-xl font-medium text-gray-900 text-left mb-4">
                 シリーズ選択
                </label>

                <select
                  name="HeadlineAct"
                  id="HeadlineAct"
                  class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
                >
                  <option value="">選択してください</option>
                  <option value="JM">John Mayer</option>
                  <option value="SRV">Stevie Ray Vaughn</option>
                  <option value="JH">Jimi Hendrix</option>
                  <option value="BBK">B.B King</option>
                  <option value="AK">Albert King</option>
                  <option value="BG">Buddy Guy</option>
                  <option value="EC">Eric Clapton</option>
                </select>
            </div>
            <br>
            <div>
                <label for="HeadlineAct" class="block mb-4 text-xl font-medium text-gray-900 dark:text-gray-400 text-left">
                  性別
                </label>   
                <select
                  name="HeadlineAct"
                  id="HeadlineAct"
                  class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
                >
                  <option value="">選択してください</option>
                  <option value="JM ">男性</option>
                  <option value="SRV">女性</option>
                </select>
            </div>

            


            <div class="relative flex-grow w-full flex justify-center">
             
              </div>

             <br>


             <div>
                <label for="full-name" class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-100 text-left">任意  作品の説明</label>
                
                <label class="sr-only" for="message">Message</label>
        
                <textarea
                  class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white "
                  placeholder="Message"
                  rows="8"
                  id="message"
                ></textarea>
              </div>
              <br>

              
        
              <div class="mt-4">
                <button
                  type="submit"
                  class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                >
                  Send Enquiry
                </button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>



</body>
</html>