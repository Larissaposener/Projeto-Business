
<?php get_header(); ?>    



<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h3><?php single_post_title(); ?></h3>
			<?php 
				if(have_posts()): the_post();
					the_content();
					
				endif;
			 ?>
		</div>

		
		

		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>
<?php get_footer(); ?>