
<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>
<div class="container">
	<div class="blog" >
	  <div class="col-md-9">
		<div class="blog_left single_left">
          <?php while(have_posts()): the_post(); ?>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <h4><span>Posted：<a href="<?php the_permalink(); ?>">
            <time datetime="<?php the_time('y-m-d'); ?>"></time>
            <?php the_time( get_option('date_format') ); ?></a></span>
            </h4>
            <?php the_content(); ?>
            <?php endwhile; ?>
		</div>
	  </div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>