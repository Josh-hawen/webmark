<!DOCTYPE html>
<html>

<?php
	/* Set Variables (Назначаем переменные) */
	$lng = get_bloginfo('language');
	$home_url = get_site_url();
	$theme_dir = get_bloginfo('template_url');;
	$lang_file = ($lng == "ru-RU") ? "ru" : ($lng == "uk-UA" ? "ua" : "en");
?>

<?php
	/* Get variables from language file (достать переменные с файла языков) */
	include( locate_template('lang/'.$lang_file.'.php', false, false) );
?>

<?php
	/* Get meta data - "head" tag (подтягиваем мета-данные - тег "head") */
	include( locate_template('theme-parts/head.php', false, false) );
?>

<body>

<?php
	/* Get code for analytics (достаем код для аналитики) */
	include( locate_template('theme-parts/analytics.php', false, false) );
?>

<?php
	/* Get template of header (добавляем шаблон хеадера) */
	include( locate_template('theme-parts/header.php', false, false) );
?>

<?php
	/* Get main-menu section (берем секцию главного меню) */
	include( locate_template('theme-parts/main_menu.php', false, false) );
?>

<script>
	// add 'active' class to the first list item in main menu
	document.querySelector('.main-menu_box>ul>li').classList.add('active');
</script>

<div class="main">
	<div class="container section">
		<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
		<main class="content_search-page main-container">

			<?php
				/* Get search form (берем форму поиска) */
				include( locate_template('theme-parts/search_form.php', false, false) );
			?>

			<h1 class="search-title">
				<?php echo $search_page_header.': "'.get_search_query().'"'; ?>
			</h1>
			<div class="searchresult">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink();?>"><?php the_title(); ?></a><br>
				<?php endwhile; else: ?>
					<p><?php echo $search_page_no_results; ?></p>
				<?php endif;?>
			</div>

			<!-- Pagination (пагинация) -->
			<div class="pagination">
				<?php
					global $wp_query;
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'type' => 'list',
						'prev_text' => __('«'), 
						'next_text' => __('»'),
						'total' => $wp_query->max_num_pages
					) );
				?>
			</div>
		</main>
	</div>
</div>

<?php
	/* Get footer (ну тут все понятно) */
	include( locate_template('theme-parts/footer.php', false, false) );
?>

<?php
	/* Get widgets (Взять виджеты) */
	include( locate_template('theme-parts/widgets.php', false, false) );
?>

<?php
	/* Need to be before "body" tag closes (дожно быть перед закрытем тега "body") */
	wp_footer();
?>

</body>

</html>