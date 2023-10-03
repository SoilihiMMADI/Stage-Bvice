/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// bouton Top afficher/masquer
jQuery(function () {
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#scrollUp').css('right', '10px');
            } else {
                $('#scrollUp').removeAttr('style');
            }
        });
    });
    $("#scrollUp").click(function () {
        $("html, body").animate({scrollTop: 0}, 900);
    });
});

// alert déconnexion réussie
jQuery(
        $(".deconnexion").click(function () {
    alert("Déconnexion réussie!");
}));


// affichage du texte en plus en fonction de notre position sur la fenêtre
window.onscroll = function () {
    myFunction()
};

function myFunction() {
    $('.histoire-description-suite').each(function (i) {

        var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 2;
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if (bottom_of_window > bottom_of_object) {

            $(this).animate({'opacity': '1'}, 700);

        }

    });
}

// alert article supp avec conditons
$(document).ready(function () {
    if (document.referrer.indexOf("?action=30") > -1) {
        if (window.location.href.indexOf("articleSupp") > -1) {
            alert("l'article a été supprimé");
        }
    }
});

// bulle pour le bouton connexion ou autres
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

// cofirmer suppression article
function confirmation() {
    return confirm('Supprimer l\'article ?');
}
