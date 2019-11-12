<?php

// vars
$slider_title = get_sub_field('slider_title');
$slider_subtitle = get_sub_field('slider_subtitle');
$slider_description = get_sub_field('slider_description');
$slider_background_image = get_sub_field('slider_background_image');
$slider_cta_button = get_sub_field('slider_cta_button');
$slider_more_button = get_sub_field('slider_more_button');
$scroll_down_image = get_sub_field('scroll_down_image');

?>

<div class="hero-slider-wrapper">
    <div class="hero-slider__content">
        <?php if ($slider_subtitle): ?>
            <div class="hero-slide__subtitle"><?= $slider_subtitle; ?></div>
        <?php endif; ?>

        <?php if ($slider_title): ?>
            <h1 class="hero-slide__title"><?= $slider_title; ?></h1>
        <?php endif; ?>

        <div class="hero-slide__separator separator">
            <div class="separator__left-line"></div>
            <div class="separator__dot"></div>
            <div class="separator__right-line"></div>
        </div>

        <?php if ($slider_description): ?>
            <div class="hero-slide__description"><?= $slider_description; ?></div>
        <?php endif; ?>

        <div class="hero-slide__btns">
            <?php if ($slider_cta_button): ?>
                <a href="<?= $slider_cta_button['url'] ?>"
                   class="hero-slide__btn primary-btn hero-slide__btn--cta btn"
                   target="<?= $slider_cta_button['target'] ?>">
                    <?= $slider_cta_button['title']; ?>
                </a>
            <?php endif; ?>

            <?php if ($slider_more_button): ?>
                <a href="<?= $slider_more_button['url'] ?>"
                   class="hero-slide__btn hero-slide__btn--more btn"
                   target="<?= $slider_cta_button['target'] ?>">
                    <?= $slider_more_button['title']; ?>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="hero-slider">
        <?php if (have_rows('slider')): ?>
            <?php while (have_rows('slider')): the_row();

                $slide_title = get_sub_field('slide_title');
                $slide_subtitle = get_sub_field('slide_subtitle');
                $slide_content = get_sub_field('slide_content');
                $slide_background_image = get_sub_field('slide_background_image');
                $slide_cta_button = get_sub_field('slide_cta_button');
                $slide_more_button = get_sub_field('slide_more_button');
                ?>

                <div class="hero-slider__slide hero-slide"
                     style="background-image: url(<?= $slide_background_image['url'] ?>)">
                </div>

            <?php endwhile; ?>

        <?php else: ?>
            <div class="hero-slider__slide hero-slide"
                 style="background-image: url(<?= get_template_directory_uri() . '/assets/images/slide-1.jpg' ?>)">
            </div>
        <?php endif; ?>
    </div>


    <?php if ($scroll_down_image): ?>
        <a class="hero-slider__scroll-down scroll-down" href="#scrollDown">
            <img class="scroll-down__image"
                 src="<?= $scroll_down_image['url'] ?>" alt="<?= $scroll_down_image['alt'] ?>">
        </a>
    <?php endif; ?>
</div>


