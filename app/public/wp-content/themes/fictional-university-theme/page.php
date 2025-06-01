<?php
get_header();

while(have_posts()) {
    the_post(); ?>
    <h1>This is a page, not a post.</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php if (wp_get_post_parent_id(get_the_ID())) {
        echo "I am a child page.";
    } ?>
    <?php }


get_footer();
?>