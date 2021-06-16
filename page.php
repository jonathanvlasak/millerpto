<?php get_header();
    pageBanner(array(
    'title' => 'Contact Us',
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
                <article class="prose max-w-none">
                    <?php the_content();?>
                </article>
                <p class="mt-10">
                    <a href="<?php the_permalink();?>" class="px-3 py-2 text-white bg-teal-800">Read More</a>
                </p>
            </article>
        <?php } ?>
        </div>
        <div class="p-8 prose bg-white bg-gray-100 border-t-8 border-green-850 sm:col-span-4 sm:col-start-9" >
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('secondary-sidebar') ) : endif; ?>    
        </div>
    </div>
</div>
<?php
get_footer();
?>