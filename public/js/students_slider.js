$(document).ready(function () {
    var sortStudents = $("#carouselExampleIndicators").children().find(".first-item");
    var sortStudent = $(".student");
    var activeStudent = $(".carousel-item").children().find(".active");
    activeStudent.each(function () {
        $(this).removeClass("col-3");
        $(this).addClass("col-4");
    });
    $('.student-sort').on("click",function () {
        var student = $(this).data("student");
        sortStudents.addClass("active");
        sortStudent.each(function () {
            if ($(this).data("student") == student){
                $(this).addClass("active");
                $(this).removeClass("col-3");
                $(this).addClass("col-4");
            }
            else {
                $(this).removeClass("active");
                $(this).removeClass("col-4");
                $(this).addClass("col-3");
            }
        });
    });
    sortStudent.on("click",function () {
        $(this).addClass("active");
        $(this).removeClass("col-3");
        $(this).addClass("col-4");
        $(this).parent().find(".student").not($(this)).removeClass("active");
        $(this).parent().find(".student").not($(this)).removeClass("col-4");
        $(this).parent().find(".student").not($(this)).addClass("col-3");
    })
});
