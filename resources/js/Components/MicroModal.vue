<script setup>
import { ref } from 'vue'
import NavLink from '@/Components/NavLink.vue';
import { Head, Link } from '@inertiajs/vue3';

const isShow = ref(false)
const toggleStatus = () => { isShow.value = !isShow.value}
</script>
<template>
    
  <div v-show="isShow" class="modal" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container w-[36rem]" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <header class="modal__header">
          <button @click="toggleStatus" type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </header>
        <main class="modal__content" id="modal-1-content">
<section class="text-gray-600 body-font">
  <div class="container px-5 mx-auto flex flex-wrap">
    <div class="flex flex-wrap -m-4">
      <div class="px-4 lg:w-full md:w-full">
        <br>
        <p class="mb-8">ユーザー登録催促window</p>
        <div class="flex justify-between mt-2">
          <NavLink :href="route('register')" :active="route().current('mh.create')">
            ユーザー登録
          </NavLink>
          <NavLink :href="route('login')" :active="route().current('mh.rank')">
            ログイン
          </NavLink>
        </div>  
        <br>
      </div>   
    </div>
  </div>
</section>


        </main>

      </div>
    </div>
  </div>


  <button @click="toggleStatus" type="button" data-micromodal-trigger="modal-1" href='javascript:;'>Open Modal Dialog</button>
</template>