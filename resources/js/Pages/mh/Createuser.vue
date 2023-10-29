<script setup>
import MhLayout from '@/Layouts/MhLayout.vue';
import { ref } from 'vue';
import { reactive } from 'vue' 
import { onMounted } from 'vue';
import { Inertia } from '@inertiajs/inertia'
import { Head , Link } from '@inertiajs/vue3';




const props = defineProps({
    user: Object.data,
})

const form = reactive({
    id: props.user.data[0].id,
    name: props.user.data[0].name,
    email: props.user.data[0].email,
    imageicon: props.user.data[0].imageicon,
    imageheader: props.user.data[0].imageheader,
    content: props.user.data[0].content,
    twitter: props.user.data[0].twitter,
    facebook: props.user.data[0].facebook,
    instagram: props.user.data[0].instagram,
})

const updateProps = id => {
    Inertia.put(route('mh.update2', { mh: id }) , form)
}

onMounted(() => {
  console.log(form.name)
})
</script>


<template>

<Head title="ユーザー情報" />
<MhLayout :username="form.name"></MhLayout>

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


    <form @submit.prevent="updateProps(form.id)">

        <div class="rounded-lg bg-white px-8 shadow-lg lg:col-span-3 lg:p-12">


          <h1 style="text-align: center;"  class="pb-12 sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">公開プロフィール</h1>

          <label for="full-name" class=" mb-8 block  text-xl font-medium text-gray-900 dark:text-gray-100 text-left"> アイコン画像</label>
          <input class=" mb-12 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >
          <label for="full-name" class=" mb-6 block  text-xl font-medium text-gray-900 dark:text-gray-100 text-left">ヘッダー画像</label>
          <input class=" mb-6 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
          dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
          id="file_input"
          type="file"
          >      

        <label for="full-name" class="mt-8 block mb-4 text-xl font-medium text-gray-900 dark:text-gray-100 text-left"><span style="color:red">*</span> ユーザー名</label>
        <div>
          <input
            class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            type="text"
            name="title" 
            v-model="form.name"> 
        </div>

        <label for="full-name" class="mt-8 block mb-4 text-xl font-medium text-gray-900 dark:text-gray-100 text-left"><span style="color:red">*</span> メールアドレス</label>
        <div>
          <input
            class="w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            type="text"
            name="email" 
            v-model="form.email"> 
        </div>


        <label for="full-name" class=" pt-8  block mb-2 text-xl font-medium text-gray-900 dark:text-gray-100 text-left">SNS</label>

        <div>
            <label for="full-name" class=" pt-8 block mb-2 text-md font-medium text-gray-900 dark:text-gray-100 text-left">X(twitter)</label>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            type="text"
            name="head" 
            v-model="form.twitter">       
        </div>
        <div>
            <label for="full-name" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-100 text-left">facebook</label>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            type="text"
            name="shoulder" 
            v-model="form.facebook">        
        </div>
        <div>
            <label for="full-name" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-100 text-left">instagram</label>
          <input
            class=" mb-6 w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
            type="text"
            name="arm" 
            v-model="form.instagram">        
        </div>    
            
        <label for="full-name" class=" pt-8 pb-4 block mb-2 text-xl font-medium text-gray-900 dark:text-gray-100 text-left">自己紹介</label>

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
              更新する
            </button>
          </div>
        </div>
    </form>
</div>

</template>