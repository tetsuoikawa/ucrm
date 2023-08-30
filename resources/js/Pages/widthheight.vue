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
    <span class="border border-red-500 mx-16">インライン要素</span>
    <div class="border border-red-500 mx-16 w-4 mb-8">ブロック要素</div>

    <h3>幅の固定と可変</h3>
    <div class="border border-red-500 mx-16 w-96 mt-8">ブロック要素</div>
    <div class="border border-red-500 mx-16 w-full">ブロック要素</div>
    <div class="border border-red-500 mx-16 w-1/2 mb-8">ブロック要素</div>

    <p>Max値指定</p>
    <div class="border border-red-500 max-w-xl mx-16 w-1/2 mt-8">Max指定の２分の１</div>
    <div class="border border-red-500 mx-16 w-1/2 mb-8">２分の１</div>

    <p>flexbox</p>
    <div class="flex justify-around">
        <div class="border border-blue-500 w-1/2">左側</div>
        <div class="border border-blue-500 w-1/2">右側</div>
    </div>
    <div class="flex justify-around">
        <div class="border border-blue-500 w-1/4">左側</div>
        <div class="border border-blue-500 w-1/4">右側</div>
        <div class="border border-blue-500 w-1/4">左側</div>
        <div class="border border-blue-500 w-1/4">右側</div>
    </div>
    

</body>
</html>


</template>