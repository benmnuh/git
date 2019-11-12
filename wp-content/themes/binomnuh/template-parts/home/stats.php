<?php
$stats_styles = get_sub_field('stats_styles');

$stats_background_choice = $stats_styles['background'];
$stats_background_image = $stats_styles['background_image'];
$stats_background_color = $stats_styles['background_color'];

?>


<?php if (have_rows('stats_repeater')): ?>

    <div class="stats-section" style="<?= ($stats_background_choice == 'image') ? 'background-image: url(' . $stats_background_image['url']. ')'  : 'background-color:' . $stats_background_color ?>">
        <div class="stats-section__container">
            <div class="stats-section__row stats">



                <?php while (have_rows('stats_repeater')): the_row();

                    $stats_icon = get_sub_field('stats_icon');
                    $stats_title = get_sub_field('stats_title');
                    $stats_number = get_sub_field('stats_number');

                    ?>

                    <div class="stats__item stats-item">

                        <?php if ($stats_icon): ?>
                            <div class="stats-item__icon-wrapper">
                                <img class="stats-item__icon" src="<?= $stats_icon['url'] ?>" alt="">
                            </div>
                        <?php endif; ?>

                        <?php if ($stats_number): ?>
                            <div class="stats-item__number stats-number" data-count="<?= $stats_number; ?>">0</div>
                        <?php endif; ?>

                        <?php if ($stats_title): ?>
                            <h4 class="stats-item__title"><?= $stats_title; ?></h4>
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>