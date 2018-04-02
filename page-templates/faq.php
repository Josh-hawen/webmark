<?php
/*
Template Name: faq
*/
?>

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




<main class="content">
<div class="container section">
<div class="faq-menu">
	<div class="faq-menu-list">
		<a href="<?php echo $home_url; ?>/faq-traffic" class="faq-menu-item">Трафик</a>
		<a href="<?php echo $home_url; ?>/faq-site" class="faq-menu-item">Сайт</a>
		<a href="<?php echo $home_url; ?>/faq-content" class="faq-menu-item">Контент</a>
	</div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
				<!-- hm -->
			<?php else: ?>
				<!-- if no posts -->
			<?php endif; ?>

			<?php
				/* Get social section (добавляем секцию социальных иконок) */
				include( locate_template('theme-parts/social.php', false, false) );
			?>
</div>
</main>
 


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