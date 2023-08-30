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
  <style>
    .bg-image{
      background-image: url('images/img1.jpg');
    }
  </style>
</head>
<body>
  background-image
  <div class="mb-16 h-24 w-40 bg-image"></div>
  background-image bg-contain
  <div class="mb-16 h-96 w-96 bg-contain bg-center bg-no-repeat	" style="background-image: url('images/img1.jpg');"></div>

  imgタグ 幅指定
  <img class="mb-16 w-96" src="images/img1.jpg">
  imgタグ 幅と高さ指定
  <img class="mb-16 w-96 h-24" src="images/img1.jpg">
  imgタグ 幅と高さ object-cover 指定
  <img class="mb-16 w-96 h-24 object-cover" src="images/img1.jpg">
  <img src="images/img1.jpg">
  
</body>
</html>

</template>