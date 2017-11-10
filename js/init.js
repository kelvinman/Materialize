(function($){
	$(function(){

	    $('.button-collapse').sideNav();
	    $(".dropdown-button").dropdown({belowOrigin: true,});
        $('select').material_select();
        $('.collapsible').collapsible();
        $(".dropdown-content>li>a").css("color", "black");

	})
})(jQuery);