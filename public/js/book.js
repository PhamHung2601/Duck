$(document).ready(function () {

    if (document.getElementById("ActiveSubjectID") != null) {
        $("#" + document.getElementById("ActiveSubjectID").value + "").addClass('active');
    }
});

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}