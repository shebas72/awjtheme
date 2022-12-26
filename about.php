<?php /* Template Name: big_header */ ?>

<?php get_header(); ?>


<section class="page-title" style="background-image:url(<?php bloginfo('template_url'); ?>/images/background/all2.jpg)">
		<div class="auto-container">
			<div class="content">
				<h2><?php echo get_the_title(); ?></h2>
				<ul class="page-breadcrumb">
					<li>Home</li>
					<li>About us</li>
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
