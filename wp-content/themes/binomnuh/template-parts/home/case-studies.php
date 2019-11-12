<?php

$case_studies_title = get_sub_field('case_studies_title');
$case_studies_description = get_sub_field('case_studies_description');

$args = array(
    'post_type' => 'case_studies',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'title',
    'order' => 'ASC'
);

$posts = get_posts($args);
?>

<div class="case-studies-section">
    <div class="case-studies-section__container">
        <div class="case-studies-section__row">

            <div class="case-studies-section__content">
                <?php if ($case_studies_title): ?>
                    <h2 class="case-studies-section__title"><?= $case_studies_title; ?></h2>
                <?php endif; ?>

                <?php if ($case_studies_description): ?>
                    <div class="case-studies-section__description"><?= $case_studies_description; ?></div>
                <?php endif; ?>

                <div class="case-studies-section__separator separator">
                    <div class="separator__left-line"></div>
                    <div class="separator__dot"></div>
                    <div class="separator__right-line"></div>
                </div>
            </div>

            <div class="case-studies">
                <div class="case-study-content case-study">


                    <?php foreach ($posts as $post) :
                        setup_postdata($post);
                        $case_study_icon = get_field('case_study_icon');

                        ?>
                        <div class="case-study__content">
                            <?php if ($case_study_icon): ?>
                                <div class="case-study__icon-wrapper">
                                    <img class="case-study__icon"
                                         src="<?= $case_study_icon['url'] ?>" alt="<?= $case_study_icon['alt'] ?>">
                                </div>
                            <?php endif; ?>
                            <h4 class="case-study__title"><?php the_title(); ?></h4>
                            <div class="case-study__separator"></div>
                            <div class="case-study__description"><?php the_content() ?></div>
                            <a href="<?php the_permalink(); ?>" class="case-study__btn primary-btn">Read More</a>

                        </div>
                    <?php
                    endforeach;
                    wp_reset_postdata(); ?>


                </div>
                <div class="case-study-images">

                    <?php foreach ($posts as $post) :
                        setup_postdata($post);
                        $case_studies_image = get_the_post_thumbnail_url();
                        ?>


                        <div class="case-study__image"
                             style="width: 500px; height: 500px; background-image: <?= (has_post_thumbnail()) ? 'url(' . $case_studies_image . ')' : '' ?>">

                        </div>
                    <?php
                    endforeach;
                    wp_reset_postdata(); ?>

                </div>
            </div>


            <!--            <div class="case-studies">-->
            <!---->
            <!--            </div>-->
        </div>
    </div>
</div>


<!--<form style="text-align: center;" role="search" method="get" class="search-form" action="--><?php //echo home_url('/'); ?><!--">-->
<!--    <label>-->
<!--        <span class="screen-reader-text">--><?php //echo _x('Search for:', 'label') ?><!--</span>-->
<!--        <input type="search" class="search-field" placeholder="--><?php //echo esc_attr_x('Search …', 'placeholder') ?><!--"-->
<!--               value="--><?php //echo get_search_query() ?><!--" name="s"-->
<!--               title="--><?php //echo esc_attr_x('Search for:', 'label') ?><!--"/>-->
<!--        <input type="hidden" name="post_type" value="case-study"/>-->
<!--    </label>-->
<!--    <input type="submit" class="search-submit" value="--><?php //echo esc_attr_x('Search', 'submit button') ?><!--"/>-->
<!--</form>-->
<!---->
