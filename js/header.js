$("#search").keypress(function(event) { /*When enter button is clicked within the search box*/
    if (event.keyCode === 13) {
        $("#search-btn").click();
    }
});

$(document).ready(function(){
	$("#search-btn").click(function(){
		alert("Search button clicked");
	})
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});