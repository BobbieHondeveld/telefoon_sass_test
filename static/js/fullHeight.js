// Every resize of window
$(document).ready(sizeContent);

// Dynamically assign height
function sizeContent() {
    var newHeight = $("html").height() - $(".pageHeader").height() + "px";
    //var errorHeight = $("html").height() - $(".pageHeader").height() - $(".pageFooter").height() + "px";
    
    $(".visualHome").css("height", newHeight);
    //$(".error").css("height", errorHeight);
}