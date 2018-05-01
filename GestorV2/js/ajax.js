function getRequestObject() {
    // Asynchronous objec created, handles browser DOM differences

    if(window.XMLHttpRequest) {
        // Mozilla, Opera, Safari, Chrome IE 7+
        return (new XMLHttpRequest());
    }
    else if (window.ActiveXObject) {
        // IE 6-
        return (new ActiveXObject("Microsoft.XMLHTTP"));
    } else {
        // Non AJAX browsers
        return(null);
    }
}

function sendRequest(){
    $.get("ajax.php", { pattern: document.getElementById('userInput').value })
        .done(function( data ) {
            var ajaxResponse = document.getElementById('ajaxResponse');
            ajaxResponse.innerHTML = data;
            ajaxResponse.style.visibility = "visible";
        });
}

function selectValue() {
    var list=document.getElementById("list");
    var userInput=document.getElementById("userInput");
    var ajaxResponse=document.getElementById('ajaxResponse');
    userInput.value=list.options[list.selectedIndex].text;
    ajaxResponse.style.visibility="hidden";
    userInput.focus();
}

$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myDIV *").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
