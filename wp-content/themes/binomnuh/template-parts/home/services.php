<?php

$services_title = get_sub_field('services_title');
$services_image = get_sub_field('services_image');

?>

<div class="services-section">
    <div class="services-section__container">
        <div class="services-section__row">

            <div class="services-section__content">
                <?php if ($services_title): ?>
                    <h2 class="services-section__title"><?= $services_title; ?></h2>
                <?php endif; ?>

                <?php if (have_rows('services_repeater')): ?>

                    <div class="services">

                        <?php while (have_rows('services_repeater')): the_row();

                            // vars
                            $service_image = get_sub_field('service_image');
                            $service_title = get_sub_field('service_title');
                            $service_description = get_sub_field('service_description');

                            ?>

                            <div class="services__item service">


                                <div class="service__content">
                                    <?php if ($service_title): ?>
                                        <h4 class="service__title"><?= $service_title; ?></h4>
                                    <?php endif; ?>

                                    <?php if ($service_description): ?>
                                        <div class="service__description"><?= $service_description; ?></div>
                                    <?php endif; ?>
                                </div>
                                <?php if ($service_image): ?>
                                    <div class="service__image-wrapper">
                                        <img class="service__image"
                                             src="<?= $service_image['url'] ?>" alt="<?= $service_image['alt'] ?>">
                                    </div>
                                <?php endif; ?>

                            </div>

                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>
            </div>

            <div class="services-section__image" style="background-image: url(<?= $services_image['url'] ?>)">

            </div>
        </div>
    </div>
</div>