$('document').ready(function () {
    $(".navigation ul li a").click(function () {
        var selected = $(this).attr('href');
        $('html,body').animate({scrollTop:$(selected).offset().top}, 1000);

        return false;
    });
});