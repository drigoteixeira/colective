$(document).ready(function() {
	
	// ABRIR LINKS EM UMA NOVA JANELA
	if(!$.browser.msie){
		$("a[href*='http://']:not([href*='"+location.hostname+"']),[href*='https://']:not([href*='"+location.hostname+"'])").attr("target","_blank").addClass("external");
	}

});