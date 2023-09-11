<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>

<div class="main-nav">
    <Link href="/">
        <i class="fa fa-home"></i> <span>Home</span></Link>
    <Link href="">
        <i class="fa fa-cart-shopping"></i> <span>Product</span></Link>
    <Link href="#">
        <i class="fa fa-question"></i> <span>About Us</span></Link>
    <Link href="#">
        <i class="fa-solid fa-cart-shopping"> </i><span> Add to cart</span></Link>
    <Link href="#">
        <i class="fa-regular fa-images"></i> <span>Gallery</span></Link>
    <Link href="#">
        <i class="fa-solid fa-phone-volume"></i> <span>Contact Us</span></Link>
</div>

</template>
