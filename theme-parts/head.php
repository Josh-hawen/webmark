<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ПРАВОСЕРВИС</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $home_url; ?>/favicon.ico"/>
	<link rel="icon" href="<?php echo $home_url; ?>/favicon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,hebrew,latin-ext" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
	<script>
		function ready() {
			if (document.getElementsByClassName("current-menu-ancestor")){
				//$(".main-menu li ul li.current-menu-parent").css({"background-color":"#d3d3d5"});
				$(".main-menu li ul li.menu-item").hover( function() {
					$(".main-menu li ul li.menu-item").css("hover");

					}, function(){
						$(".main-menu li ul li.menu-item").removeClass("hover");
					}
				);
				//$(".main-menu li ul li.current-menu-parent>a").css({"color":"rgb(30, 30, 30)"});

			}
		}

		document.addEventListener("DOMContentLoaded", ready);
	</script>
	<script type="text/javascript" src="<?php echo $theme_dir; ?>/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="<?php echo $theme_dir; ?>/js/main.js" defer></script>
	<script type="text/javascript" src="<?php echo $theme_dir; ?>/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>

	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo $theme_dir; ?>/libs/bootstrap-3.3.5/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo $theme_dir; ?>/style.css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo $theme_dir; ?>/libs/html5shiv/es5-shim.min.js"></script>
	<script src="<?php echo $theme_dir; ?>/libs/html5shiv/html5shiv.min.js"></script>
	<script src="<?php echo $theme_dir; ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="<?php echo $theme_dir; ?>/libs/respond/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>

