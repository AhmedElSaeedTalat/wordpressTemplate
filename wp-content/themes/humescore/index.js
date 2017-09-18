
( function( $ ) {
	$(document).on("scroll",function(){
						if($(this).scrollTop()>150){
							$("#headerMenu").addClass("fixed-top");
							$("#headerMenu").css("background","white");
							$("#headerMenu").css("height","45px");

							$(".headerRowAdjustment").css("visibility","hidden");
							
							$("#headerMenu").css("padding-bottom","0");

						}
						else{

							$("#headerMenu").removeClass("fixed-top");
							$(".headerRowAdjustment").css("visibility","visible");
							$(".header_logo").css("height","193px");
							$("#headerMenu").css("height","21px");

						}
						
				});})( jQuery );
