$(document).ready(function() {
	$(".toggle,.show-div").hover(function () {
				    $(this).find(".show-div").animate({
				        opacity: "1"
				    }, {
				        queue: false
				    });

				    $(this).find(".show-img").animate({
				        opacity: "0"
				    }, {
				        queue: false
				    });

				}, function () {
				    $(this).find(".show-div").animate({
				        opacity: "0"
				    }, {
				        queue: false
				    });

				    $(this).find(".show-img").animate({
				        opacity: "1"
				    }, {
				        queue: false
				    });
				
				});
});
