
( function( $ ) {
	$(document).ready(function(){
		$("#headerMenu").scrollToFixed();				
				});

$(document).on("scroll",function(){
	if($(this).scrollTop()>100){
		$(".arrow-UP").addClass("animateArow");
		$(".arrow-UP").removeClass("animateArow1");

	}
	else{
		$(".arrow-UP").removeClass("animateArow");
		$(".arrow-UP").addClass("animateArow1");
	}
});
	$(".arrow-UP").click(function(){
	// $("html,body").animate({"scrollTop":"0%"},1000);
	console.log("good");
});
$(document).ready(function(){
	$("#xx").click(function(){
	$("html,body").animate({"scrollTop":"0%"},1000);
});
});
	$(document).ready(function(){
		var position = $(".site-footer").position().top;
		$(document).on("scroll",function(){
			if($(document).scrollTop() >= position - 200 ){
				$(".all").hide();
			}
			else{
				$(".all").show();
			}
		})
	});
		$(document).ready(function(){
		var position = $(".site-footer").position().top;
		$(document).on("scroll",function(){
			if($(document).scrollTop() >= position - 200 ){
				$(".all1").hide();
			}
			else{
				$(".all1").show();
			}
		})
	});
	$(document).ready(function(){
		$(".searchIcon").click(function(){
			$("#search_section").fadeIn();
		});
		$(".cls").click(function(){
			$("#search_section").fadeOut();
		});
	});

	$(document).ready(function(){
		$(".menuMobile  .menu-item-has-children a ").wrap("<span class='firstLvl'></span>");
		$(".menuMobile   .menu-item-has-children .sub-menu a ").unwrap("<span class='firstLvl'></span>");

		$(".menuMobile .menu-item .sub-menu   .menu-item-has-children a").wrap("<div class='secondLvl'></div>");
		$(".menuMobile .menu-item .sub-menu   .menu-item-has-children .menu-item a").unwrap("<div class='secondLvl'></div>");


	});

	$(document).ready(function(){

		$(".menuMobile .menu-item ").click(function(){

			$(this).children('ul').slideToggle();

});
	});
	$(document).ready(function(){
		$(".menuSmall .icon").first().click(function(){
			$(".menuMobile").toggle("slide");

		});	
	
	});
$(document).ready(function(){
		$(".cls1").click(function(){
			$(".menuMobile").toggle("slide");
			
		});	
	
	});
$(document).ready(function(){
		$(".menuSmall :nth(2)").click(function(){
			$(".smallMenuSocialWrapper").toggle();
			// alert("sara");
		});	
	
	});
})( jQuery );
