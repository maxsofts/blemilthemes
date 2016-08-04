<!--News-->
<?php

$args = array(
    'posts_per_page' => 4,
    'post__in' => get_option('sticky_posts'),
    'ignore_sticky_posts' => 4,
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-video'),
            'operator' => 'NOT IN',
        )
    )
);
$query = new WP_Query($args);
?>
<section class="news blemil-green opacity-09 row">
    <fieldset class="fieldset fieldset-width-box shades white">
    </fieldset>
    <div class="border-box-bottom col s12 m8 offset-m2 l4 offset-l4">
        <div class="param">
            <span>Tin tức</span>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container row">
        <?php
        if ($query->have_posts()):$i = 0;
            $count = count($query->get_posts());
            while ($query->have_posts()):$query->the_post(); ?>
                <?php if ($i == 0): ?>
                    <div class="col s12 m6">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card blemil-card-shadow blemil-gray darken-2">
                                <div class="card-image">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('home-rectangle', array('class' => 'responsive-img')); ?>
                                    <?php else: ?>
                                        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/boy-men.jpg"
                                             alt=""
                                             class="responsive-img"/>
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <h6 class="title"><?php the_title(); ?></h6>

                                    <p><?php the_excerpt_max_charlength(60); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php if ($count > 1): ?>
                        <div class="col s12 m6">
                        <ul class="news-list-home">
                    <?php endif; ?>
                <?php else: ?>
                    <li>
                        <div class="row">
                            <div class="col s4">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('home-rectangle', array('class' => 'responsive-img')); ?>
                                    <?php else: ?>
                                        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/boy-men.jpg"
                                             alt=""
                                             class="responsive-img"/>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="col s8">
                                <div class="content">
                                    <a href="<?php the_permalink(); ?>"><h6 class="title"><?php the_title(); ?></h6></a>

                                    <p><?php the_excerpt_max_charlength(40); ?></p>

                                    <a class="view-more right" href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endwhile; ?>
            <?php if ($count > 1): ?>
                </ul>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <h1>Thông tin chưa được cập nhật</h1>
        <?php endif; ?>
    </div>

    <div class="clearfix"></div>
    <fieldset class="fieldset fieldset-width-box shades white bottom">
    </fieldset>
</section>