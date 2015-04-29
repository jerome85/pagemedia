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
		var ancien = compteur;
		compteur = ((compteur==0)?5:compteur-1);

		var moins = ((compteur==0)?5:compteur-1);
		var plus = ((compteur==5)?0:compteur+1);

		$('.clear').toggleClass('clear grayscale');
		$('.grayscale').toggleClass('grayscale grayscale');
		$('#'+compteur).toggleClass('grayscale clear');
		$('.'+(moins)).attr('href', '#');
		$('.'+(plus)).attr('href', '#');

		ancien = ((ancien > 2 )?ancien-3:ancien);
		var compteurtemp = ((compteur > 2 )?compteur-3:compteur);

		$('#li'+ancien).hide();
		$('#li'+compteurtemp).show();
	});

	$('#next').click(function(){
		var ancien = compteur;
		compteur = ((compteur==5)?0:compteur+1);

		var moins = ((compteur==0)?5:compteur-1);
		var plus = ((compteur==5)?0:compteur+1);

		$('.clear').toggleClass('clear grayscale');
		$('.grayscale').toggleClass('grayscale grayscale');
		$('#'+compteur).toggleClass('grayscale clear');
		$('.'+(moins)).attr('href', '#').removeClass('popup-youtube');
		$('.'+(plus)).attr('href', '#').removeClass('popup-youtube');

		ancien = ((ancien > 2 )?ancien-3:ancien);
		var compteurtemp = ((compteur > 2 )?compteur-3:compteur);

		$('#li'+ancien).hide();
		$('#li'+compteurtemp).show();
	});
});