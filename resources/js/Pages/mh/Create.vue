<script setup>

import { VueElement, reactive } from 'vue' 
import { Inertia } from '@inertiajs/inertia'
import MhLayout from '@/Layouts/MhLayout.vue';
import { Head , Link } from '@inertiajs/vue3';


defineProps({
    errors: Object,
    username: Object,
})

const form = reactive({
    title: null,
    content: null,
    series: null,
    gender: null,
    head: null,
    shoulder: null,
    arm: null,
    waist: null,
    leg: null,
    username: null,

})

const submitFunction = () => {
    Inertia.post('/mh', form)
}
</script>


<template>
  

    <Head title="新規投稿" />
    <MhLayout :username="username"></MhLayout>

<header class="text-gray-600 body-font" style="background-color: black;">

</header>

<!-- Use preprocessors via the lang attribute! e.g. <template lang="pug"> -->



  

<!-- Use preprocessors via the lang attribute! e.g. <style lang="scss"> -->


<!--    
    prevent : formで全てを再読み込みするが、一部だけをを読み込む。
    @submit : クリックで送信(formのみ) -->



<div class="mx-auto max-w-screen-md px-4 py-16 sm:px-6 lg:px-8 ">
  <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">

    </div>


    <form @submit.prevent="submitFunction">

        <div class="rounded-lg bg-white px-8 shadow-lg lg:col-span-3 lg:p-12">


          <h1 style="text-align: center;"  class="pb-12 sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">写真をアップロードする</h1>

          <label for="full-name" class=" mb-8 block  text-xl font-medium text-gray-900 dark:text-gray-100 text-left"><span style="color:red">*</span> メイン画像 (必須)</label>
          <input class=" mb-12 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >
          <label for="full-name" class=" mb-6 block  text-xl font-medium text-gray-900 dark:text-gray-100 text-left">サブ画像 (任意)</label>
          <input class=" mb-6 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >
          <input class=" mb-6 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >
          <input class=" mb-6 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >
          <input class=" mb-6 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >
          <input class=" mb-12 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >


          

        <label for="full-name" class="block mb-4 text-xl font-medium text-gray-900 dark:text-gray-100 text-left"><span style="color:red">*</span> 作品名 (必須)</label>
        <div v-if="errors.title" style="color:red" class="mb-2">{{ errors.title }}</div>
        <div>
          <label class="sr-only" for="name">Name</label>
          <input
            class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            type="text"
            name="title" 
            v-model="form.title">{{ form.title }}<br>          
        </div>

        <label for="HeadlineAct" class=" pt-8 block text-xl font-medium text-gray-900 text-left mb-4">
          <span style="color:red">*</span> シリーズ選択 (必須) 
            </label>

            <div v-if="errors.series" style="color:red" class="mb-2">{{ errors.series }}</div>

            <select
              name="series"
              id="HeadlineAct"
              v-model="form.series"
              class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            >
              <option value="サンブレイク" class="">サンブレイク</option>
              <option value="ライズ" class="">ライズ</option>
              <option value="アイスボーン">アイスボーン</option>
              <option value="ワールド">ワールド</option>
              <option value="ストーリーズ">ストーリーズ</option>
              <option value="ダブルクロス">ダブルクロス</option>
              <option value="クロス">クロス</option>
              <option value="MH4G">MH4G</option>
              <option value="MH4">MH4</option>
              <option value="ポータブル 3nd">ポータブル 3nd</option>
              <option value="MHG (wii版)">MHG (wii版)</option>
              <option value="MH3 （トライ">MH3 （トライ）</option>
              <option value="ポータブル 2nd">ポータブル 2nd</option>
              <option value="MH2 (ドス)">MH2 (ドス)</option>
              <option value="MHG">MHG</option>
              <option value="初代">初代</option>
              <option value="その他">その他</option>
            </select>

            <label for="HeadlineAct" class=" pt-12 block mb-4 text-xl font-medium text-gray-900 dark:text-gray-400 text-left">
              <span style="color:red">*</span> 性別 (必須) 
            </label>

            <div v-if="errors.gender"  style="color:red" class="mb-2">{{ errors.gender }}</div>

            <select
              name="HeadlineAct"
              id="gender"
              v-model="form.gender"
              class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            >
              <option value="1">男性</option>
              <option value="2">女性</option>
            </select>
            {{ form.title }}<br>



        <label for="full-name" class=" pt-8 pb-4 block mb-2 text-xl font-medium text-gray-900 dark:text-gray-100 text-left"><span style="color:red">*</span> 装備名 (必須)</label>

        <div v-if="errors.title" style="color:red" class="mb-2">{{ errors.head }}</div>
        <div>
          <label class="sr-only" for="name">head</label>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            placeholder="頭"
            type="text"
            name="head" 
            v-model="form.head">       
        </div>
        <div>
          <label class="sr-only" for="name">shoulder</label>
          <div v-if="errors.title" style="color:red" class="mb-2">{{ errors.shoulder }}</div>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            placeholder="胴"
            type="text"
            name="shoulder" 
            v-model="form.shoulder">        
        </div>
        <div>
          <label class="sr-only" for="name">arm</label>
          <div v-if="errors.title" style="color:red" class="mb-2">{{ errors.arm }}</div>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            placeholder="手"
            type="text"
            name="arm" 
            v-model="form.arm">        
        </div>
        <div>
          <label class="sr-only" for="name">waist</label>
          <div v-if="errors.title" style="color:red" class="mb-2">{{ errors.waist }}</div>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            placeholder="腰"
            type="text"
            name="waist" 
            v-model="form.waist">         
        </div>
        <div>
          <label class="sr-only" for="name">leg</label>
          <div v-if="errors.title" style="color:red" class="mb-2">{{ errors.leg }}</div>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            placeholder="足"
            type="text"
            name="leg" 
            v-model="form.leg">      
        </div>

        <label for="full-name" class="block mb-4 text-xl font-medium text-gray-900 dark:text-gray-100 text-left mt-8">作品の説明 (任意) </label>
        <div v-if="errors.title" style="color:red" class="mb-2">{{ errors.content }}</div>    
            
            <label class="sr-only" for="message">Message</label>

            <textarea
              class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white "
              placeholder="100字以内で入力して下さい"
              rows="8"
              name="content"
              type="text"
              v-model="form.content"
            ></textarea>

            <div class="mt-8">
            <button
              type="submit"
              class=" mb-16 inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto" title="aaa">
              投稿する
            </button>
          </div>
        </div>
    </form>
</div>

</template>