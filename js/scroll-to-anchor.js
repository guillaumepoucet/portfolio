// je récupère la hauteur de la navbar
var navHeight = $('#navbar').height();

$('a[href*="#"]:not([href="#"])').click(function () {
    var offset = -navHeight; // <-- change the value here
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top + offset
            });
            return false;
        }
    }
});

function getTopY() {
    var compTop = $('#competences').offset().top - navHeight;
    var compParcours = $('#parcours').offset().top - navHeight;
    var compProjets = $('#projets').offset().top - navHeight;
    var compParallax = $('#parallax').offset().top - navHeight;
}

var compTop = $('#competences').offset().top - navHeight;
var compParcours = $('#parcours').offset().top - navHeight;
var compProjets = $('#projets').offset().top - navHeight;
var compParallax = $('#parallax').offset().top - navHeight;

$(window).resize(function () {

});

$(document).scroll(function () {
    getTopY();
    var position = $(document).scrollTop();
    console.log(position)
    console.log(compParcours)
    if ((position > compTop) && (position < compParcours) || (position > compProjets) && (position < compParallax)) {
        $('#navbar').removeClass('navbar-lg');
        $('#navbar').addClass('navbar-dk');
    } else {
        $('#navbar').removeClass('navbar-dk');
        $('#navbar').addClass('navbar-lg');
    }
});
