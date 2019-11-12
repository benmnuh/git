<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

</main><!-- #content -->

<?php
$social_media = get_field('social_media', 'option');
$social_links_repeater = $social_media['social_links_repeater'];
$social_links_style = $social_media['social_links_style'];

$social_links_font_color = $social_links_style['font_color'];
$social_links_hover_font_color = $social_links_style['hover_font_color'];

$footer_options = get_field('footer_options', 'option');
$footer_copyright = $footer_options['footer_copyright'];
$footer_style = $footer_options['footer_style'];
$footer_style_background_color = $footer_style['background_color'];
$footer_style_font_color = $footer_style['font_color'];
$footer_style_hover_font_color = $footer_style['hover_font_color'];
?>

<?php if ($social_links_font_color) : ?>
    <style>
        .social-item {
            color: <?= $social_links_font_color ?>;
        }
    </style>
<?php endif; ?>

<?php if ($social_links_hover_font_color) : ?>
    <style>
        .social-item:hover {
            color: <?= $social_links_hover_font_color ?>;
        }
    </style>
<?php endif; ?>

<?php if ($footer_style_font_color) : ?>
    <style>
        .footer * {
            color: <?= $footer_style_font_color ?>;
        }
    </style>
<?php endif; ?>

<?php if ($footer_style_hover_font_color) : ?>
    <style>
        .footer a:hover {
            color: <?= $footer_style_hover_font_color ?>;
        }
    </style>
<?php endif; ?>

<footer class="footer" role="contentinfo"
        style="<?= ($footer_style_background_color) ? 'background-color: ' . $footer_style_background_color . ';' : '' ?>">
    <div class="footer__container">
        <div class="footer__row">

            <?php if ($social_links_repeater) : ?>
                <div class="footer__social-media social-media">
                    <?php foreach ($social_links_repeater as $social_links_item) :

                        $social_links_icon = $social_links_item['social_links_icon'];
                        $social_links_url = $social_links_item['social_links_url']; ?>

                        <a href="<?= $social_links_url ?>"
                           class="social-media__item social-item">
                            <i class="fa <?= $social_links_icon->class ?> social-media__icon" aria-hidden="true"></i>
                        </a>


                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
            <div class="footer__copyright">
                <?php if ($footer_copyright): ?>
                    <div><?= $footer_copyright ?></div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
