var size = document.getElementById("sizeSelected");
var btn = document.getElementById("paypalBtn");

function size_large () {
	size.innerHTML=("<p>LARGE SELECTED</p>");
	btn.innerHTML=("<script async src="/paypal-button.min.js?merchant=cinderscol@hotmail.co.uk"
            data-button="cart"
            data-name="Large Mon T-shirt"
            data-amount="1.00"
          ></script>");
}

//document.addEventListener("DOMContentLoaded, false, size_large");
//var btn = document.getElementById("payPalBtn");

 //$("a.size_large").click(function(){
   //alert("large clicked");
   //$("#paypalBtn").html("yo!");
 //});
 //$("a.size_medium").click(function(){
   //alert("medium clicked");
 //});
 //$("a.size_small").click(function(){
   //alert("small clicked");
 //});