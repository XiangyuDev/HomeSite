$(document).ready(function () {

    var offset = $('.navbar').height();
    /* activate bootstrap scrollspy */
    $('body').scrollspy({ target: '#navbar' , offset: offset});

    /* animate scrolling after clicking navbar items */
    waypoint_banner_offset = $('#waypoint-banner').offset().top-offset;
    waypoint_service_offset = $('#waypoint-service').offset().top-offset;

    $('#navbar-top').click(function(event){

        event.preventDefault();

        $('html, body').animate({
            scrollTop: waypoint_banner_offset
        }, 800);
    });
    $('#navbar-service').click(function(event){

        event.preventDefault();

        $('html, body').animate({
            scrollTop: waypoint_service_offset
        }, 800);
    });
    $('#navbar-about').click(function(event){

        event.preventDefault();

        $('html, body').animate({
            scrollTop: $(document).height()
        }, 800);
    });
});

