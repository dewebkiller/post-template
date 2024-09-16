<?php
function add_custom_post_template_support() {
  add_post_type_support('post', 'page-attributes'); // Add support for post templates
  }
  add_action('init', 'add_custom_post_template_support');