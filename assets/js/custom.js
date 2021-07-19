(function($) {

	'use strict';
  jQuery(document).on('ready', function () {
    $('#blkFixed').theiaStickySidebar();
    $('#blkFixed0').theiaStickySidebar();
  });
	// Mean Menu JS
	jQuery('.mean-menu').meanmenu({ 
		meanScreenWidth: "991"
	});

	// Nice Select JS
	// $('select').niceSelect();
	
	// Header Sticky, Go To Top JS JS
	$(window).on('scroll', function() {
		// Header Sticky JS
		if ($(this).scrollTop() >150){  
			$('.navbar-area').addClass("is-sticky");
		}
		else{
			$('.navbar-area').removeClass("is-sticky");
		};

		// Go To Top JS
		var scrolled = $(window).scrollTop();
		if (scrolled > 300) $('.go-top').addClass('active');
		if (scrolled < 300) $('.go-top').removeClass('active');
	});
	// Testimonials Slider JS
	$('.testimonials-slider').owlCarousel({
		items:1,
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		autoplay: false,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='flaticon-left-arrow'></i>",
			"<i class='flaticon-right-arrow'></i>",
		],
	});

	//  Hero Slider JS
	$('.hero-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		mouseDrag: true,
		autoHeight: true,
		autoplay: true,
		smartSpeed: 800,
		autoplayHoverPause: true,
		animateOut: "fadeOut",
		navText: [
			"<i class='bx bx-chevrons-left'></i>",
			"<i class='bx bx-chevrons-right'></i>",
		],
	});

	//  Hero Slider Two JS
	$('.hero-slider-three').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		nav: false,
		dots: true,
		mouseDrag: true,
		autoHeight: true,
		autoplay: false,
		smartSpeed: 800,
		autoplayHoverPause: true,
		animateOut: "fadeOut",
		navText: [
			"<i class='bx bx-chevrons-left'></i>",
			"<i class='bx bx-chevrons-right'></i>",
		],
	});

	// Causes Slider JS
	$('.causes-slider').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='flaticon-left-arrow'></i>",
			"<i class='flaticon-right-arrow'></i>",
		],
		responsive:{
			0: {
				items: 1,
			},
			414: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			1200: {
				items: 3,
			},
			1700: {
				items: 4,
			}
		}
	});

	// Partner Slider JS
	$('.partner-slider').owlCarousel({
		loop: false,
		center: true,
		margin: 0,
		item: 2,
		nav: false,
		dots: false,
		autoplay: false,
		smartSpeed: 1000,
		autoplayHoverPause: false,
		responsive:{
			0: {
				items: 1,
			},
			414: {
				items: 2,
			},
			576: {
				items: 3,
			},
			768: {
				items: 3,
			},
			1200: {
				items: 7,
			},
			1700: {
				items: 7,
			}
		}
	});

	// Projects Slider JS
	$('.projects-slider').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<i class='flaticon-left-arrow'></i>",
			"<i class='flaticon-right-arrow'></i>",
		],
		responsive:{
			0: {
				items: 1,
			},
			414: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			1200: {
				items: 3,
			},
			1700: {
				items: 4,
			}
		}
	});

	// Testimonials Slider Two JS
	$('.testimonials-slider-two').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		dots: false,
		autoplay: false,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		center: true,
		navText: [
			"<i class='flaticon-left-arrow'></i>",
			"<i class='flaticon-right-arrow'></i>",
		],
		responsive:{
			0: {
				items: 1,
			},
			414: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			1200: {
				items: 3,
			}
		}
	});

	// Click Event JS
	$('.go-top').on('click', function() {
		$("html, body").animate({ scrollTop: "0" },  1800);
	});

	// FAQ Accordion JS
	$('.accordion').find('.accordion-title').on('click', function(){
		// Adds Active Class
		$(this).toggleClass('active');
		// Expand or Collapse This Panel
		$(this).next().slideToggle('fast');
		// Hide The Other Panels
		$('.accordion-content').not($(this).next()).slideUp('fast');
		// Removes Active Class From Other Titles
		$('.accordion-title').not($(this)).removeClass('active');		
	});

	// Count Time JS
	function makeTimer() {
		var endTime = new Date("november  30, 2020 17:00:00 PDT");			
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }
		$("#days").html(days + "<span>Days</span>");
		$("#hours").html(hours + "<span>Hours</span>");
		$("#minutes").html(minutes + "<span>Minutes</span>");
		$("#seconds").html(seconds + "<span>Seconds</span>");
	}
	setInterval(function() { makeTimer(); }, 300);

	// Preloader
	jQuery(window).on('load', function() {
		$('.preloader').addClass('preloader-deactivate');
	})

	// Subscribe form JS
	$(".newsletter-form").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
		// handle the invalid form...
			formErrorSub();
			submitMSGSub(false, "Entrez votre adresse email correctement.");
		} else {
			// everything looks good!
			event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === "success") {
			formSuccessSub();
		}
		else {
			formErrorSub();
		}
	}
	function formSuccessSub(){
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "Merci de souscrire!");
		setTimeout(function() {
			$("#validator-newsletter").addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$(".newsletter-form").addClass("animated shake");
		setTimeout(function() {
			$(".newsletter-form").removeClass("animated shake");
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
			var msgClasses = "validation-success";
		} else {
			var msgClasses = "validation-danger";
		}
		$("#validator-newsletter, #validator-newsletter-2").removeClass().addClass(msgClasses).text(msg);
	}
	
	// AJAX MailChimp JS
	// $(".newsletter-form").ajaxChimp({
	// 	url: "https://Envy Theme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
	// 	callback: callbackFunction
	// });

	// Odometer JS
	$('.odometer').appear(function(e) {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});

	// Others Option For Responsive JS
	$(".others-option-for-responsive .dot-menu").on("click", function(){
		$(".others-option-for-responsive .container .container").toggleClass("active");
	});

	// WOW JS
	if($('.wow').length){
		var wow = new WOW({
			mobile: false
		});
		wow.init();
	}

	// Popup Video JS
	$('.popup-youtube, .popup-vimeo').magnificPopup({
		disableOn: 300,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false,
	});

	// Sidebar Modal JS
	$(".burger-menu").on('click',  function() {
		$('.sidebar-modal').toggleClass('active');
	});
	$(".sidebar-modal-close-btn").on('click',  function() {
		$('.sidebar-modal').removeClass('active');
	});

	// Search Popup JS
	$('.close-btn').on('click', function() {
		$('.search-overlay').fadeOut();
		$('.search-btn').show();
		$('.close-btn').removeClass('active');
	});
	$('.search-btn').on('click', function() {
		$(this).hide();
		$('.search-overlay').fadeIn();
		$('.close-btn').addClass('active');
	});

		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		$('.tab ul.tabs li a').on('click', function (g) {
			var tab = $(this).closest('.tab'), 
			index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});
		// function g() { e(".recent_product_carosel").length && e(".recent_product_carosel").owlCarousel({ loop: !1, margin: 0, nav: !1, dots: !0, responsive: { 0: { items: 1 }, 700: { items: 2 }, 992: { items: 3 }, 1200: { items: 4 } } }) }

		$('.recent_product_carosel').owlCarousel({
		loop: false,
		margin: 10,
		nav: false,
		dots: true,
		// autoplay: false,
		// smartSpeed: 1000,
		// autoplayHoverPause: true,
		// center: true,
		// navText: [
		// 	"<i class='flaticon-left-arrow'></i>",
		// 	"<i class='flaticon-right-arrow'></i>",
		// ],
		responsive: { 
			0: { items: 1 }, 
			700: { items: 2 }, 
			992: { items: 3 }, 
			1200: { items: 6 } 
		}
	});
	//skill JS
	jQuery('.skill-bar').each(function() {
		jQuery(this).find('.progress-content').animate({
		width:jQuery(this).attr('data-percentage')
		},2000);
		
		jQuery(this).find('.progress-number-mark').animate(
		{zoomIn:jQuery(this).attr('data-percentage')},
		{
			duration: 2000,
			step: function(now, fx) {
			var data = Math.round(now);
			jQuery(this).find('.percent').html(data + '%');
			}
		});  
	});



})(jQuery);



$(document).ready(function () {

	var navListItems = $('div.setup-panel div a'),
		allWells = $('.setup-content'),
		allNextBtn = $('.nextBtn');

	allWells.hide();

	navListItems.click(function (e) {
		e.preventDefault();
		var $target = $($(this).attr('href')),
			$item = $(this);

		if (!$item.hasClass('disabled')) {
			navListItems.removeClass('btn-success').addClass('btn-default');
			$item.addClass('btn-success');
			allWells.hide();
			$target.show();
			$target.find('input:eq(0)').focus();
		}
	});

	allNextBtn.click(function () {
		var curStep = $(this).closest(".setup-content"),
			curStepBtn = curStep.attr("id"),
			nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
			curInputs = curStep.find("input[type='text'],input[type='url']"),
			isValid = true;

		$(".form-group").removeClass("has-error");
		for (var i = 0; i < curInputs.length; i++) {
			if (!curInputs[i].validity.valid) {
				isValid = false;
				$(curInputs[i]).closest(".form-group").addClass("has-error");
			}
		}

		if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
	});

	$('div.setup-panel div a.btn-success').trigger('click');
});
