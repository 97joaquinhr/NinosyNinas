// Sidebar button toggle

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $("#menu-toggle-dir").toggleClass("fa-caret-left");
    $("#menu-toggle-dir").toggleClass("fa-caret-right");
});
