<?php get_header(); ?>
<main class="single-post container shadow-box">
    <?php if (have_posts()): the_post(); ?>
        <div class="row">
            <div class="border-box border-box-before col hide-on-med-and-down m8 offset-m2 l6 offset-l3 blemil-green">
                <div class="param">
                    <span><?php the_title(); ?></span>
                </div>
            </div>
            <div class="border-box col s12 hide-on-large-only blemil-green">
                <div class="param">
                    <span><?php the_title(); ?></span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col s12">
                <article class="content">
                    <div class="param text-justify">
                        <div class="thumbnail">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('rectangle', array("class" => 'responsive-img materialboxed')); ?>
                            <?php endif; ?>
                        </div>
                        <div class="the_content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    <?php else: ?>

    <?php endif; ?>

</main>
<?php get_footer(); ?>
