<?php /* Template Name: small_header */ ?>

<?php get_header(); ?>


<header class="pages-header bg-img valign parallaxie" style="background-image:url(<?php bloginfo('template_url'); ?>/All.jpg)"
 data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1><?php echo get_the_title(); ?></h1>
                    <div class="path">
                        <a href="#0">Home</a><span>/</span><a href="#" class="active"><?php echo get_the_title(); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->

<!---------------- Start About ---------------->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       
<?php the_content(); ?>



<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
