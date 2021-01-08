
<?php
/*
Template Name: page2
*/
?>
<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>
<div class=“container”>
   <div class=“portfolio_main”>
        <p>
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </p>
  </div>
</div>
<?php get_footer(); ?>