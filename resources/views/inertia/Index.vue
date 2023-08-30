<script setup>
//Controllerから来た者を取得する場合には、definePropsをつける
defineProps({
    blogs: Array
})
//import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
//$page.props+middlewareの名前+Controllerで設定した名前で読み込める。
// flash.messageは、HandleInertiarequestというMiddleWareに格納されている。
<div v-if="$page.props.flash.message" class="bg-blue-300"></div>
{{ $page.props.flash.message }}
<ul>
    <li v-for="blog in blogs" :key="blog.id">
        件名： {{ blog.title }},
        本文： {{ blog.content }}
    </li>
</ul>
Inertiaテストです。<br>
<a href="/">aタグ経由です</a><br>
</template>