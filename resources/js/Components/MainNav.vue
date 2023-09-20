<script setup>
    import { Link } from '@inertiajs/vue3';
    import { defineProps } from 'vue';
    const {hidden} = defineProps (['hidden'])
</script>

<template>

<div class="main-nav">
   <Link href="/dashboard" class="">
                <i class="fa-solid fa-gauge"></i>
                <span v-show="!isCollapsed">&nbsp;Dashboard</span>
            </Link>
    <Link href="/clients">
       <i class="fa fa-users" aria-hidden="true"></i> <span>Client</span></Link>
    <!-- <Link href="#">
        <i class="fa fa-question"></i> <span>About Us</span></Link>
         <Link :href="route('profile.edit')" :active="route().current('clients')">
            <i class="fa-solid fa-user"></i> <span :hidden="hidden">Profile</span>
        </Link> -->
     <Link href="/about">
          <i class="fa-solid fa-user"></i>  <span>About us</span></Link>
    <Link href="/contact">
        <i class="fa-solid fa-phone-volume"></i> <span>Contact Us</span></Link>

    <Link :href="route('logout')" method="post" >
            <i class="fa-solid fa-right-from-bracket"></i> <span :hidden="hidden">Logout</span>
 </Link>
</div>

</template>
