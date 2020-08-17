<?php get_header(); ?>    


<div class="container">
	<div class="row">
	<h3><?php single_post_title(); ?></h3>
		<div class="col-md-9">
			
			<?php 

				while(have_posts()){ 
							the_post();
					the_post_thumbnail('medium');
					the_content();

					echo "<br/>";
					$id = get_the_id(); // aqui retorna o id certinho do post
					$termos = wp_get_post_terms($id,'genero');
						echo "Generos: ";
						foreach($termos as $termo){
						$link = get_term_link($termo);

							echo"<a href='$link'>" .$termo->name."</a> || ";
						} 

					
				   }
					
				
				
			 ?>
			
		</div>

		
		

		

	</div>
</div>
<?php get_footer(); ?>
