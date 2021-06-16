<?php get_header();
    pageBanner(array(
    'title' => 'Miller News',
    'photo' => get_theme_file_uri('/img/colored-pencils.jpg')
));?>

<div class="container grid grid-cols-12 mx-auto">
<?php

while(have_posts()) {
    the_post(); ?>
    <div class="col-span-6 col-start-4">
        <article class="prose">
            <h2 class="text-6xl"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <p>Posted by: <?php the_author_posts_link();?></p>
            <p><?php the_excerpt();?></p>
            <p class="mt-10"><a href="<?php the_permalink();?>" class="px-3 py-2 text-white bg-teal-800">Read More</a></p>
        </article>
    </div>
<?php } 
    echo paginate_links();
?>

</div>

<?php

get_footer();



?>




