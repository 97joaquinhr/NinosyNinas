let card_text = document.getElementById("card_hover");

function focus_style() {
	card_text.style.fontStyle = "italic";
}

function unfocus_style() {
	card_text.style.fontStyle = "normal";
}

card_text.onmouseover = focus_style;
card_text.onmouseout = unfocus_style;

function welcome() {
	$("#welcome").modal('show');
}

setTimeout(welcome, 3000);

let drop_area = document.getElementById("drop");
let logo = document.getElementById("logo");

function drop(event) {
	event.preventDefault();
    var data = event.dataTransfer.getData("text");
    event.target.appendChild(document.getElementById(data));
	logo.classList.remove("logo_big");
}

function allowDrop(event) {
    event.preventDefault();
}

function drag(event) {
    event.dataTransfer.setData("text", event.target.id);
}