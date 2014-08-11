<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" name="frm">
	
	<input type="submit" class="search-submit" value="" onclick="return valida_form()" />
	<label>
		<!--span class="screen-reader-text">Search for:</span-->
		<input id="search_input" type="search" class="search-field" placeholder="Buscar" value="" name="s" title="Busca dentro de nuestros articulos" />
	</label>
</form>