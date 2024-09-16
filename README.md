# post-template
Tutorial on how to create a template for the post just like a page template

### Setp 1. 
Add the following code in your functions.php
function add_custom_post_template_support() {
add_post_type_support('post', 'page-attributes'); // Add support for post templates
}
add_action('init', 'add_custom_post_template_support');

### Setp 2.
Create a new file in your theme directory named `single-custom.php` // The file name is important
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

### Setp 3.
Go to your WordPress dashboard and create a new post and select the template from the right side and select Custom Post Template.

### Setp 4.
Add your css into your theme css or any of you css file as you want.