
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
		$(".searchIcon").click(function(){
			$("#search_section").fadeIn();
		});
		$(".cls").click(function(){
			$("#search_section").fadeOut();
		});
	});
	$(document).ready(function(){
		$(".menu-item-32").click(function(){
			$(".menuMobile .menu-item-32 .sub-menu").slideToggle();
		});
	});
})( jQuery );
