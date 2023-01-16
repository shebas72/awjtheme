<?php /* Template Name: small_header */ ?>

<?php get_header(); ?>


<section class="page-title" style="background-image:url(<?php bloginfo('template_url'); ?>/images/background/all2.jpg)">
		<div class="auto-container">
			<div class="content">
				<h2><?php echo get_the_title(); ?></h2>
				<ul class="page-breadcrumb">
					<li><a style="color:#fff" href="<?php echo home_url(); ?>">Home</a></li>
					<li><a style="color:#fff" href="<?php echo home_url(); ?>/our-business/introduction/">Our Business</a></li>
					<li><a href="#"><?php echo get_the_title(); ?></a></li>
				</ul>
			</div>
		</div>
	</section>

<!-- ==================== End Header ==================== -->

<!---------------- Start About ---------------->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       
<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
