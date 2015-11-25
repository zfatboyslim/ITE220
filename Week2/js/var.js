var products = ["T-Shirt", "Laptop", "Wristband"];
var price = [10, 5, 1];
var total = 0;

for (var i = 0; i<products.length; i++){
var productList = document.getElementById("productList");
productList.innerHTML += "<li>" +products[i] + ": $" + price[i] +"</li>";
total += price[i];
}
var d = new Date();
var n = d.getHours();
if (n < 12 ){
	var test = "Good Morning";
}
else if (n >=12) {
	var test = "Good Afternoon";
}
else if (n > 18){
	var test = "Good Evening";
}
var name = "Thomas"
var testEle = document.getElementById("mytext");
testEle.innerHTML = test + " , " + name;


var totalPriceEle = document.getElementById("totalPrice");
totalPrice.textContent = "$" + total;
 
var pricef = total * 0.8;
var finalPriceEle = document.getElementById("finalPrice");
finalPrice.textContent = pricef;