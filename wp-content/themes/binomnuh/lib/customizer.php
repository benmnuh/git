<?php
/**
 * Add customizer menus and options here.
 *
 * Learn more about customizer: {@link https://codex.wordpress.org/Theme_Customization_API}
 */

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => __('Theme General Settings'),
        'menu_title' => __('Theme Settings'),
        'menu_slug' => 'theme-general-settings',
    ));
}


add_action('wp_footer', 'perfect_pixel');
function perfect_pixel()
{
    ?>

    <div class="pixel-perfect">
        <input id="pixelCheck" hidden type="checkbox">
        <label for="pixelCheck" title="Pixel Perfect verify"></label>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/perfect-pixel/Index.png" width="100%" height="100%"
             alt="Pixel perfect">
    </div>
    <style>
        .pixel-perfect {
            display: flex;
            position: absolute;
            top: -74px;
            left: 0;
            width: 100vw;
            justify-content: center;
            pointer-events: none;
            max-width: 1903px;
        }

        .pixel-perfect img {
            display: none;
            pointer-events: none;
            flex: 0 1 auto;
            height: 100%;
            /*mix-blend-mode: multiply;*/
            opacity: .5;
            max-width: initial;
            transform: scale(1);
        }

        .pixel-perfect input:checked ~ img {
            display: block;
        }

        body.admin-bar .pixel-perfect input:checked ~ img {
            /*margin-top: 32px;*/
            margin-top: 107px;
        }

        .pixel-perfect label {
            display: block;
            position: fixed;
            bottom: 0;
            left: 0;
            margin: 5px;
            width: 10px;
            height: 10px;
            background: silver;
            pointer-events: all;
            z-index: 999;
        }

        .pixel-perfect input:checked ~ label {
            background: red;
        }
    </style>
    <?php
}