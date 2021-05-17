<?php get_header();?>
<div class="flex px-8 py-32 mb-16 align-middle bg-center bg-no-repeat bg-cover hero" style="background-image:url(<?php echo get_theme_file_uri('/img/thankyou_orig.jpg')?>)">
        <div class="container mx-auto">
            <h2 class="text-white">​Welcome to the Miller Elementary PTO website!</h2>
        </div>
    </div>

<div class="container mx-auto">
<?php

while(have_posts()) {
    the_post(); ?>
    <div class="container mb-16">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <p>Posted by: <?php the_author_posts_link();?></p>
    <p><?php the_excerpt();?></p>
    <p class="mt-10"><a href="<?php the_permalink();?>" class="px-3 py-2 text-white bg-teal-800">Read More</a></p>


    </div>
<?php } 
    echo paginate_links();
?>

</div>

<?php

get_footer();



?>




