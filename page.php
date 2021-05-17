<?php 
get_header();
while(have_posts()) {
    the_post(); ?>
    <div class="flex px-8 py-32 mb-16 align-middle bg-center bg-no-repeat bg-cover hero" style="background-image:url(<?php echo get_theme_file_uri('/img/thankyou_orig.jpg')?>)">
        <div class="container mx-auto">
            <h1 class="mb-8 text-5xl text-white"><?php the_title();?></h1>
        </div>
    </div>

    <div class="container grid grid-cols-3 gap-32 mx-auto">
        <div class="col-span-2">
        <?php 
            $theParent = wp_get_post_parent_id(get_the_ID());
            if ($theParent) { ?>
            <p><a href="<?php echo get_permalink($theParent);?>">Back to  <?php echo get_the_title($theParent); ?></a></p>
            <?php  }
            ?>
            <h2>Subhead</h2>
            <p><?php the_content();?></p>
        </div>
        <div>
            
            <?php 
            $testArray = get_pages(array(
                'child_of' => get_the_ID()
            ));
            if ($theParent or $testArray) { ?>
            <div class="page-links">
                <h2>
                    <a href="<?php echo get_permalink($theParent)?>"><?php echo get_the_title($theParent)?></a>
                </h2>
                <ul>
                    <?php 
                    if ($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID();
                    }
                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildrenOf
                    ));
                    ?>
                </ul>
            </div>
        <?php } ?>

        </div>
            
    </div>
<?php }
get_footer();
?>