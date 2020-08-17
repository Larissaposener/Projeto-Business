<h3>Pesquise:</h3>
<form class="form-inline md-form mr-auto mb-4" action="<?php echo home_url('/'); ?>" method="get">
	<div class="form-group">
					  <input type="search" class="form-control mr-sm-2" name="s" value="<?php echo get_search_query(); ?>"> 
	</div>
	<div class="form-group">
					  <button class="btn btn-elegant btn-rounded btn-sm my-0" type="submit">Ir</button>
	</div>
</form>

