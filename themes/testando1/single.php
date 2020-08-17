
<?php get_header(); ?>    



<div class="container">
	<div class="row">
		<h3><br><?php single_post_title(); ?></br></h3>
		<div class="col-md-9">
			<p>
			<?php 

				if(have_posts()): the_post();
					the_post_thumbnail('medium');
					the_content();
					
				endif;
			 ?>
			</p>
		</div>

		
		

		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>
<?php get_footer(); ?>
