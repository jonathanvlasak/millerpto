<?php get_header();
    pageBanner(array(
    'title' => 'About Miller PTO',
    'photo' => get_theme_file_uri('/img/millerelementary.jpg')
));

?>
<div class="container mx-auto">
    <div class="grid gap-10 sm:grid-cols-12">
    <div class="sm:col-span-8 sm:col-start-1">
<?php

while(have_posts()) {
    the_post(); ?>
            <article>
                <article class="prose max-w-none"><?php the_content();?></article>
                <p class="mt-10"><a href="<?php the_permalink();?>" class="px-3 py-2 text-white bg-teal-800">Read More</a></p>
            </article>
<?php } 
    echo paginate_links();
?>
    </div>
    <div class="p-8 prose bg-white bg-gray-100 border-t-8 border-green-850 sm:col-span-4 sm:col-start-9" >
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main-sidebar') ) : endif; ?>

<p></p>
<h2 class="mt-6">Important Links</h2>
<p><a href="" class="underline">Link 1</a></p>
<p><a href="" class="underline">Link 2</a></p>
<p><a href="" class="underline">Link 3</a></p>
<p><a href="" class="underline">Link 4</a></p>

    
    </div>
    </div>
</div>

<?php
get_footer();
?>