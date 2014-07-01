// LOADER
var __LOADER = new PxLoader(),
    images = [ 'images/wall/bg_hover_item.png',
               'images/wall/bg_replies/1_regards-concupiscents.png',
               'images/wall/bg_replies/2_sifflements.png',
               'images/wall/bg_replies/3_bruits_de_baisers.png',
               'images/wall/bg_replies/4_coups_de_klaxons.png',
               'images/wall/bg_replies/5_commentaires_sur_apparence.png',
               'images/wall/bg_replies/6_gestes_vulgaires.png',
               'images/wall/bg_replies/7_exhibition_sexuelle.png',
               'images/wall/bg_replies/8_frotteurisme.png',
               'images/wall/filters/1_regards-concupiscents_filtre.png',
               'images/wall/filters/2_sifflements_filtre.png',
               'images/wall/filters/3_bruits_de_baisers_filtre.png',
               'images/wall/filters/4_coups_de_klaxons_filtre.png',
               'images/wall/filters/5_commentaires_sur_apparence_filtre.png',
               'images/wall/filters/6_gestes_vulgaires_filtre.png',
               'images/wall/filters/7_exhibition_sexuelle_filtre.png',
               'images/wall/filters/8_frotteurisme.png',
               'images/logo.png',
               'images/share.jpg' ];

for (var i = 0; i < images.length; i++) {
  __LOADER.addImage( __URL + images[i] );
}

__LOADER.addCompletionListener(function(e) {

    setTimeout(function(){
      $('#loader').animate({
        opacity: 0,
        top: "-100%",
      }, 1500, function() {
        $(this).hide();
      });
    },3000);

});

__LOADER.start();