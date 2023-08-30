<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>


<template>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <!-- p, h1〜h6, span -->
  <p class="text-base">テキストサイズ base</p>
  <p class="text-2xl">テキストサイズ 2xl</p>
  <p class="text-sm">テキストサイズ sm</p>

  <div class="text-center">ブロック要素内のテキストを中央に</div>

  <p>flexbox</p>
    <div class="flex justify-around">
        <div class="border border-blue-500 w-1/2 text-center text-2xl">左側</div>
        <div class="border border-blue-500 w-1/2">右側</div>
    </div>
    <div class="flex justify-around">
        <div class="border border-blue-500 w-1/4 text-center">左側</div>
        <div class="border border-blue-500 w-1/4 text-right">右側</div>
        <div class="border border-blue-500 w-1/4">左側</div>
        <div class="border border-blue-500 w-1/4">右側</div>
    </div>

    <p class="my-8 text-2xl">色</p>

    <p class="text-blue-500">文字の色</p><br>
    <p class="border border-blue-500">線の色</p><br>
    <p class="bg-blue-500 text-blue-50">背景の色</p>
    <br>
    <br>
    <button class="ml-10 px-5 py-3  border border-blue-500 ">ボタン</button>
</body>
</html>
</template>