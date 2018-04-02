<div class="search-form">
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
		<input
			type="text"
			value="<?php echo get_search_query() ?>"
			name="s"
			placeholder="<?php echo $search_placeholder; ?>"
			class="searchinput"
		/>
		<input type="submit" id="searchsubmit" value="" class="searchsubmit" />
	</form>
</div>