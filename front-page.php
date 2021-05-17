<?php get_header(); ?>
    <div class="flex items-center justify-center h-screen px-8 mb-16 bg-center bg-no-repeat bg-cover hero" style="background-image:url(<?php echo get_theme_file_uri('/img/thankyou_orig.jpg')?>)">
        <h2 class="text-white ">​Welcome to the Miller Elementary PTO website!</h2>
    </div>
    
    <div class="container px-6 mx-auto sm:px-0">
        <div class="grid gap-16 sm:grid-cols-3">
        <?php 
        $homepagePosts = new WP_Query(array(
            'posts_per-page' => 3
        ));

        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo wp_trim_words(get_the_content(), 18) ?></p>
                <p class="mt-5"><a href="<?php the_permalink(); ?>" class="px-4 py-2 font-bold text-white bg-teal-800 rounded hover:bg-teal-700">Learn More</a></p>
            </div>
            <?php } wp_reset_postdata();?>
        </div>
    </div>
<?php get_footer(); ?>