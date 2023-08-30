<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'

const newTitle = ref('')
const newContent = ref('')
</script>

<template>
    
Inertiaテストです。<br>
<a href="/">aタグ経由です</a><br>
<Link href="/">Link経由です</Link><br>
<Link :href="route('inertia.index')">名前付きルートの確認です</Link><br>
<Link :href="route('inertia.show', {id: 1})">ルートパラメータのテストです</Link>



<div class="mb-8"></div>
v-model : 連動して、入力した値を変数の中に入れてくれる。<br><br>
v-bind: :で略した部分。属性を動的に設定できる。 <br><br>
<a href="https://wa3.i-3-i.info/word11857.html">動的とは？</a><br><br>
<input type="text" name="newTitle" v-model="newTitle">{{  newTitle }}<br>
<input type="text" name="newContent" v-model="newContent">{{  newContent }}<br>

<Link as="button" method="post" :href="route('inertia.store')" 
:data="{
  title: newTitle,
  content: newContent
  }">DB保存テスト</Link>

  
</template>