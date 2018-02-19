<header class="header-bar">
	<div class="container">
		<div class="top-header-menu col-md-12">
			
			<nav class="col-md-12 navbar navbar-default">
				<div class="container-fluid" id="menu-bar">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
							'theme_location' => 'top-menu', // идентификатор меню, определен в register_nav_menus() в functions.php
							'container'=> false, // обертка списка, тут не нужна
					  		'menu_id' => 'top-nav-ul', // id для ul
					  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
							'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
					  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
				  			);
							wp_nav_menu($args); // выводим верхнее меню
						?>
					</div>
					<div class="menu-overlay" id="menu-overlay"></div>
				</div>
			</nav>
			
		
		<div class="header-main col-md-12">
<!--
			<div class="col-md-2 header_lang">
				<?php dynamic_sidebar( 'lang' ); ?>
			</div>
-->
	    	
			<div class="webmark-groupe">
		    	<div class="header-logo">
					<a href="<?php echo $home_url; ?>">
						<img src="<?php echo $theme_dir; ?>/img/logo/logo.png" alt="" class="header-brand">
					</a>
				</div>
				<div class="company-name-header">
					<p><?php echo $site_desc ?></p>
					<h2><a href="<?php echo $home_url; ?>">WEB<span>MARK</span></a></h2>
					<div class="hr"></div>
					<span class="slogan"><?php echo $slogan ?></span>
				</div>
				<div class="toggle-menu" id="menu-open">
					<span><i class="fas fa-3x fa-bars" id="hamburger"></i></span>
				</div>
			</div>
			
			<div class="col-md-4 location">
			    <img src="http://www.webmark.agency/wp-content/uploads/2018/02/map-trigger.png" alt="map" id="map-little">
				<p>г. Киев, <br> ул. Б. Васильковская, д. 43/16</p>
				<p>3 минуты от м. Льва Толстого</p>
				<p class="map-big"><span id="map-open" class="map_info_text">Схема проезда</span>
				<span class="map-open" id="map-open-in">
					<span class="map-close" id="map-close"><i class="far fa-3x fa-times-circle"></i></span>
				</span>
				<span class="overlay" id="overlay"></span>
				</p>
			</div>
			
			
			<!-- <div class="col-md-3">
				<div class="col-md-12 info-work">
					<p><?php echo $call_us_word; ?></p>
					<p><?php echo $time_to_work; ?></p>
					<p><?php echo $working_time; ?></p>
				</div>
			</div> -->
			<div class="contact">
				<div class="header_email">
					<div class="mobile-list-item" data-related-item="email">
						<a class="email analytics-email">Обратный звонок</a>
					</div>
				</div>
				<div class="col-md-3 contact-header">
					<div class="contact-phones">
						<div class="phones-wrapper">
							<div class="mobile-list-item item-phone" data-related-item="operators-wrapper">
								<span><?php echo $mobile_phones; ?></span>
							</div>

								<div class="col-md-12 operators-wrapper">
									<p class="kyivstar-top"><a href="tel:+380678013311" id="kyivstar">+38 (067) 801-33-11</a></p>
									<p class="mobile-time"><?php echo $mobile_phones_text; ?></p>
									<p class="callme"><a href="#" class="tl-call-catcher">Заказать обратный звонок</a></p>
									<p class="email" href="mailto:info@webmark.agency">info@webmark.agency</p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		</div>
	</div>
</header>