<?php 
get_header(); 
pageBanner();
?>

<?php
while(have_posts()) {
    the_post(); ?>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-6 col-start-4 prose">
        <p><?php the_content();?></p>
        </div>
    </div>
<?php }

get_footer();
?>