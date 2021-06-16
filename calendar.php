<?php /* Template Name: Events */ ?>

<?php get_header();
    pageBanner(array(
    'title' => 'Upcoming Events',
    'photo' => get_theme_file_uri('/img/millerelementary.jpg')
));
?>
<div class="container mx-auto">
    <div class="grid sm:grid-cols-12">
        <div class="sm:col-span-6 sm:col-start-4">
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
    </div>
</div>
<?php
get_footer();
?>