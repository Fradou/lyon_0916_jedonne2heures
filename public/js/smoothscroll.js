/**
 * Created by mechiche on 28/09/16.
 */
/* Script qui permet de faire un défilement fluide d'un élément vers un autre

 */

$(document).ready(function () {
    $("#home_btn_jqbar1").click(function() {
        $('html,body').animate({
            scrollTop: $("#home_btn_jqbar1").offset().top},'slow');
    });
    $(".btn-default").click(function() {
        $('html,body').animate({
            scrollTop: $(".btn-default").offset().top},'slow');
    });


});



