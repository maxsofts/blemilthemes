<?php get_header(); ?>
<main class="single-post container shadow-box">
    <?php if (have_posts()): the_post(); ?>
        <?php
        postview_set(get_the_ID());
        ?>

        <?php $category = get_the_category(get_the_ID()); ?>
        <div class="row">
            <div class="border-box border-box-before col hide-on-med-and-down m8 offset-m2 l6 offset-l3 blemil-green">
                <div class="param">
                    <span><?php echo $category[0]->name; ?></span>
                </div>
            </div>
            <div class="border-box col s12 hide-on-large-only blemil-green">
                <div class="param">
                    <span><?php echo $category[0]->name; ?></span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col s12 m9">
                <article class="content">
                    <div class="info">
                        <h5 class="title"><?php the_title(); ?></h5>

                        <p class="left blemil-gray-text text-darken-1">Bởi <a href="<?php the_author_link(); ?>"
                                               class="author"><?php the_author() ?></a> | <?php the_time(); ?>
                            - <?php the_date('d/m/Y'); ?></p>

                        <div class="right">
                            <?php do_action('addthis_widget'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="param text-justify">
                        <div class="excerpt">
                            <?php the_excerpt(); ?>
                        </div>
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
            <div class="col s12 m3">
                <?php get_sidebar();?>
            </div>
        </div>

    <?php else: ?>

    <?php endif; ?>

</main>
<?php get_footer(); ?>
