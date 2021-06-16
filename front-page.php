<?php get_header(); ?>
    <div class="flex grid items-center justify-center h-screen mb-16 align-middle bg-top bg-no-repeat bg-cover sm:grid-cols-12 content-evenly hero" style="background-image:url(<?php echo get_theme_file_uri('/img/thankyou_orig.jpg')?>)">
        <h2 class="px-12 py-8 text-6xl text-white sm:col-span-6 sm:col-start-1">​Welcome to the Miller Elementary PTO website!</h2>
    </div>
<div>
    <div class="container px-6 mx-auto my-16 sm:px-0">
        <div class="grid gap-10 sm:grid-cols-12">
            <div class="sm:col-span-6 sm:col-start-1">
                <h2>Enriching experiences at Miller</h2>
                <p class="mb-16">W. E. Miller Elementary School distinguishes itself with talented and energized teachers, clear and strong leadership, LEED certified facilities and a bold, green mandate. The Miller PTO supports the school with programs, events and supplemental funds, all designed to enrich our children's experience at Miller. Please join us and help make our school a truly great school! It's All About Our Kids! Thank you to everyone who donated to our Annual Giving Campaign!</p>
            </div>
            <div class="sm:col-span-6">
            <div class="relative" style="padding-top: 56.25%">
  <iframe class="absolute inset-0 w-full h-full" src="https://youtube.com/embed/EJxl8EGxoaA" frameborder="0" …></iframe>
</div>
            </div>

        </div>
    </div>
</div>

    <div class="container px-6 mx-auto sm:px-0">
        <div class="grid gap-10 sm:grid-cols-3">
        <?php 
            $homepageAbout = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'about',
                'orderby' => 'post_date',
                'order' => 'ASC'            
            ));
            while($homepageAbout->have_posts()) {
                $homepageAbout->the_post(); ?>
             <div class="p-8 bg-white bg-gray-100 border-t-8 border-green-850">
                <h2 class="mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_post_thumbnail();?>
                <p class="mt-3"><?php echo wp_trim_words(get_the_content(), 50) ?></p>
                <p class="mt-6"><a href="<?php the_permalink(); ?>" class="px-4 py-2 font-bold text-white rounded bg-green-850 hover:bg-green-700">Learn More</a></p>
            </div>
          <?php  } wp_reset_postdata();?>
          <div class="p-8 bg-white bg-gray-100 border-t-8 border-green-850">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main-sidebar') ) : endif; ?>
            </div>
            <div class="p-8 bg-white bg-gray-100 border-t-8 border-green-850">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('secondary-sidebar') ) : endif; ?>
</div>
        </div>
    </div>
    
<?php get_footer(); ?>