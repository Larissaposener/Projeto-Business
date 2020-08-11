<?php get_header();  ?>
<!--<?php //get_header('personalizado'); ?>-->
<div class="container"> <!--São eles que permitem rodar múltiplos sistemas isolados dentro de um sistema operacional real(tipo caixote)-->
	<h1><?php single_post_title();  ?></h1> <!--deixa o titulo do conteudo maior-->
	<div class="row"> <!--criar linha-->
		
		<div class="col-md-9"> <!--criar coluna com espaçamento largo-->
			<?php 

				if(have_posts()): the_post();
					the_post_thumbnail('large');//<!--aqui posso modificar o tamanho da imagem ex the_post_thumbmail('large');-->
					the_content();
					//aqui é para a descriçao do filme, genero e nome do diretor
					echo "<br/>";
						$id = get_the_id();
					$termos = wp_get_post_terms($id,'genero');
					echo "Gêneros: ";
					foreach ($termos as $termo) {
						$link = get_term_link($termo);

						echo "<a href ='$link'>".$termo->name. " || ";//para linkar a descriçao . para concatenar

					}

	            endif;
				
			 ?>
		</div>
		

		
	</div>
</div>


<?php get_footer(); ?>
