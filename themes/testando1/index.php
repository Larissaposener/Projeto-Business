
<?php get_header(); ?>    

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php 
				if(have_posts()):
					echo '<ul class="media-list">';
						while (have_posts()): the_post();
							$image = '';
							if(has_post_thumbnail()){
								$image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',get_the_permalink(),  get_the_post_thumbnail()); 

							}
							
							$body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>', get_the_permalink(), get_the_title(), get_the_content('Saiba Mais...'));


							printf('<li class="media">%s%s</li>',$image, $body);
						
							 
						endwhile;
					echo "</ul>";
	            else:
	            	echo "<p>nao temos posts. </p>";
	            
	            endif;
				
			 ?>
		</div>

		
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

		

	</div>
</div>
<?php get_footer(); ?>