$(function(){
	$('h1').hide().fadeIn(1000);
	$('#firstline').hide().fadeIn(3000);
	$('#test').hide();
	$('#learn_more').click(function(){
		$('#test').show();
	});
	$('#learn_less').click(function(){
		$('#test').hide();
	});

	$("#contactbut").click(function() {
   	 $('html, body').animate({
    	    scrollTop: $("#form-submit").offset().top
  	  }, 1000);
	});

	$('small').hide();
	var i = 0;
	$('#form-submit').click(function(){
		var x = document.forms["contact"]["form-num"].value;
		if(x >= 0){
			i++;
		}
		else{
			$('#erroronela').show();
			i=0;
		}
	});
	$('#form-submit').click(function(){
		var z = document.forms["contact"]["form-message"].value;
		var y = "badwords";
		if(z.indexOf(y) >= 0){
			$('#errortwola').show();
			i=0;
		}	
		else{
			i++;
		}

	});
	$('#form-submit').click(function(){
		if(i >= 2){
			alert("successfully send email message");
		}
		else{

		}
	});

	var app = {
		init: function() {
			app.init_effect();
			app.init_event();
		},

		init_effect: function() {
			
		},

		init_event: function() {
			
		}

	};
	app.init();
});
