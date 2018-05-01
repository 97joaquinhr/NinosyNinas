var myVar1,myVar2;

function loadGallery() {
    myVar1 = setTimeout(showG, 2900);
}
function loadCalendar() {
    myVar2 = setTimeout(showC, 1200);
}
function loadAcerca() {
    myVar1 = setTimeout(showA, 1800);
}
function showG() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("gallery").style.display = "block";
}
function showC() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("calendar").style.display = "block";
}
function showA() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("acerca").style.display = "block";
}