<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article class="post-item row">
        <div class="col s4">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('rectangle', array("class" => 'responsive-img materialboxed')); ?>
            <?php else: ?>
                <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/rec.png" alt=""
                     class="responsive-img materialboxed"/>
            <?php endif; ?>
        </div>
        <div class="col s8">
            <div class="content">
                <a href="<?php the_permalink(); ?>">
                    <h6 class="title"><?php the_title(); ?></h6>
                </a>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </article>
<?php endwhile; ?>

<?php else: ?>
    <h1>Không có bài viết hiển thị</h1>
<?php endif; ?>
