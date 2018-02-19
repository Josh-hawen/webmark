$(document).ready(function() {

//
if ($('.lang').length > 0) {
	$('.lang').on('click', function(event){
		var el = $(this);
		if (!el.hasClass('active')) {
			el.addClass('active');
			hideElem(el)
		} else {
			el.removeClass('active');
		}
	});
};

function hideElem(item) {
    $(document).mouseup(function(e) {
        if (item.has(e.target).length === 0) {
            item.removeClass('active');
        }
    });
}


var current_page = $('h1').html();

// Для мобильной версии действия при клике на одну из иконок меню
$('.mobile-list-item').on('click', function (e) {
	var related = $(this).attr('data-related-item');
	addActiveClass(related, $(this));
});

var lastItem;
var lastMenuItem;

function addActiveClass(newItem, newMenuItem) {

	newItem = $('.mobile-list-item+.' + newItem);

	// Если нажали еще раз на эту же кнопку
	if (newItem.hasClass('active')) {
		newItem.toggleClass('active');
		newMenuItem.toggleClass('active');
		return;
	};

	// При переключении на другой пункт меню
	if (lastItem) {
		lastItem.removeClass('active');
		lastMenuItem.removeClass('active');
	};

	lastItem = newItem;
	lastMenuItem = newMenuItem;
	lastItem.addClass('active');
	lastMenuItem.addClass('active');

};

/* Slider on mobile version */
var menuControls =
"<div id='menu-controls'>"+
	"<div class='prev'></div>"+
	"<div class='next'></div>"+
"</div>";

var selectMenu =
	$('.main-menu>.current-menu-item>ul').length ?
	$('.main-menu>.current-menu-item>ul') :
	$('.main-menu>.current-menu-ancestor>ul');
if (selectMenu.length) {
	selectMenu.parent().append(menuControls);
} else {
}
var menuItems = selectMenu.children();

if (!menuItems.hasClass('current-menu-item') && !menuItems.hasClass('current-menu-ancestor')) {

	$('.main-menu>li.current-menu-item>ul>li:first-child').addClass('current-menu-item');
	$('.main-menu>li.current-menu-ancestor>ul>li:first-child').addClass('current-menu-item');
} else {
}


/* Slider */
var visibleMenuItem =
	selectMenu.children(".current-menu-item").length ?
	selectMenu.children(".current-menu-item") :
	selectMenu.children(".current-menu-ancestor");
if (visibleMenuItem.length) {
	$('.menu-dots li').eq(visibleMenuItem.index()).addClass('active');

} else {
}
$('#menu-controls .next').on("click", function (e) {
	var currentItem = visibleMenuItem;

	var nextItem = visibleMenuItem.next().length ? visibleMenuItem.next(): $(visibleMenuItem.parent().children()[0]);
	nextItem.show().children('ul').hide();
	currentItem.children('a').animate({left:'-100%'}, 400, function showNextMenuItem () {
		currentItem.removeClass("current-menu-item current-menu-ancestor active");
		visibleMenuItem = nextItem;
		// nextItem.addClass("active");
	});
	nextItem.addClass('current-menu-item').children('a').css({'left':'100%'}).animate({left:'0'}, 400);
	currentItem.children('ul').animate({opacity:'0'}, 400, function showNextMenu () {
		currentItem.hide();
		currentItem.children('ul').css({opacity:'1'});
		nextItem.children('ul').fadeIn(400);
	});
	// var indexOfCurrentElement = nextItem.index();
	$('.menu-dots li').siblings().removeClass('active');
	$('.menu-dots li').eq(nextItem.index()).addClass('active');
})

$('#menu-controls .prev').on("click", function (e) {
	var currentItem = visibleMenuItem;

	var prevItem = visibleMenuItem.prev().length ? visibleMenuItem.prev() : $(visibleMenuItem.parent().children()[menuItems.length-1]);
	prevItem.show().children('ul').hide();
	currentItem.children('a').animate({left:'100%'}, 400, function showprevMenuItem () {
		currentItem.removeClass("current-menu-item current-menu-ancestor active");
		visibleMenuItem = prevItem;
		// prevItem.addClass("active");
	});
	prevItem.addClass('current-menu-item').children('a').css({'left':'-100%'}).animate({left:'0'}, 400)
	currentItem.children('ul').animate({opacity:'0'}, 400, function showprevMenu () {
		currentItem.hide();
		currentItem.children('ul').css({opacity:'1'});
		prevItem.children('ul').fadeIn(200);
	});
	$('.menu-dots li').siblings().removeClass('active');
	$('.menu-dots li').eq(prevItem.index()).addClass('active');
})

$('a[href="http://empty"]').on('click', function (e) {e.preventDefault()})



// Main Menu

"use strict";

// $('.main-menu>li:first-child').addClass('current-menu-item');
var menu = $('.main-menu>li.current-menu-item>.sub-menu').length ?
	$('.main-menu>li.current-menu-item>.sub-menu') :
	$('.main-menu>li.current-menu-ancestor>.sub-menu');
console.log(menu);

// menu = menu.wrap('<div id="menu_wrapper" style="position:relative">');


var step = 285,
	next_desktop,
	prev_desktop;

var activeItem = $('.main-menu>li.current-menu-ancestor>.sub-menu>li.current-menu-item').length ?
	$('.main-menu>li.current-menu-ancestor>.sub-menu>li.current-menu-item') :
	$('.main-menu>li.current-menu-ancestor>.sub-menu>li.current-menu-ancestor');
console.log (activeItem.index());
if ($(window).width() >= 1129) {
	addMenuControls(menu);
	if (activeItem.index() > 4) {
		menu.scrollLeft(step*(activeItem.index()-4));
	}
}

function addMenuControls (menu) {

	menu.css({
		'marginLeft': 0,
		'marginRight': 0,
	});
	$('<div id="next_desktop">').appendTo(menu.parent());
	$('<div id="prev_desktop">').prependTo(menu.parent());
	next_desktop = $('#next_desktop');
	prev_desktop = $('#prev_desktop');

}


next_desktop.on('click', function () {
	var self = this;
	$(self).addClass('active');
	if ($(menu).is(':animated')) return;
	menu.stop().animate({scrollLeft: menu.scrollLeft()+step}, 300, function () {
		$(self).removeClass('active');
	});
});


prev_desktop.on('click', function () {
	var self = this;
	$(self).addClass('active');
	if ($(menu).is(':animated')) return;
	menu.stop().animate({scrollLeft: menu.scrollLeft()-step}, 300, function () {
		$(self).removeClass('active')
	});
});



//Изменения стрелки направления при выборе языка
});