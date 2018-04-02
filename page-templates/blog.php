<?php
/*
Template Name: Blog
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
<?php
	/* Get main-menu section (берем секцию главного меню) */
	include( locate_template('theme-parts/blog_menu.php', false, false) );
?>
    <article>
 
        <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<div class="post-preview">
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
			<?php the_excerpt(); ?>
			<div class="post-time"><?php the_time('j F Y в H:i'); ?></div>
</div>
        
 
        <?php endwhile; ?>
 
        <?php if ($paged > 1) { ?>
 
        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
        </nav>
 
        <?php } else { ?>
 
        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        </nav>
 
        <?php } ?>
 
		<?php wp_reset_postdata(); ?>
 
	</article>
 </main>
 
 <?php
				/* Get social section (добавляем секцию социальных иконок) */
				include( locate_template('theme-parts/social.php', false, false) );
			?>

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