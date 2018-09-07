
<?php get_header(); ?>


<!-- Add your site or app content here -->
  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
 
<?php get_footer(); ?>