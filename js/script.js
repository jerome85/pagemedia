var compteur = 1;

$(document).ready(function() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});

	$('#prev').click(function(){
		compteur = ((compteur==0)?5:compteur-1);

		var moins = ((compteur==0)?5:compteur-1);
		var plus = ((compteur==5)?0:compteur+1);

		$('.clear').toggleClass('clear grayscale');
		$('.grayscale').toggleClass('grayscale grayscale');
		$('#'+compteur).toggleClass('grayscale clear');
		$('.'+(moins)).attr('href', '#');
		$('.'+(plus)).attr('href', '#');
	});

	$('#next').click(function(){
		compteur = ((compteur==5)?0:compteur+1);

		var moins = ((compteur==0)?5:compteur-1);
		var plus = ((compteur==5)?0:compteur+1);

		$('.clear').toggleClass('clear grayscale');
		$('.grayscale').toggleClass('grayscale grayscale');
		$('#'+compteur).toggleClass('grayscale clear');
		$('.'+(moins)).attr('href', '#').removeClass('popup-youtube');
		$('.'+(plus)).attr('href', '#').removeClass('popup-youtube');
	});
});