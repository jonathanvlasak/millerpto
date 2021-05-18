<?php 
get_header(); ?>

<div class="flex px-8 py-32 mb-16 align-middle bg-center bg-no-repeat bg-cover hero" style="background-image:url(<?php echo get_theme_file_uri('/img/thankyou_orig.jpg')?>)">
        <div class="container mx-auto">
            <h2 class="text-white">Get Involved Today!</h2>
        </div>
    </div>
<?php

while(have_posts()) {
    the_post(); ?>
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-4 col-start-2">
        <h2 class="text-6xl font-black font-poppins"><?php the_title();?></h2>
        <p><?php the_content();?></p>
        </div>
    </div>
<?php }

get_footer();
?>