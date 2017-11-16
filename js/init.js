(function($){
	$(function(){

	    $('.button-collapse').sideNav();
	    $(".dropdown-button").dropdown({belowOrigin: true,});
        $('select').material_select();
        $('.collapsible').collapsible();
        $(".dropdown-content>li>a").css("color", "black");
	})
})(jQuery);

$(document).ready(function(){
    $("table.editable").editableTableWidget;
    $('table.editable').editableTableWidget({editor: $('<textarea>')});
  });