$(document).ready(function () {
    //#back-top
    $('#back-top').hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        //scroll
        $('#back-top a').click(function () {
            $('body, html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});
