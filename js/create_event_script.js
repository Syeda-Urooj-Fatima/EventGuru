var curStep = 1;

$(document).ready(function (){

	var c = new Croppie(document.getElementById('poster-area'), {
	    viewport: { width: 500, height: 290 },
	    boundary: { width: 510, height: 300 },
		showZoomer: false
	});

	document.getElementById('file-input').onchange = function (evt) {
		var tgt = evt.target || window.event.srcElement,
	    	files = tgt.files;

	    if (FileReader && files && files.length) {
	        var fr = new FileReader();
	        fr.onload = function () {
				c.bind({url: fr.result})
	        }
	        fr.readAsDataURL(files[0]);
	    }
	    else {
	    	console.log("not supported");
	    }
	}

});

function save() {
	location.href='eventpage.php';
}

function cancel() {
	location.href = 'window.history.go(-1)';
}

function goTo(step) {
	if (step==curStep) {return}
	$("#tab"+curStep).attr('class','');
	$("#tab"+step).attr('class','active');
	$(".progress-bar").css('width',step*25+"%");
	$("#step"+curStep).slideUp(500,function() {
		$("#step"+step).fadeIn(500);
	});
	curStep = step;
}