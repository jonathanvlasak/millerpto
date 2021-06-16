<?php 
get_header(); 
pageBanner();
while(have_posts()) {
    the_post(); ?>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-10 col-start-2 prose max-w-none">
        <h2 class="text-6xl text-green-800 font-poppins"><?php the_title();?></h2>
        <p><?php the_content();?></p>
        </div>
    </div>

<?php }
get_footer();
?>