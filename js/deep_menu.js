$(document).ready(function() {
/* For page with deep menu level need to add side menu after "h1" tag (Для страниц с глубоким меню добавить боковое меню после тега "h1") */
	$(".main-menu>li>ul>li>ul>li.current_page_item>ul").wrap('<div class="deep_menu"></div>');
	$(".main-menu>li>ul>li>ul>li.current-menu-ancestor>ul").wrap('<div class="deep_menu"></div>');
	$("h1").after($('.deep_menu'));
});