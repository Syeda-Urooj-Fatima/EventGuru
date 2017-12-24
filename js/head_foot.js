// head

$("#search").keypress(function (event) { /*When enter button is clicked within the search box*/
    if (event.keyCode === 13) {
        $("#search-btn").click();
    }
});

$(document).ready(function () {
    $("#search-btn").click(function () {
        alert("hahaha..raja g");
    })
});

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

// footer
$(window).scroll(function() {
    $(".slideanim").each(function(){
        var pos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        if (pos < winTop + 500) {
          $(this).addClass("slide");
        }
      });
});

function locationMap() {
var myCenter = new google.maps.LatLng(33.6423643,72.9831311);
var mapProp = {center:myCenter, zoom:17, scrollwheel:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}