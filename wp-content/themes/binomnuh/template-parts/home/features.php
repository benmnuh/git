<?php if (have_rows('features')): ?>

    <div class="features-section">
        <div class="features-section__container">
            <div class="features-section__row features">
                <?php while (have_rows('features')): the_row();

                    // vars
                    $feature_image = get_sub_field('feature_image');
                    $feature_title = get_sub_field('feature_title');
                    $feature_description = get_sub_field('feature_description');

                    ?>

                    <div class="features__item feature">

                        <?php if ($feature_image): ?>
                            <div class="feature__image-wrapper">
                                <img class="feature__image" src="<?= $feature_image['url'] ?>" alt="">
                            </div>
                        <?php endif; ?>

                        <?php if ($feature_title): ?>
                            <h4 class="feature__title"><?= $feature_title; ?></h4>
                        <?php endif; ?>

                        <div class="feature__separator"></div>

                        <?php if ($feature_description): ?>
                            <div class="feature__description"><?= $feature_description; ?></div>
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>