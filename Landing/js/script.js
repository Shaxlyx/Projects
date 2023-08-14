menu.onclick = function myFunction(){
	var x = document.getElementById('myTopnav');

	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}

var modal = document.getElementById("mymodal");
var btn = document.getElementById("mybtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
	modal.style.display = "block";
}
span.onclick = function() {
	modal.style.display = "none";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

var modal = document.getElementById("mymodal2");
var btn = document.getElementById("mybtn2");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
	modal.style.display = "block";
}
span.onclick = function() {
	modal.style.display = "none";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

var modal = document.getElementById("mymodal3");
var btn = document.getElementById("mybtn3");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
	modal.style.display = "block";
}
span.onclick = function() {
	modal.style.display = "none";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

var modal = document.getElementById("mymodal4");
var btn = document.getElementById("mybtn4");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
	modal.style.display = "block";
}
span.onclick = function() {
	modal.style.display = "none";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}