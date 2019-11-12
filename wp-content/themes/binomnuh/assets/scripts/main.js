// import external dependencies

import "jquery"
import slider from './modules/slider'
import tabs from './modules/tabs'
import statsCounter from './modules/statsCounter'
import scrollDown from './modules/scrollDown'
import 'jquery-match-height'

// Import everything from autoload
import "./autoload/**/*"

var $ = jQuery;

$(document).ready(() => {
    slider();
    tabs();
    statsCounter();
    scrollDown();
    $('.post__image').matchHeight(
        {
            target: $('.post__content'),
        }
    );
});
