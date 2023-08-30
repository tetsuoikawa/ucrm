<script setup>
//Controllerから来た者を取得する場合には、definePropsをつける
defineProps({
    blogs: Array
})

import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
//$page.props+middlewareの名前+Controllerで設定した名前で読み込める。
<div v-if="$page.props.flash.message" class="bg-blue-300"></div>
{{ $page.props.flash.message }}
<ul>
    <li v-for="blog in blogs" :key="blog.id">
        件名：<Link class="text-blue-400" :href="route('inertia.show', {id: blog.id })"> {{ blog.title }}</link>,
        本文： {{ blog.content }}
    </li>
</ul>
Inertiaテストです。<br>
<a href="/">aタグ経由です</a><br>
</template>