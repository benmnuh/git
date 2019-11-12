<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <section id="main" class="site-main" role="main">

            <?php

            // check if the flexible content field has rows of data
            if (have_rows('home__layout')):

                // loop through the rows of data
                while (have_rows('home__layout')) : the_row();


                    if (get_row_layout() == 'slider'):

                        get_template_part('template-parts/home/hero', 'slider');

                    elseif (get_row_layout() == 'features'):

                        get_template_part('template-parts/home/features');

                    elseif (get_row_layout() == 'two_columns_image_left'):

                        get_template_part('template-parts/home/two-columns-image-left');

                    elseif (get_row_layout() == 'services'):

                        get_template_part('template-parts/home/services');

                    elseif (get_row_layout() == 'works'):

                        get_template_part('template-parts/home/recent', 'works');

                    elseif (get_row_layout() == 'case_studies'):

                        get_template_part('template-parts/home/case-studies');

                    elseif (get_row_layout() == 'stats'):

                        get_template_part('template-parts/home/stats');

                    elseif (get_row_layout() == 'pricing'):

                        get_template_part('template-parts/home/pricing');

                    elseif (get_row_layout() == 'team'):

                        get_template_part('template-parts/home/team');

                    elseif (get_row_layout() == 'clients'):

                        get_template_part('template-parts/home/clients');

                    elseif (get_row_layout() == 'blog'):

                        get_template_part('template-parts/home/posts');

                    elseif (get_row_layout() == 'contact_us'):

                        get_template_part('template-parts/home/contact');

                    elseif (get_row_layout() == 'cta'):

                        get_template_part('template-parts/home/cta');

                    endif;

                endwhile;

            else :

                // no layouts found

            endif;

            ?>

        </section><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
