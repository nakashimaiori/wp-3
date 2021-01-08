
<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>
<div class="container">
	<div class="blog" >
	  <div class="col-md-9">
		  <div class="blog_left single_left">
            <h3>SORRY !</h3>
            <p>Document or file requested was not found...</p>
            <h2 div class="error_color">404</h2>
            <div class="back-to-home">
            <a href="<?php echo home_url(); ?>">Go Back to Home</a>
          </div>
		</div>
	  </div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>

