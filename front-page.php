<?php get_header() ?>


<?php $hero = get_field("hero"); ?>

<section class="w-full h-[600px] relative text-white">
    <div class="w-full h-full overflow-hidden absolute -z-10">
        <img src="https://media-public.canva.com/u6thA/MAELB-u6thA/1/s3.jpg" alt="first section background"
            class="w-full absolute -translate-y-1/2 top-1/2 filter brightness-50">
    </div>

    <div class="mx-auto px-16 flex items-center h-full justify-around">

        <div class="h-full flex flex-col justify-center items-start w-4/6 gap-1.5 font-bold">

            <div class="flex items-end h-12 gap-1.5">
                <img src="https://media-public.canva.com/cxENM/MAFFWncxENM/1/s.png" alt="5 stars"
                    class="h-full">
                <h2 class="text-3xl"><?php echo $hero["rating_text"]; ?></h2>
            </div>
            <h1 class="text-7xl leading-[7rem]">
                <?php echo $hero["main_title"] ?>
            </h1>
            <h2 class="text-3xl">We help you;</h2>
            <div class="mt-4 grid grid-cols-2 w-full justify-start pl-[5%] gap-y-5 gap-x-24">

                <?php if (!($hero["we_help_you"]["help_1"] == "")): ?>
                    <div class="flex h-12 items-end">
                        <img src="https://media-public.canva.com/tg5-4/MAF5r0tg5-4/1/t.png" alt="checkmark"
                            class="h-full">
                        <h2 class="text-3xl font-bold">
                            <?php echo $hero["we_help_you"]["help_1"] ?>
                        </h2>
                    </div>
                <?php endif; ?>

                <?php if (!($hero["we_help_you"]["help_2"] == "")): ?>
                    <div class="flex h-12 items-end">
                        <img src="https://media-public.canva.com/tg5-4/MAF5r0tg5-4/1/t.png" alt="checkmark"
                            class="h-full">
                        <h2 class="text-3xl font-bold">
                            <?php echo $hero["we_help_you"]["help_2"] ?>
                        </h2>
                    </div>
                <?php endif; ?>

                <?php if (!($hero["we_help_you"]["help_3"] == "")): ?>
                    <div class="flex h-12 items-end">
                        <img src="https://media-public.canva.com/tg5-4/MAF5r0tg5-4/1/t.png" alt="checkmark"
                            class="h-full">
                        <h2 class="text-3xl font-bold">
                            <?php echo $hero["we_help_you"]["help_3"] ?>
                        </h2>
                    </div>
                <?php endif; ?>


                <?php if (!($hero["we_help_you"]["help_4"] == "")): ?>
                    <div class="flex h-12 items-end">
                        <img src="https://media-public.canva.com/tg5-4/MAF5r0tg5-4/1/t.png" alt="checkmark"
                            class="h-full">
                        <h2 class="text-3xl font-bold">
                            <?php echo $hero["we_help_you"]["help_4"] ?>
                        </h2>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <div class="bg-[#161616] h-[90%] border-8 border-white w-[30%] flex flex-col items-center py-2.5 px-8 gap-4 justify-center">
            <h2 class="text-4xl text-center font-bold">
                <?php echo $hero["form_title"]; ?>
            </h2>
            <form class="w-5/6 flex flex-col gap-2.5 justify-center">
                <p class="text-lg font-bold text-center mb-1.5">Fill the form below to get started.</p>
                <input class="h-12 pl-2.5 text-lg font-medium" type="text" name="name" id="name" placeholder="First & Last Name">
                <input class="h-12 pl-2.5 text-lg font-medium" type="text" name="email" id="email" placeholder="Email">
                <input class="h-12 pl-2.5 text-lg font-medium" type="text" name="phone" id="name" placeholder="Phone">
                <input class="h-12 pl-2.5 text-lg font-medium" type="text" name="zip" id="zip" placeholder="ZIP">
                <select class="h-12 pl-2.5 text-lg font-medium text-gray-900" name="service" id="service">
                    <option selected>Service of Interest</option>
                    <option value="stuff">stuff</option>
                </select>
                <button class="h-12 pl-2.5 text-lg bg-[#EC292F] text-white font-semibold border border-white" type="submit">
                    SUBMIT
                </button>
            </form>
        </div>
    </div>
</section>

<section class="flex flex-col items-center w-full px-16 mt-12 gap-[60px]">
    <div class="h-[75px] bg-[#eeeeee] flex justify-center items-center w-full">
        <h2 class="text-[1.6rem] font-bold text-gray-900">
            <span class="text-red-500">WE TAKE PRIDE</span>
            IN EVERY JOB WE DO
        </h2>

    </div>
    <div class="flex w-[1000px]  gap-12">
        <div class="bg-black text-white flex flex-col gap-6 pb-6 w-[340px]">
            <img src="<?php bloginfo("template_directory"); ?>/images/serviceImg.png" alt="roof working"
                class="w-full">
            <h3 class="mx-6 text-xl text-[#AF4B04] font-bold">ROOFING</h3>
            <p class="mx-6">All the lorem ipsum generator on the internet tend to repeat predefined chunks</p>
        </div>
        <div class="bg-black text-white flex flex-col gap-6 pb-6 w-[340px]">
            <img src="<?php bloginfo("template_directory"); ?>/images/serviceImg.png" alt="roof working"
                class="w-full">
            <h3 class="mx-6 text-xl text-[#AF4B04] font-bold">ROOFING</h3>
            <p class="mx-6">All the lorem ipsum generator on the internet tend to repeat predefined chunks</p>
        </div>
        <div class="bg-black text-white flex flex-col gap-6 pb-6 w-[340px]">
            <img src="<?php bloginfo("template_directory"); ?>/images/serviceImg.png" alt="roof working"
                class="w-full">
            <h3 class="mx-6 text-xl text-[#AF4B04] font-bold">ROOFING</h3>
            <p class="mx-6">All the lorem ipsum generator on the internet tend to repeat predefined chunks</p>
        </div>

</section>

<hr class="m-12 border-t-4 opacity-75">

<section class="mx-16 flex flex-col gap-4 bg-[#F4F9FC] text-[#1C2E3A] min-w-[1150px]">
    <h2 class="text-center px-[250px] text-4xl font-extrabold">
        Want To Hear What Entrepreneurs Like Yourself Have To Say About ClickFunnels?
    </h2>
    <p class="text-center px-[250px] text-2xl font-semibold">Here You Go...</p>
    <div class="flex justify-center gap-5">
        <div class="w-[350px] text-center">
            <img src="<?php bloginfo("template_directory"); ?>/images/testThumb.png" alt=""
                class="w-full border rounded-xl">
            <h4 class="text-lg font-extrabold mt-1">James P. Friel</h4>
            <p class="mt-1">B2B</p>
        </div>
        <div class="w-[350px] text-center">
            <img src="<?php bloginfo("template_directory"); ?>/images/testThumb.png" alt=""
                class="w-full border rounded-xl">
            <h4 class="text-lg font-extrabold mt-1">James P. Friel</h4>
            <p class="mt-1">B2B</p>
        </div>
        <div class="w-[350px] text-center">
            <img src="<?php bloginfo("template_directory"); ?>/images/testThumb.png" alt=""
                class="w-full border rounded-xl">
            <h4 class="text-lg font-extrabold mt-1">James P. Friel</h4>
            <p class="mt-1">B2B</p>
        </div>
    </div>
</section>


<section class="bg-gradient-to-r from-[#E3EEFA] to-[#E0ECF9] min-w-[1000px] w-3/4 mt-16 mx-auto text-[#1C2E3A] pt-4 pb-1">
    <h2 class="text-center px-[250px] text-2xl font-semibold">See For Yourself...</h2>
    <div class="flex justify-center w-full gap-8 px-10 mt-16 mb-6">

        <div class="w-96 bg-white rounded-lg px-10 pb-12">
            <img src="<?php bloginfo("template_directory"); ?>/images/personpfp.png" alt=""
                class="rounded-lg w-7/12 mx-auto -mt-12">
            <h3 class="text-center text-lg font-extrabold mt-4">Daymond John</h3>
            <p class="text-center text-sm">Verified ClickFunnels User</p>
            <p class="mt-3">"Whether it's courses, books, live events, physical products...
                <bold class="font-bold">literally any business I have a stake in needs to have funnel.</bold>
                A funnel removes complexity, help the customer get what they want faster,
                and increase your profits."
            </p>
        </div>
        <div class="w-96 bg-white rounded-lg px-10 pb-12">
            <img src="<?php bloginfo("template_directory"); ?>/images/personpfp.png" alt=""
                class="rounded-lg w-7/12 mx-auto -mt-12">
            <h3 class="text-center text-lg font-extrabold mt-4">Daymond John</h3>
            <p class="text-center text-sm">Verified ClickFunnels User</p>
            <p class="mt-3">"Whether it's courses, books, live events, physical products...
                <bold class="font-bold">literally any business I have a stake in needs to have funnel.</bold>
                A funnel removes complexity, help the customer get what they want faster,
                and increase your profits."
            </p>
        </div>
        <div class="w-96 bg-white rounded-lg px-10 pb-12">
            <img src="<?php bloginfo("template_directory"); ?>/images/personpfp.png" alt=""
                class="rounded-lg w-7/12 mx-auto -mt-12">
            <h3 class="text-center text-lg font-extrabold mt-4">Daymond John</h3>
            <p class="text-center text-sm">Verified ClickFunnels User</p>
            <p class="mt-3">"Whether it's courses, books, live events, physical products...
                <bold class="font-bold">literally any business I have a stake in needs to have funnel.</bold>
                A funnel removes complexity, help the customer get what they want faster,
                and increase your profits."
            </p>
        </div>

    </div>
</section>

<section class="mt-16 min-w-[1150px] text-[#1C2E3A] mx-24 grid grid-cols-2 border-4 pt-2">
    <div class="px-20 py-10">
        <p class="font-bold text-[#4DC4FD] text-2xl">ClickFunnels Is...</p>
        <h2 class="font-extrabold text-5xl">Your Website</h2>

        <p class="mt-8 text-xl">Building a website or publishing a blog used to be a grind. What would normally take forever to design and develop can now be done in a single afternoon!</p>

        <h3 class="font-bold text-xl mt-8">With FunnelHubs, you can...</h3>
        <ul class="text-lg mt-8">
            <li class="relative pl-6"><i class="fa-solid fa-angle-right text-[#4DC4FD] text-xl -ml-6 absolute"></i>Experience insanely fast page loading speeds, which means a whole lot more conversions and sales</li>
            <li class="relative pl-6"><i class="fa-solid fa-angle-right text-[#4DC4FD] text-xl -ml-6 absolute"></i>Fully customizable, drag and drop page builder that anyone can use regardless of computer skills</li>
            <li class="relative pl-6"><i class="fa-solid fa-angle-right text-[#4DC4FD] text-xl -ml-6 absolute"></i>Experience insanely fast page loading speeds, which means a whole lot more conversions and sales</li>
        </ul>

        <p class="mt-8 text-lg">ClickFunnels Replaces:</p>
        <div class="flex gap-5">
            <img src="https://logos-world.net/wp-content/uploads/2020/10/WordPress-Logo-2003-2008.png" alt="wp logo"
                class="w-28">
            <img src="https://logos-world.net/wp-content/uploads/2020/10/WordPress-Logo-2003-2008.png" alt="wp logo"
                class="w-28">
        </div>
    </div>
    <div class="overflow-hidden border-8 border-[#AF875F] h-[700px] relative ml-2">
        <img src="https://media-public.canva.com/_ufro/MAEICT_ufro/1/s2.jpg" alt=""
            class="absolute -translate-y-1/2 top-[60%]">
    </div>
</section>

<section class="bg-[#eeeeee] mt-16 min-w-[1000px] mx-16 p-16">
    <p class="text-3xl font-bold text-center">
        <span class="text-red-600">WE TAKE PRIDE</span>
        IN EVERY JOB WE DO
    </p>

    <div class="grid grid-cols-3 gap-10 mt-10 px-16">
        <div>
            <div class="flex gap-2 items-center">
                <i class="fa-solid fa-check bg-red-600 min-w-[4.5rem] h-[4.5rem] text-white text-5xl flex justify-center items-center rounded-full"></i>
                <h3 class="flex-grow text-3xl font-bold">FULLY GUARANTEE ALL OUR WORK</h3>
            </div>
            <p class="mt-6 text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div>
            <div class="flex gap-2 items-center">
                <i class="fa-solid fa-check bg-red-600 min-w-[4.5rem] h-[4.5rem] text-white text-5xl flex justify-center items-center rounded-full"></i>
                <h3 class="flex-grow text-3xl font-bold">FULLY GUARANTEE ALL OUR WORK</h3>
            </div>
            <p class="mt-6 text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div>
            <div class="flex gap-2 items-center">
                <i class="fa-solid fa-check bg-red-600 min-w-[4.5rem] h-[4.5rem] text-white text-5xl flex justify-center items-center rounded-full"></i>
                <h3 class="flex-grow text-3xl font-bold">FULLY GUARANTEE ALL OUR WORK</h3>
            </div>
            <p class="mt-6 text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
    </div>
</section>

<section class="mx-24 mt-20">
    <h1 class="text-center text-5xl font-bold">OUR PROJECTS</h1>

    <div class="grid grid-cols-3 gap-16 mt-20">
        <div class="border flex h-52 text-[.6rem] font-medium text-center">
            <img src="https://media-public.canva.com/SCn38/MADyQ1SCn38/1/s.jpg" alt=""
                class="min-w-44 object-cover object-bottom">
            <div class="p-8 flex flex-col items-center gap-2">
                <p>"Thanks to RANI Construction Company, we now
                    live in our dream home. The process was smooth,
                    and the results exceeded our expectations." </p>

                <p class="font-bold">[Client Name]</p>
                <img src="https://media-public.canva.com/msqN0/MAEnZdmsqN0/1/t.png" alt=""
                    class="w-8">
                <p>Watch Story</p>
            </div>
        </div>
        <div class="border flex h-52 text-[.6rem] font-medium text-center">
            <img src="https://media-public.canva.com/SCn38/MADyQ1SCn38/1/s.jpg" alt=""
                class="min-w-44 object-cover object-bottom">
            <div class="p-8 flex flex-col items-center gap-2">
                <p>"Thanks to RANI Construction Company, we now
                    live in our dream home. The process was smooth,
                    and the results exceeded our expectations." </p>

                <p class="font-bold">[Client Name]</p>
                <img src="https://media-public.canva.com/msqN0/MAEnZdmsqN0/1/t.png" alt=""
                    class="w-8">
                <p>Watch Story</p>
            </div>
        </div>
        <div class="border flex h-52 text-[.6rem] font-medium text-center">
            <img src="https://media-public.canva.com/SCn38/MADyQ1SCn38/1/s.jpg" alt=""
                class="min-w-44 object-cover object-bottom">
            <div class="p-8 flex flex-col items-center gap-2">
                <p>"Thanks to RANI Construction Company, we now
                    live in our dream home. The process was smooth,
                    and the results exceeded our expectations." </p>

                <p class="font-bold">[Client Name]</p>
                <img src="https://media-public.canva.com/msqN0/MAEnZdmsqN0/1/t.png" alt=""
                    class="w-8">
                <p>Watch Story</p>
            </div>
        </div>
        <div class="border flex h-52 text-[.6rem] font-medium text-center">
            <img src="https://media-public.canva.com/SCn38/MADyQ1SCn38/1/s.jpg" alt=""
                class="min-w-44 object-cover object-bottom">
            <div class="p-8 flex flex-col items-center gap-2">
                <p>"Thanks to RANI Construction Company, we now
                    live in our dream home. The process was smooth,
                    and the results exceeded our expectations." </p>

                <p class="font-bold">[Client Name]</p>
                <img src="https://media-public.canva.com/msqN0/MAEnZdmsqN0/1/t.png" alt=""
                    class="w-8">
                <p>Watch Story</p>
            </div>
        </div>
        <div class="border flex h-52 text-[.6rem] font-medium text-center">
            <img src="https://media-public.canva.com/SCn38/MADyQ1SCn38/1/s.jpg" alt=""
                class="min-w-44 object-cover object-bottom">
            <div class="p-8 flex flex-col items-center gap-2">
                <p>"Thanks to RANI Construction Company, we now
                    live in our dream home. The process was smooth,
                    and the results exceeded our expectations." </p>

                <p class="font-bold">[Client Name]</p>
                <img src="https://media-public.canva.com/msqN0/MAEnZdmsqN0/1/t.png" alt=""
                    class="w-8">
                <p>Watch Story</p>
            </div>
        </div>
        <div class="border flex h-52 text-[.6rem] font-medium text-center">
            <img src="https://media-public.canva.com/SCn38/MADyQ1SCn38/1/s.jpg" alt=""
                class="min-w-44 object-cover object-bottom">
            <div class="p-8 flex flex-col items-center gap-2">
                <p>"Thanks to RANI Construction Company, we now
                    live in our dream home. The process was smooth,
                    and the results exceeded our expectations." </p>

                <p class="font-bold">[Client Name]</p>
                <img src="https://media-public.canva.com/msqN0/MAEnZdmsqN0/1/t.png" alt=""
                    class="w-8">
                <p>Watch Story</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-black text-white mx-16 mt-16 p-16">
    <h1 class="text-center text-4xl font-bold">Areas we cover</h1>

    <div class="grid grid-cols-3 text-center mt-20 gap-6">
        <div class="border border-white border-opacity-25 rounded-xl px-16 pb-10">
            <i class="fa-solid fa-location-dot bg-white text-black w-20 h-20 text-5xl flex justify-center items-center mx-auto rounded-full -mt-10"></i>
            <h2 class="text-2xl font-bold mt-6">Princeton, New Jersey</h2>
            <p class="mt-4">Explore Princeton's rich history and vibrant community, where we provide top-notch local services.</p>
        </div>
        <div class="border border-white border-opacity-25 rounded-xl px-16 pb-10">
            <i class="fa-solid fa-location-dot bg-white text-black w-20 h-20 text-5xl flex justify-center items-center mx-auto rounded-full -mt-10"></i>
            <h2 class="text-2xl font-bold mt-6">Princeton, New Jersey</h2>
            <p class="mt-4">Explore Princeton's rich history and vibrant community, where we provide top-notch local services.</p>
        </div>
        <div class="border border-white border-opacity-25 rounded-xl px-16 pb-10">
            <i class="fa-solid fa-location-dot bg-white text-black w-20 h-20 text-5xl flex justify-center items-center mx-auto rounded-full -mt-10"></i>
            <h2 class="text-2xl font-bold mt-6">Princeton, New Jersey</h2>
            <p class="mt-4">Explore Princeton's rich history and vibrant community, where we provide top-notch local services.</p>
        </div>
    </div>
</section>


<?php get_footer() ?>