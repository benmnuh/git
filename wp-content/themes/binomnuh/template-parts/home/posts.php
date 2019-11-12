<?php

$blog_title = get_sub_field('blog_title');
$blog_description = get_sub_field('blog_description');

$blog_styles = get_sub_field('blog_styles');

$blog_background_choice = $blog_styles['background'];
$blog_background_image = $blog_styles['background_image'];
$blog_background_color = $blog_styles['background_color'];



functi
?>

<div class="posts-section"
     style="<?= ($blog_background_choice == 'image') ? 'background-image: url(' . $blog_background_image['url'] . ')' : 'background-color:' . $blog_background_color ?>">
    <div class="posts-section__container">
        <div class="posts-section__row">

            <div class="posts-section__content">
                <?php if ($blog_title): ?>
                    <h2 class="posts-section__title"><?= $blog_title; ?></h2>

                <?php endif; ?>

                <?php if ($blog_description): ?>
                    <div class="posts-section__description"><?= $blog_description; ?></div>
                <?php endif; ?>

                <div class="posts-section__separator separator">
                    <div class="separator__left-line"></div>
                    <div class="separator__dot"></div>
                    <div class="separator__right-line"></div>
                </div>
            </div>


            <div class="posts">


                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );

                $posts = get_posts($args); ?>

                <?php foreach ($posts as $post) :
                    setup_postdata($post); ?>

                    <?php
                    $post_image = get_the_post_thumbnail_url();
                    ?>

                    <div class="posts__item post">

                        <div class="post__image"
                             style="background-image: <?= (has_post_thumbnail()) ? 'url(' . $post_image . ')' : '' ?>">

                        </div>

                        <div class="post__content">

                            <div class="post__categories">
                                <?= get_the_term_list(
                                    $post->ID,
                                    'category',
                                    '<span class="post__category">',
                                    '</span><span class="post__category">',
                                    '</span>');
                                ?>
                            </div>


                            <h3 class="post__title"><?php the_title(); ?></h3>

                            <div class="post__separator"></div>

                            <div class="post__text"><?php the_content() ?></div>

                            <a href="<?php the_permalink(); ?>" class="post__link">
                                Read More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>

                        </div>

                    </div>

                <?php
                endforeach;
                wp_reset_postdata(); ?>


            </div>
        </div>
    </div>
</div>