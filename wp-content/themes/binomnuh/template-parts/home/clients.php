<?php

$clients_title = get_sub_field('clients_title');
$clients_description = get_sub_field('clients_description');

$clients_styles = get_sub_field('clients_styles');

$clients_background_choice = $clients_styles['background'];
$clients_background_image = $clients_styles['background_image'];
$clients_background_color = $clients_styles['background_color'];
?>

<div class="clients-section" style="<?= ($clients_background_choice == 'image') ? 'background-image: url(' . $clients_background_image['url']. ')'  : 'background-color:' . $clients_background_color ?>">
    <div class="clients-section__container">
        <div class="clients-section__row">

            <div class="clients-section__content">
                <?php if ($clients_title): ?>
                    <h2 class="clients-section__title"><?= $clients_title; ?></h2>
                <?php endif; ?>

                <?php if ($clients_description): ?>
                    <div class="clients-section__description"><?= $clients_description; ?></div>
                <?php endif; ?>

                <div class="clients-section__separator separator">
                    <div class="separator__left-line"></div>
                    <div class="separator__dot"></div>
                    <div class="separator__right-line"></div>
                </div>
            </div>


            <?php if (have_rows('clients_repeater')): ?>

                <div class="clients">

                    <?php while (have_rows('clients_repeater')): the_row();

                        $client_logo = get_sub_field('client_logo');
                        ?>

                        <div class="client clients__item" style="background-image: url(<?= $client_logo['url'] ?>)">

                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
