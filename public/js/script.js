jQuery(document).ready(function ($) {

    'use strict';


    let id = "home";
    //Init (affiche le home et hide les autres sections)
    updateSection(id);
    $('.nav2__list-item').on('click', function () {
        if ($(this).attr('id') !== undefined) {
            updateSection($(this).attr('id'));
        }
    });

    //Update les section(hidden/visible)
    function updateSection(refId) {
        $('section').each(function (index, value) {
            //Si == de id -> show section
            if ($(this).attr('id') === refId) {
                $('section#' + $(this).attr('id')).show();
            } else {
                //Sinon  -> hide section 
                $('section#' + $(this).attr('id')).hide();
            }
        });
    }
});