//Thomas Charlesworth 213210087
$(function(){
	$("#cityone").on("click", function(e){
		e.preventDefault();
		//alert(this.text);
		var city = this.text.toLowerCase();
		$.ajax({
			type: 'GET',
			dataType: 'jsonp',
			url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=2de143494c0b295cca9337e1e96b00e0',
		success: function(data){
			console.log(data);
			var celcius = data.main.temp - 273;
			var fahrenheit = celcius * 1.8 + 32;
			fahrenheit = fahrenheit.toFixed(2);
			celcius = celcius.toFixed(2);
			$("#containerone").html("<br>Temperature Celcius: " + celcius + "<br>Temperature Fahrenheit: " + fahrenheit +"<br> Humidity: " + data.main.humidity);
		}
		});
	});
	$("#citytwo").on("click", function(e){
		e.preventDefault();
		//alert(this.text);
		var city = this.text.toLowerCase();
		$.ajax({
			type: 'GET',
			dataType: 'jsonp',
			url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=2de143494c0b295cca9337e1e96b00e0',
		success: function(data){
			console.log(data);
			var celcius = data.main.temp - 273;
			var fahrenheit = celcius * 1.8 + 32;
			fahrenheit = fahrenheit.toFixed(2);
			celcius = celcius.toFixed(2);
			$("#containertwo").html("<br>Temperature Celcius: " + celcius + "<br>Temperature Fahrenheit: " + fahrenheit +"<br> Humidity: " + data.main.humidity);
		}
		});
	});
	$("#citythree").on("click", function(e){
		e.preventDefault();
		//alert(this.text);
		var city = this.text.toLowerCase();
		$.ajax({
			type: 'GET',
			dataType: 'jsonp',
			url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=2de143494c0b295cca9337e1e96b00e0',
		success: function(data){
			console.log(data);
			var celcius = data.main.temp - 273;
			var fahrenheit = celcius * 1.8 + 32;
			fahrenheit = fahrenheit.toFixed(2);
			celcius = celcius.toFixed(2);
			$("#containerthree").html("<br>Temperature Celcius: " + celcius + "<br>Temperature Fahrenheit: " + fahrenheit +"<br> Humidity: " + data.main.humidity);
		}
		});
	});

});