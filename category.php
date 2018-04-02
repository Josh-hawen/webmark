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




<div class="main">
	<div class="container section">
	<?php
	/* Get main-menu section (берем секцию главного меню) */
	include( locate_template('theme-parts/blog_menu.php', false, false) );
?>
	<p style="font-size: 30px; color: #000; text-align: center; max-width: 1200px; margin: 5px auto">
	<?php echo single_cat_title().(($lng == "ru-RU") ? " (Блог)" : ($lng == "uk-UA" ? " (Блог)" : " (Blog)")); ?>
</p>

		<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
		<main class="main-container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php #echo get_posts( array('category_name' => single_cat_title()) ); ?>
				<ul>
					<?php
						global $post;
						$args = array( 'posts_per_page' => 2, 'category' => get_cat_ID( single_cat_title('', 0) ) );
						$myposts = get_posts( $args );
							?>
						<div class="post-preview">
							<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
							<?php the_excerpt(); ?>
							<div class="post-time"><?php the_time('j F Y в H:i'); ?></div>
						</div>
				</ul>
				<?php #the_content(); ?>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
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