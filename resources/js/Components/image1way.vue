<script setup>
import { ref } from 'vue'
import { Head, Link } from '@inertiajs/vue3';

const isShow = ref(false)
const toggleStatus = () => { isShow.value = !isShow.value}
</script>
<template>
<img @click="toggleStatus" data-micromodal-trigger="modal-1" href='javascript:;' alt="content" class=" mt-8 object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505" >

<button @click="toggleStatus" type="button" data-micromodal-trigger="modal-1" href='javascript:;'>Open Modal Dialog</button>

</template>