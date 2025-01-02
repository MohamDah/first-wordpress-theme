<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>

<body class="font-mont">
    <header class="flex h-[6.25rem] border pr-5 justify-between">
        <img src="<?php bloginfo("template_directory"); ?>/images/logo.webp" alt="logo" 
        class="">

        <div class="flex h-full items-center gap-2.5">
            <p class="text-xl font-normal">Call for an instant estimate</p>
            <div class="h-[65%] flex items-center bg-black text-white px-6 py-1.5 rounded-full gap-4">
                <img src="<?php bloginfo("template_directory"); ?>/images/waicon.png" alt="whatsapp icon" 
                class="h-full">
                <p class="font-bold text-2xl">(+250) 780 900 900</p>
            </div>
        </div>
    </header>   