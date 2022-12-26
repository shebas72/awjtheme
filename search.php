<?php


get_header();
?>

<section class="page-title" style="background-image:url(<?php bloginfo('template_url'); ?>/images/background/all2.jpg)">
		<div class="auto-container">
			<div class="content">
				<h2><?php echo get_the_title(); ?></h2>
				<ul class="page-breadcrumb">
					<li>Home</li>
					
					<li><a href="#">Search result</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="story-section">
		<div class="auto-container">
						<!-- Story Block -->
						<div class="story-block">
							<!--<div class="pattern-layer" style="background-image:url(images/background/pattern-3.png)"></div>-->
							<div class="inner-box">
								<div class="clearfix">
									
									<!-- Image Column -->
								
									<!-- Content Column -->
									<div class="content-column col-lg-12 col-md-12 col-sm-12">

									<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="s" value="" placeholder="Search Here" required >
                    
                    </fieldset>
                </div>
            </form>
			<br>
			<br>
			<br>
								
										<div class="sec-title">
											<div class="inner-title">
												<!-- <div class="title">Search result for:</div> -->
												<h2><?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"</h2>
											</div>
										</div>
									
										<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<ul>
<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
<li><a href="<?php the_permalink();?>" style="color:#85744f; font-size:26px">		<?php the_title();?> </a></li>
</div>

</ul>
										
									


										<?php endwhile; ?>
                              <?php wp_reset_postdata(); ?>

                            <?php else : ?>
								<h4><?php _e('Nope:( no posts yet.', 'vetsandpets'); ?><h4>
                            <?php endif; ?>
										</div>
									</div>
									
								</div>
							</div>
						</div>
			<!-- Story Block Two -->
		
			
		</div>
	</section>


<?php
get_footer();
