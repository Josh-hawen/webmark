<div class="blog-menu">
	<div class="blog-menu-list">
		<a class="blog-menu-item">Трафик</a>
		<a class="blog-menu-item">Сайт</a>
		<a class="blog-menu-item">Контент</a>
	</div>
	<?php
	echo '<ul class="list_nmbr">';
	$categories = get_categories('orderby=name&order=ASC&taxonomy=category');
	foreach($categories as $category){ 
	echo '<li><a href="' . get_category_link( $category->term_id ) . '">'. $category->name.' <span>'. $category->count .'</span></a></li>';
	} 
	echo '</ul>';
	?>
</div>

