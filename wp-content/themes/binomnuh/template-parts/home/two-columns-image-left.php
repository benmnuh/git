<?php

$two_columns_image_left_image = get_sub_field('two_columns_image_left_image');
$two_columns_image_left_image_title = get_sub_field('two_columns_image_left_image_title');
$two_columns_image_left_image_content = get_sub_field('two_columns_image_left_image_content');
$two_columns_image_left_button = get_sub_field('two_columns_image_left_button');

?>


<div class="two-columns-image-left">
    <div class="two-columns-image-left__container">
        <div class="two-columns-image-left__row">

            <div class="two-columns-image-left__left-col">
                <?php if ($two_columns_image_left_image): ?>
                <div class="two-columns-image-left__image-wrapper">
                    <img class="two-columns-image-left__image" src="<?= $two_columns_image_left_image['url'] ?>" alt="">
                </div>
                <?php endif; ?>
            </div>

            <div class="two-columns-image-left__right-col">
                <?php if ($two_columns_image_left_image_title): ?>
                    <h2 class="two-columns-image-left__title"><?= $two_columns_image_left_image_title; ?></h2>
                <?php endif; ?>

                <?php if ($two_columns_image_left_image_content): ?>
                    <div class="two-columns-image-left__content"><?= $two_columns_image_left_image_content; ?></div>
                <?php endif; ?>

                <?php if ($two_columns_image_left_button): ?>
                    <a href="<?= $two_columns_image_left_button["url"] ?>"
                       class="two-columns-image-left__btn primary-btn btn">
                        <?= $two_columns_image_left_button["title"]; ?>
                    </a>
                <?php endif; ?>

            </div>

        </div>
    </div>
</div>
