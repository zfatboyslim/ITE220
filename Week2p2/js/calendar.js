// display the calendar here
var hotelTable = document.getElementById("hotelCalendarTable");
var defaultData = hotelTable.innerHTML;
var stringHTML = "";
var days = 30;
var week = 0;

for(var i = 1; i < 31; i++){
	if(week == 0){
	stringHTML += "<tr>";
	week++
}
	if(week == 7){
		stringHTML += "<td>" + i +"</td></tr>";
		week = 0;
	}
	else{
		stringHTML += "<td>" + i +"</td>";
		week++
	}
}



hotelTable.innerHTML += stringHTML;
