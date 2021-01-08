
<?php load_template(TEMPLATEPATH . '/header-3.php'); ?>
<div class="container">
	<div class="blog" >
	  <div class="col-md-9">
		<div class="blog_left single_left">
        <?php if ( have_posts()): ?>
 <ul>
 <?php while ( have_posts() ) : the_post(); ?>
 <li>
 <p>
 <span>日付：<a href="<?php the_permalink(); ?>">
<time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span>
 </p>
 <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
 <a href="<?php the_permalink(); ?>">
 <?php if ( has_post_thumbnail() ) :
 the_post_thumbnail('post-thumbnails');
 else :
 echo '<img src="';
 bloginfo( 'template_url' );
 echo '/images/the_post_thumbnail_default.png" alt="デフォルト画像" />';
 endif; ?>
 </a>
 <p>
 <?php the_excerpt(); ?>
 </p>
 <p>
 <span>カテゴリー：<?php the_category(','); ?></span>
 <span><?php the_tags(); ?></span>
 </p>
 </li>
 <?php endwhile; ?>
 </ul>
 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
 <?php endif; ?>
		</div>
	  </div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>