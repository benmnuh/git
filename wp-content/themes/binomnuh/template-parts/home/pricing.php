<?php

$pricing_title = get_sub_field('pricing_title');
$pricing_description = get_sub_field('pricing_description');

?>

<div class="pricing-section">
    <div class="pricing-section__container">
        <div class="pricing-section__row">

            <div class="pricing-section__content">
                <?php if ($pricing_title): ?>
                    <h2 class="pricing-section__title"><?= $pricing_title; ?></h2>
                <?php endif; ?>

                <?php if ($pricing_description): ?>
                    <div class="pricing-section__description"><?= $pricing_description; ?></div>
                <?php endif; ?>

                <div class="pricing-section__separator separator">
                    <div class="separator__left-line"></div>
                    <div class="separator__dot"></div>
                    <div class="separator__right-line"></div>
                </div>
            </div>


            <?php if (have_rows('pricing_packages')): ?>

                <div class="pricing-packages">

                    <?php while (have_rows('pricing_packages')): the_row();

                        $pricing_package_title = get_sub_field('pricing_package_title');
                        $pricing_package_price_per_month = get_sub_field('pricing_package_price_per_month');
                        $pricing_package_button_title = get_sub_field('pricing_package_button_title');
                        $pricing_featured_package = get_sub_field('pricing_featured_package');
                        ?>

                        <div class="pricing-packages__item pricing-package <?= ($pricing_featured_package == 'yes') ? 'pricing-package--featured' : '' ?>">

                            <?php if ($pricing_package_title): ?>
                                <div class="pricing-package__title-wrapper">
                                    <h3 class="pricing-package__title"><?= $pricing_package_title; ?></h3>
                                </div>
                            <?php endif; ?>

                            <?php if ($pricing_package_price_per_month): ?>
                                <div class="pricing-package__price-wrapper">
                                    <div class="pricing-package__price">
                                        <div class="pricing-package__price-value">
                                            $<?= $pricing_package_price_per_month; ?>
                                        </div>
                                        <div class="pricing-package__price-description">
                                            per month
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>

                            <div class="pricing-package__content">

                                <?php if (have_rows('pricing_package_features')): ?>

                                    <div class="pricing-package__features">
                                        <?php while (have_rows('pricing_package_features')): the_row();

                                            $pricing_package_feature = get_sub_field('pricing_package_feature');
                                            ?>
                                            <?php if ($pricing_package_feature): ?>
                                                <div class="pricing-package__feature"><?= $pricing_package_feature; ?></div>
                                            <?php endif; ?>

                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($pricing_package_button_title): ?>
                                    <a href=""
                                       class="pricing-package__btn btn"
                                       target="">
                                        <?= $pricing_package_button_title; ?>
                                    </a>
                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
