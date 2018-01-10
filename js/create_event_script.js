var curStep = 1;
var posterFile;
var img;

$(window).scroll(function (){
	$("#pageHead").addClass("sticky");
	$("#step1").addClass("stickyBrother");
});

$(window).resize(function (){
	var w = $("#poster-area").width();
	var h = (9/16)*w;
	$("#poster-area").empty();
	$("#poster-area").croppie({
        viewport: { width: w-10, height:  h-10},
	    boundary: { width: w, height: h },
		showZoomer: false
    }); 
    if (posterFile!=undefined){
    	$("#poster-area").croppie('bind',posterFile);
    }
});

$(document).ready(function (){

	var w = $("#poster-area").width();
	var h = (9/16)*w;

	$("#poster-area").croppie({
        viewport: { width: w-10, height:  h-10},
	    boundary: { width: w, height: h },
		showZoomer: false
    }); 

	document.getElementById('file-input').onchange = function (evt) {
		window.img = true;

		var tgt = evt.target || window.event.srcElement,
	    	files = tgt.files;

	    if (FileReader && files && files.length) {
	        var fr = new FileReader();
	        fr.onload = function () {
	        	$("#poster-area").croppie('bind',fr.result);
				posterFile = fr.result;
	        }
	        fr.readAsDataURL(files[0]);
	    }
	    else {
	    	console.log("not supported");
	    }
	}

});

function save() {

	if ($("#event-name").val() == "") {
		alert("Event Name is Mandatory");
		return;
	}

	var dt = $("#datetimepicker12").data("DateTimePicker").date();
	var x = new Date(dt);
	var d = x.getFullYear()+"-"+(x.getMonth()+1)+"-"+x.getDate();
	var t = x.getHours()+":"+x.getMinutes();
	$("#form-date").val(d);
	$("#form-time").val(t);
	$("#form-name").val($("#event-name").val());
	$("#form-category").val($("#event-cat").val());
	$("#form-description").val($("#event-desc").val());
	$("#form-address").val($("#address").val());
	$("#form-email").val($("#contact-email").val());
	$("#form-phone").val($("#contact-phone").val());
	$("#form-ticketPrice").val($("#ticketPrice").val());
	$("#form-ticketPrice").val($("#videoLink").val());
	$("#form-googleForm").val($("#google-form").val());

	if(window.img){
		$("#poster-area").croppie('result', {
	        type: 'canvas',
	        size: 'original'
	    }).then(function (resp) {
		    $("#form-poster").val(resp);
			$("#myform").submit();
	    });
	}
	else{
		$("#myform").submit();
	}

}

function cancel() {
	window.history.back();
}

function goTo(step) {
	$("#pageHead").addClass("sticky");
	$("#step1").addClass("stickyBrother");
	if (step==curStep) {return}
	$("#tab"+curStep).attr('class','');
	$("#tab"+step).attr('class','active');
	$(".progress-bar").css('width',step*25+"%");
	curStep = step;
}