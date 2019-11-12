<?php

$works_title = get_sub_field('works_title');
$works_description = get_sub_field('works_description');
$args = array(
    'type' => 'works',
    'taxonomy' => 'works_categories',
    'hide_empty' => false
);
?>

<div class="works-section">
    <div class="works-section__container">
        <div class="works-section__row">

            <div class="works-section__content">
                <?php if ($works_title): ?>
                    <h2 class="works-section__title"><?= $works_title; ?></h2>

                <?php endif; ?>

                <?php if ($works_description): ?>
                    <div class="works-section__description"><?= $works_description; ?></div>
                <?php endif; ?>

                <div class="works-section__separator separator">
                    <div class="separator__left-line"></div>
                    <div class="separator__dot"></div>
                    <div class="separator__right-line"></div>
                </div>
            </div>


            <div class="works-section__works works">

                <div class="works__categories tab-link-wrapper">
                    <?php
                    $works_categories = get_categories($args); ?>
                    <div class="works__category tab-link current"
                         data-tab="all-works">All
                    </div>
                    <?php foreach ($works_categories as $works_category) :
                        $works_category_slug = $works_category->slug;
                        ?>
                        <div class="works__category tab-link"
                             data-tab="<?= $works_category_slug ?>">
                            <?= $works_category->name; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="works__container tab-content-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'works',
                        'post_status' => 'publish',
                        'posts_per_page' => 8,
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );

                    $posts = get_posts($args); ?>
                    <div class="works__category-content works-category-content tab-content current"
                         data-id="all-works">
                        <?php foreach ($posts as $post) :
                            setup_postdata($post); ?>

                            <?php
                            $work_image = get_the_post_thumbnail_url();
                            ?>

                            <div class="works-category-content__item work"
                                 style="background-image: <?= (has_post_thumbnail()) ? 'url(' . $work_image . ')' : '' ?>">
                                <a href="<?php the_permalink(); ?>" class="work__link"></a>
                                <div class="work__content">
                                    <div class="work__separator"></div>
                                    <h3 class="work__title"><?php the_title(); ?></h3>
                                    <?php echo get_the_term_list(
                                        $post->ID,
                                        'works_categories',
                                        '<span class="work__category">',
                                        '/</span><span class="work__category">',
                                        '</span>'
                                    ); ?>
                                </div>

                            </div>

                        <?php
                        endforeach;
                        wp_reset_postdata(); ?>
                    </div>

                    <?php foreach ($works_categories as $works_category) :
                        $works_category_slug = $works_category->slug;
                        $works_category_title = $works_category->name;
                        $args = array(
                            'post_type' => 'works',
                            'post_status' => 'publish',
                            'posts_per_page' => 8,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'works_categories',
                                    'field' => 'slug',
                                    'terms' => $works_category_slug,
                                )
                            )
                        );

                        $posts = get_posts($args); ?>
                        <div class="works__category-content works-category-content tab-content"
                             data-id="<?= $works_category_slug ?>">
                            <?php foreach ($posts as $post) :
                                setup_postdata($post); ?>

                                <?php $work_image = get_the_post_thumbnail_url(); ?>

                                <div class="works-category-content__item work"
                                     style="background-image: <?= (has_post_thumbnail()) ? 'url(' . $work_image . ')' : '' ?>">
                                    <a href="<?php the_permalink(); ?>" class="work__link"></a>
                                    <div class="work__content">
                                        <div class="work__separator"></div>
                                        <h3 class="work__title"><?php the_title(); ?></h3>
                                        <?php echo get_the_term_list(
                                            $post->ID,
                                            'works_categories',
                                            '<span class="work__category">',
                                            '/</span><span class="work__category">',
                                            '</span>'
                                        ); ?>
                                    </div>

                                </div>

                            <?php
                            endforeach;
                            wp_reset_postdata(); ?>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>