var pc = document.querySelector(".popcornCard");
var dc = document.querySelector(".drinkCard");
var nc = document.querySelector(".nachoCard");
var sc = document.querySelector(".sweetCard");


function sizes() {
	var size = prompt("Please enter the size of the product you would like");
}





function validateForm() {
    var x = document.forms["myForm"]["fullname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}


pc.addEventListener("click", sizes);
dc.addEventListener("click", sizes);
nc.addEventListener("click", sizes);
sc.addEventListener("click", sizes);