
$(document).ready(function(){
    
    var  getMenuHeight = $("div#menubar").height();
	//console.log(getMenuHeight);
    $(".frame").css("padding-top", getMenuHeight);

    var  getFooterHeight = $("footer").height();
	//console.log(getMenuHeight);
    $(".frame").css("padding-bottom", getFooterHeight);

});





