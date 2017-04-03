<?php get_header(); ?>

		<div role="main" class="main">
			<div class="page_title">
				<div class="wrapper">
					<hgroup>
						<h1>Search Results</h1>
						<h2>Results of your search are displayed below.</h2>
					</hgroup>
				</div>
			</div><!--end page title-->
			
			<div class="main_content cf">
				<?php include_once "breadcrumbs.php"; ?>

				<div class="wrapper cf container">
				
					<div class="one_third tree_wrap">
					</div>
					<div class="two_thirds">
						<div class="content_wrap cf">
								<article class="cf">
								
									<hgroup>
										<h2>Search results for '<?php echo($s); ?>'</h2>
									</hgroup>
				
									<?php
									if ( have_posts() ) :
										while ( have_posts() ) : the_post(); ?>
								
											<div class="result">
											    <?php
												if (get_post_type() == 'fhir' || get_post_type() == 'APISpec') : ?>
													<h3><a href="<?php echo $post->permalink ?>"><?php the_title(); ?></a></h3>
													<?php
												else : ?>
													<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
													<?php
												endif; ?>
												<?php
													if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
														<div class="entry-meta">Categories: 
															<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'solr-for-wordpress-on-pantheon' ) ); ?></span>
														</div>
														<?php
													elseif (get_post_type() == 'fhir') : ?>
														<div class="entry-meta">Categories: 
															<span class="cat-links"><a href="https://fhir.nhs.uk">FHIR Resources</a></span>
														</div>
														<?php
													elseif (get_post_type() == 'APISpec') : ?>
														<div class="entry-meta">Categories: 
															<span class="cat-links"><a href="/apis">API Hub</a></span>
														</div>
														<?php
													endif;
												?>
												<?php the_excerpt(); ?>
												
											</div><!-- end result-->

										<?php endwhile; ?>
										<nav class="navigation paging-navigation" role="navigation">
											<div class="pagination loop-pagination">
												<?php
												$big = 999999999; // Need an unlikely integer.
								
												echo paginate_links( array(
													'base'               => str_replace( $big, '%#%', get_pagenum_link( $big, false ) ),
													'format'             => '?paged=%#%',
													#'current'            => max( 1, $query->get( 'paged' ) ),
													#'total'              => $query->max_num_pages,
													'prev_text'          => __( 'Previous page ', 'solr-for-wordpress-on-pantheon' ),
													'next_text'          => __( ' | Next page', 'solr-for-wordpress-on-pantheon' ),
													'before_page_number' => ' | Page ',
								
												) );
												wp_reset_postdata();
												?>
											</div>
										</nav>
									<?php else : ?>
										<article>
											<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'solr-for-wordpress-on-pantheon' ); ?></p>
										</article>
									<?php endif; ?>
									
								</article>
							</div><!--end content wrap-->
					
					</div><!--end two thirds-->

				</div><!--end wrapper-->
			</div><!--end main_content-->
		</div><!-- end main -->
		
<?php get_footer(); ?>
	