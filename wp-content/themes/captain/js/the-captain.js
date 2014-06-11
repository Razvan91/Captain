$(document).ready(function(){

    var height = $(window).height() - 180;
    $("#content,#slider").height(height);
    $('#slider').before('<div class="dots">').cycle({
        fx:     'scrollHorz',
        prev:   '#slider-prev',
        next:   '#slider-next',
        timeout: 0,
        pager:".dots",
        pause:1,

        speed:   1000,
        timeout: 3000

    });

// Positioning intro content
var intro_content_height = ($(window).height()-$(".intro-content").height())/2;
$(".intro-content").css({
	'margin-top': intro_content_height
});


// Intro button action
$(".intro-content a").on("click", function(){
	$("#intro").fadeOut(2000);
});


// Show panels
$("#header .login-button").on("click", function(){
	$("#header .login").slideDown(500);
});

$("#header .cart-button").on("click", function(){
	$("#header .cart").slideDown(500);
});




// Checkout bg height
$(".checkout").css({
	height: $(window).height()-$("#header").height()-$(".footer-content").height()
});




// Slider - Positioning arrows
var arrow_pos = ($(window).height()-($(".slider .arrow").height()/2))/2;
$(".slider .arrow").css({
	top: arrow_pos
});


// Products view
var product_width = $(window).width()-$(".categories").width()-$(".filters").width()-(4*35);

if($(".categories-content .products").hasClass("view-3")){
	$(".categories-content .products").css({
		width: product_width
	});
	$(".categories-content .product").css({
		width: (product_width-(6*35)-20)/3,
		height: $(".categories-content .product *").height()
	});
	$(".categories-content .product img").css({
		width: (product_width-(6*35)-20)/3
	});
}

if($(".categories-content .products").hasClass("view-5")){
	$(".categories-content .products").css({
		width: product_width
	});
	$(".categories-content .product").css({
		width: (product_width-(10*35)-20)/5,
		height: $(".categories-content .product *").height()
	});
	$(".categories-content .product img").css({
		width: (product_width-(10*35)-20)/5
	});
}

if($(".categories-content .products").hasClass("view-7")){
	$(".categories-content .products").css({
		width: product_width
	});
	$(".categories-content .product").css({
		width: (product_width-(14*35)-20)/7,
		height: $(".categories-content .product *").height()
	});
	$(".categories-content .product img").css({
		width: (product_width-(14*35)-20)/7
	});
}


})