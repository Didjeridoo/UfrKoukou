(function($){
	$('.dandelion').each(function(i){
		var tpl = $('<div id="d'+i+'"></div>');
		for(j = 0; j < 9; j++){
			tpl.append('<div id="loupe-'+j+'" class="loupe loupe-'+j+'"></div>');
		}
		tpl.append('<div id="tige-'+i+'" class="tige"></div>');
		$(this).append(tpl);
	})

	$('.dandelion-mini').each(function(i){
		var tpl = $('<div id="d'+i+'"></div>');
		for(j = 0; j < 9; j++){
			tpl.append('<div id="loupe-'+j+'" class="loupe"></div>');
		}
		tpl.append('<div id="tige-'+i+'" class="tige"></div>');
	})

	var logo = $('#logo');
	var logo_dandelion = logo.find('.dandelion');
	var tl = new TimelineMax({repeat:-1, yoyo:true});
	var tl2 = new TimelineMax({repeat:-1});
	//tl.pause();
	//tl2.pause();

	tl.to(logo_dandelion.find('.loupe-0'), 0.5, {rotation: '+=15'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-1'), 0.3, {rotation: '+=20'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-2'), 0.4, {rotation: '+=17'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-3'), 0.5, {rotation: '+=13'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-4'), 0.8, {rotation: '+=9'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-5'), 0.6, {rotation: '-=16'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-6'), 0.8, {rotation: '-=18'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-7'), 0.2, {rotation: '-=13'}, '#debut');
	tl.to(logo_dandelion.find('.loupe-8'), 0.5, {rotation: '+=20'}, '#debut');
	tl2.to(logo_dandelion.find('#loupe-4'), 0.7, {marginLeft: 30, autoAlpha: 0}, '#debut');
	tl2.to(logo_dandelion.find('#loupe-5'), 1, {marginLeft: 24, autoAlpha: 0}, '#debut+=0.5');
	tl2.to(logo_dandelion.find('#loupe-8'), 0.9, {marginLeft: 22, autoAlpha: 0}, '#debut+=1.1');
	tl2.to(logo_dandelion.find('#loupe-4'), 0, {marginLeft: 0}, '#debut');
	tl2.to(logo_dandelion.find('#loupe-5'), 0, {marginLeft: 0}, '#debut');
	tl2.to(logo_dandelion.find('#loupe-8'), 0, {marginLeft: 0}, '#debut');

	/*
	logo.mouseover(function(e){
		tl.play();
	})

	logo.mouseout(function(e){
		tl.reverse();
	})
	*/

})(jQuery);