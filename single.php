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
		<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
		<main class="main-container">

				<div class="main-heading">
					<h1><?php the_title(); ?></h1>
					</div>
					<section>
					<?php while (have_posts()): the_post();?>
					<?php the_post_thumbnail() ?>
					<?php the_content();?>
					<?php endwhile; ?>
					<div class="post-time"><?php the_time('j F Y в H:i'); ?></div>
		</section>
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
