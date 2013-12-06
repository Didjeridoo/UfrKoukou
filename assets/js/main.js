jQuery(function($){

	var left_col = $("#left-col");
	var main_col = $("#main-col");
	var left_close = $("#left-close-top");
	var left_arrows = left_close.children(0);
	var nav_list = $("#nav>ul");

	nav_list.children().click(function(event){
		if(left_col.width() >= 200){
			var li = $(this);
			if(li.children('div').length > 0){
				event.preventDefault();	
				var ul = $(this).children(':nth-child(2)');

				if(ul.attr("class").indexOf("menu-close") >= 0){		
					nav_list.children().each(function(){
						if($(this).children('div').length > 0){
							$(this).children(':nth-child(2)').css({"position": "absolute"});
							$(this).children(':nth-child(2)').attr("class", "menu-bloc menu-close");
						}
					});		
					ul.css({"position": "relative"});
					ul.attr("class", "menu-bloc menu-open");
				}else{
					ul.css({"position": "absolute"});
					ul.attr("class", "menu-bloc menu-close");
				}						
			}
		}
	});	

	nav_list.children().hover(function(event){
		if(left_col.width() <= 40){
			$(this).css({width: "200px"});
			$(this).children(':nth-child(2)').css({left: "41px", width: "159px"});									
		}
	}, function(event){
		if(left_col.width() <= 40){
			$(this).children(':nth-child(2)').css({left: "-200px", width: "200px"});
			$(this).css({width: "100%"});
		}
	});

	function open_left(){
  		left_col.animate({width: "200px"}, 500);
  		main_col.animate({marginLeft: "200px"}, 500);

		nav_list.children().each(function(){
			if($(this).children('div').length > 0){
				var ul = $(this).children(':nth-child(2)');
				ul.css({"left": "0px", "position": "absolute"});
				ul.attr("class", "menu-bloc menu-close");					
			}
		});				
	}

	function close_left(){
  		left_col.animate({width: "40px"}, 500);
  		main_col.animate({marginLeft: "40px"}, 500);

		nav_list.children().each(function(){
			if($(this).children('div').length > 0){
				var ul = $(this).children(':nth-child(2)');
				ul.css({"left": "-200px", "position": "absolute"});
				ul.attr("class", "menu-bloc menu-close");					
			}
		});				
	}	

	if($.cookie('leftCol') == "open"){
		left_col.css({width: "200px"});
		main_col.css({marginLeft: "200px"});
		open_left();
		left_arrows.attr("class", "arrows-left");
	}	

	left_close.click(function(event) {
   		event.preventDefault(); 
   		
   		if(left_arrows.attr("class") == "arrows-right"){
   			left_arrows.attr("class", "arrows-left");
			open_left();
			$.cookie('leftCol', 'open', { expires: 365, path: '/'});
   		}else{	    			
   			left_arrows.attr("class", "arrows-right");
   			close_left();
   			$.cookie('leftCol', 'close', { expires: 365, path: '/'});
   		}
	});

	/* DROPDOWN */
	$('.btn-dropdown').click(function(event){
		event.preventDefault();

		var div = $(this).parent().children("div");

		if(div.is(":hidden")){
			div.show();
		}else{
			div.hide();
		}
	});

	$(".dropdown").on("mouseleave", function(){
		var div = $(this).children("div");
		div.hide();
	});

	$(document).ready(
		$('.dandelion').each(function(i){

			var tpl = $('<div id="d'+i+'"></div>');
			for(j = 0; j < 12; j++){
				tpl.append('<div id="loupe-'+i+'-'+j+'" class="loupe"></div>');
			}
			tpl.append('<div id="tige-'+i+'" class="tige"></div>');
		})
		/*
		$('.dandelion-mini').each(function(i){

			var tpl = $('<div id="d'+i+'"></div>');
			for(j = 0; j < 12; j++){
				tpl.append('<div id="loupe-'+i+'-'+j+'" class="loupe"></div>');
			}
			tpl.append('<div id="tige-'+i+'" class="tige"></div>');
		});
*/
	);

});