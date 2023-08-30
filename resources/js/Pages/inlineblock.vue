<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>


<template>
  <span class="border border-red-500 mx-4">spanタグです</span>
  <span class="border border-red-500 p-12">inline要素です</span>


  <p class="border border-blue-500 mt-24 mx-16">pタグ</p>
  <p class="border border-blue-500 mt-16 mx-16 p-8">pタグ</p>
  <p class="border border-blue-500 my-16 mx-16">pタグ</p>

  <p class="border border-green-500 m-16">
    ブロック要素の中にインライン要素
    <span class="border border-green-500 mx-4">spanタグ</span>
    <span class="border border-green-500 mr-4">spanタグ</span>
    <span class="border border-green-500 mr-4">spanタグ</span>
  </p>

  <p>ブロック要素の中にブロック要素</p>
  <div class="border border-pink-200 mx-16 mt-8">
      親ブロック
    <div class="border border-pink-200 mx-16 mt-8">子ブロック１</div>
    <div class="border border-pink-200 mx-16 my-8">子ブロック２</div>
  </div>

  <p class="my-8">ブロック要素を横並び</p>
  <div class="border border-pink-200 flex justify-around">
      親ブロック
    <div class="border border-pink-200">子ブロック１</div>
    <div class="border border-pink-200">子ブロック２</div>
  </div>
</template>