

jQuery(document).ready(function ($) {
	
	var langItUrl = $(".wpml-ls-link").eq(0).attr("href");
	var langEnUrl = $(".wpml-ls-link").eq(1).attr("href");
	var socialIgUrl = "https://www.instagram.com/design.research.lab/";
	var socialTwUrl = "https://twitter.com/DRLabTrento";

	// console.log("-------------------------------------------------MEOWAWE");
	// console.log(langItUrl, langEnUrl);
	// console.log("-------------------------------------------------MEOWAWE");

	var langItA = "<a data-lang='it' href='"+ langItUrl +"'>IT</a>";
	var langEnA = "<a data-lang='en' href='"+ langEnUrl +"'>EN</a>";
	var divider = "<span class='divider'></span>";
	var socialIgA = "<a data-social='twitter' target='_blank' href='"+ socialTwUrl +"'></a>";
	var socialTwA = "<a data-social='instagram' target='_blank' href='"+ socialIgUrl +"'></a>";

	var linksContainer = "<div id='ap-header-social-lang-container'>"
		+ socialIgA 
		+ socialTwA 
		+ divider 
		+ langItA 
		+ langEnA 
		+"</div>";

	$(".mob-menu-header-holder").append(linksContainer);

});
