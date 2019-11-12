<?php

$contact_us_title = get_sub_field('contact_us_title');
$contact_us_description = get_sub_field('contact_us_description');

$contact_us_info = get_sub_field('contact_us_info');
$contact_us_address_title = $contact_us_info['contact_us_address_title'];
$contact_us_address = $contact_us_info['contact_us_address'];
$contact_us_phone_title = $contact_us_info['contact_us_phone_title'];
$contact_us_phone_repeater = $contact_us_info['contact_us_phone_repeater'];
$contact_us_email_title = $contact_us_info['contact_us_email_title'];
$contact_us_email_repeater = $contact_us_info['contact_us_email_repeater'];

$contact_us_form_shortcode = get_sub_field('contact_us_form_shortcode');

$contact_us_styles = get_sub_field('contact_us_styles');
$contact_us_background_choice = $contact_us_styles['background'];
$contact_us_background_image = $contact_us_styles['background_image'];
$contact_us_background_color = $contact_us_styles['background_color'];
?>

<div class="contact-section"
     style="<?= ($contact_us_background_choice == 'image') ? 'background-image: url(' . $contact_us_background_image['url'] . ')' : 'background-color:' . $contact_us_background_color ?>">
    <div class="contact-section__container">


        <div class="contact-section__content">
            <?php if ($contact_us_title): ?>
                <h2 class="contact-section__title"><?= $contact_us_title; ?></h2>
            <?php endif; ?>

            <?php if ($contact_us_description): ?>
                <div class="contact-section__description"><?= $contact_us_description; ?></div>
            <?php endif; ?>

            <div class="contact-section__separator separator">
                <div class="separator__left-line"></div>
                <div class="separator__dot"></div>
                <div class="separator__right-line"></div>
            </div>
        </div>

        <div class="contact-section__row">
            <div class="contact-info">

                <div class="contact-info__item contact-address">
                    <?php if ($contact_us_address_title): ?>
                        <h3 class="contact-info__title"><?= $contact_us_address_title; ?></h3>
                    <?php endif; ?>

                    <?php if ($contact_us_address): ?>
                        <div class="contact-info__content"><?= $contact_us_address; ?></div>
                    <?php endif; ?>
                </div>


                <div class="contact-info__item contact-phone">
                    <?php if ($contact_us_phone_title): ?>
                        <h3 class="contact-info__title"><?= $contact_us_phone_title; ?></h3>
                    <?php endif; ?>

                    <?php if ($contact_us_phone_repeater): ?>
                        <div class="contact-info__content">
                            <?php foreach ($contact_us_phone_repeater as $item) :
                                echo $item['contact_us_phone'] . '<br>';
                            endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="contact-info__item contact-email">
                    <?php if ($contact_us_email_title): ?>
                        <h3 class="contact-info__title"><?= $contact_us_email_title; ?></h3>
                    <?php endif; ?>
                    <?php if ($contact_us_email_repeater): ?>
                        <div class="contact-info__content">
                            <?php foreach ($contact_us_email_repeater as $item) :
                                echo $item['contact_us_email_address'] . '<br>';
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="contact-form">

                <?= do_shortcode($contact_us_form_shortcode); ?>

            </div>
        </div>
    </div>
</div>
