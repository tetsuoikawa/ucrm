<script setup>
//@をつけることで、layoutから、場所を指定できた。
import Guest from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/InputLabel.vue'
import Input from '@/Components/TextInput.vue'
</script>

<template>
    <Guest>
      <Label value="件名">タイトル</Label>
      <Input 
        modelValue="初期値が入ります"
        @update:modelValue="emitTest"
        ></Input>
     <Lavel value="件名2">タイトル2</Lavel>
    </Guest>
</template>