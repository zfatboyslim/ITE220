//Thomas Charlesworth 213210087
$(function(){
	$("a").on("click", function(e){
		e.preventDefault();
		//alert(this.text);
		var city = this.text.toLowerCase();
		$.ajax({
			type: 'GET',
			url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=2de143494c0b295cca9337e1e96b00e0',
		success: function(data){
			console.log(data);
			$("#container").html(data.name + " " + data.main.temp);
		}
		});



	});
});