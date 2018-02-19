// Javascript code

// click top to navbar

$("#topPage").click(function() {
    $('html, body').animate({
        scrollTop: $("#Page").offset().top
    }, 3000);
});
