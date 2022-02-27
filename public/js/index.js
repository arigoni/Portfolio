// Phrase d'accroche
$(function() {
    var words = [
        'Développement web',
        'Conception graphique',
        'Web marketing',
        'Référencement web',
        'Hébergement web',
        'Maintenance',
    ],
    i = 0;
  
    // On gère l'affichage aléatoire des phrases d'accroche du header (toutes les 3 secondes)
    setInterval(function() {
        $("#word").fadeOut(function() {
            $(this).html(words[i = (i + 1) % words.length]).fadeIn();
        });
    }, 3000); 
  
    // On gère le scroll vers les différentes sections du site
    $(".scroll").click(function() {
        var section = $("." + this.id);
        $("html,body").animate({scrollTop: section.offset().top}, 'slow');
    });
  
    // On gère l'affichage des progressbar pour les compétences
    window.sr = ScrollReveal();
    sr.reveal('.progress-bar', {
        origin: 'left',
        duration: 2000,
        distance: '100%'
    })    
});

//Counter
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});