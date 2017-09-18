
( function( $ ) {
	$(document).on("scroll",function(){
						if($(this).scrollTop()>100){
							$(".header_logo").addClass("fixed-top");
							$(".headerRowAdjustment").hide();
							$(".header_logo").css("min-height","60px");
							$("#infoHeader").css("min-height","60px");
							$("#infoHeader").css({"display": "flex",
    						"justify-content": "center",
    						"align-items": "center"});
							$("#headerMenu").css("padding-bottom","0");

						}
						else{
							$(".header_logo").removeClass("fixed-top");
							$(".headerRowAdjustment").show();
							$(".header_logo").css("min-height","160px");
							$("#infoHeader").css("min-height","160px");
							$("#infoHeader").css({"display": "block"});
							$("#headerMenu").css("padding-bottom","12px");

						}
						
				});})( jQuery );
