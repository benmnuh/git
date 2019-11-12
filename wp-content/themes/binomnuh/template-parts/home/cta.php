
<?php
$cta_content = get_sub_field('cta_content');
$cta_button = get_sub_field('cta_button');

$cta_styles = get_sub_field('cta_styles');

$cta_background_choice = $cta_styles['background'];
$cta_background_image = $cta_styles['background_image'];
$cta_background_color = $cta_styles['background_color'];

?>


<div class="cta-section" style="<?= ($cta_background_choice == 'image') ? 'background-image: url(' . $cta_background_image['url']. ')'  : 'background-color:' . $cta_background_color ?>">
        <div class="cta-section__container">
            <div class="cta-section__row">


                <?php if ($cta_content): ?>
                    <div class="cta-section__content"><?= $cta_content; ?></div>
                <?php endif; ?>

                <?php if ($cta_button): ?>
                    <a href="<?= $cta_button["url"] ?>"
                       class="cta-section__btn primary-btn btn">
                        <?= $cta_button["title"]; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
