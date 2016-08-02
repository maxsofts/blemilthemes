<?php get_header(); ?>
<main class="container shadow-box">
	<div class="row">
		<div class="border-box border-box-before col hide-on-med-and-down m8 offset-m2 l6 offset-l3 blemil-green">
			<div class="param">
				<span><?php echo sprintf( __( '%s kết quả cho ', 'maxthemes' ), $wp_query->found_posts ); echo get_search_query(); ?></span>
			</div>
		</div>
		<div class="border-box col s12 hide-on-large-only blemil-green">
			<div class="param">
				<span><?php echo sprintf( __( '%s kết quả cho ', 'maxthemes' ), $wp_query->found_posts ); echo '"'.get_search_query().'"'; ?></span>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- content-->
	<div class="row">
		<!-- content left -->
		<div class="col s12 m9">
			<div class="list-post">
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination');?>
			</div>
		</div><!--end content left-->
		<!-- content right-->
		<div class="col s12 m3">
			sidebar
		</div><!--end content right -->
	</div><!-- end content -->
</main>
<?php get_footer(); ?>
<!---->
<?php //get_header(); ?>
<!---->
<!--	<main role="main">-->
<!--		<!-- section -->-->
<!--		<section>-->
<!---->
<!--			<h1></h1>-->
<!---->
<!--			--><?php //get_template_part('loop'); ?>
<!---->
<!--			--><?php //get_template_part('pagination'); ?>
<!---->
<!--		</section>-->
<!--		<!-- /section -->-->
<!--	</main>-->
<!---->
<?php //get_sidebar(); ?>
<!---->
<?php //get_footer(); ?>
