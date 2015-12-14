var hotel = {
	name: 'Stamford Hotel',
	rooms: 40,
	booked: 25,
	checkAvailability: function() {
		return this.rooms - this.booked;
	}

};
var eleName = document.getElementById('hotelName');
eleName.textContent = hotel.name;

var eleRooms = document.getElementById('rooms');
eleRooms.textContent = hotel.checkAvailability();