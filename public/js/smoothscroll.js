/**
 * Created by mechiche on 28/09/16.
 */
/* Script qui permet de faire un défilement fluide d'un élément vers un autre

 */

$(document).ready(function () {
    $("/* element cliquable*/").click(function() {
        $('html,body').animate({
            scrollTop: $("/* element de destination*/").offset().top},'slow');
    });
});