(function ($) {
    // Shows a live preview of changing the body colour of the theme
    wp.customize('samsTheme_body_colour', function (colour) {
        colour.bind(function (updated_colour) {
            $('body').css('background-color', updated_colour);
        });
    });

    // Shows a live preview of changing the header colour of the theme
    wp.customize('samsTheme_header_colour', function (colour) {
        colour.bind(function (updated_colour) {
            $('header').css('background-color', updated_colour);
        });
    });

    // Shows a live preview of changing the footer colour of the theme
    wp.customize('samsTheme_footer_colour', function (colour) {
        colour.bind(function (updated_colour) {
            $('footer').css('background-color', updated_colour);
        });
    });
})(jQuery);