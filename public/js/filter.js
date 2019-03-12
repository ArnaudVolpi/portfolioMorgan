jQuery(document).ready(function ($) {

    'use strict';

    //Btn All 
    $('button.all').on('click', (e) => {
        filterGallery('all');
    });
    //Btn Urbex 
    $('button.urbex').on('click', (e) => {
        filterGallery('urbex');
    });
    //Btn Paysage 
    $('button.paysage').on('click', (e) => {
        filterGallery('paysage');
    });
    //Btn Portrait 
    $('button.portrait').on('click', (e) => {
        filterGallery('portrait');
    });
    //Btn Sport 
    $('button.sport').on('click', (e) => {
        filterGallery('sport');
    });



    //filtre les photos en fct du type
    var filterGallery = (type) => {
        if (type !== 'all') {
            $('img.panel-img').each(function () {
                $($(this)).closest('div.photo').show();
                $($(this)).not('.' + type).closest('div.photo').hide();
                $(this).addClass('zoomIn');
            });
        } else {
            $('img.panel-img').each(function () {
                $($(this)).closest('div.photo').show();
            });
        }
    };






});