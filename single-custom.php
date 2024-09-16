<?php
/**
* Template Name: Custom Post Template
* Template Post Type: post
*/
get_header();
?>

<!-- Your Custom Post Template Content Here -->
<div class="custom-post-content">
<h4>The test page via template</h4>
<!-- Start the loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>
<?php endwhile; endif; ?>
<!-- End the loop -->
</div>

<?php get_footer(); ?>