<?php
/*
 * Template Name: Quà tặng bé yêu
 */
get_header(); ?>
    <main class="container shadow-box">
        <?php if (have_posts()):the_post(); ?>
            <div class="row">
                <div
                    class="border-box border-box-before col hide-on-med-and-down m8 offset-m2 l6 offset-l3 blemil-primary">
                    <div class="param">
                        <span><?php the_title(); ?></span>
                    </div>
                </div>
                <div class="border-box col s12 hide-on-large-only blemil-primary">
                    <div class="param">
                        <span><?php the_title(); ?></span>
                    </div>
                </div>
            </div>


            <?php if (has_post_thumbnail()): ?>
                <div class="row">
                    <div class="padding-0 col s12 m8 offset-m2 l6 offset-l3 center">
                        <?php the_post_thumbnail("rectangle-large", array("class" => "responsive-img")) ?>
                    </div>
                </div>
            <?php endif; ?>
            <h5 class="center-align text-bold"><?php the_title(); ?></h5>
            <div class="clearfix"></div>
            <div class="content text-justify column-text column-2">

                <?php the_content(); ?>

            </div>
        <?php endif; ?>
    </main>
<?php
get_footer();
