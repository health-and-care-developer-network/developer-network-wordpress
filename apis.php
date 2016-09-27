 <?php
/*
Template Name: API Hub
*/
?>

<?php get_header(); ?>
		

<div role="main" class="main">
	<div class="page_title">
		<div class="wrapper">
			<hgroup>
				<h1>API Hub</h1>
				<h2>Explore and Make use of Nationally Defined Messaging APIs</h2>
			</hgroup>
		</div>
	</div><!--end page title-->
	
	<div class="main_content cf">
		<?php include_once "breadcrumbs.php"; ?>

		<div id="api_list">
		
			<div class="wrapper cf container">
				
				<h2 class="api_type_titles">FHIR APIs</h2>
				<?php if( get_field('fhir_apis') ): ?>
				<?php while( has_sub_field('fhir_apis') ): ?>
				<div class="one_third tree_wrap">
					<div class="box">
						<div class="line aquaBlue_line"></div>
						<section class="nav_box aquablue">
							<h3><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('capability_pack'); ?></a></h3>
							<p><?php the_sub_field('description'); ?></p>
							
							<?php if( get_sub_field('child_links') ): ?>
								<ul>
								<?php while( has_sub_field('child_links') ): ?>
									<li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a></li>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							
						</section>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			
			</div>
			<div class="wrapper cf container">
				
				<h2 class="api_type_titles">Spine Messaging APIs</h2>
				<?php if( get_field('spine_apis') ): ?>
				<?php while( has_sub_field('spine_apis') ): ?>
				<div class="one_third tree_wrap">
					<div class="box">
						<div class="line aquaBlue_line"></div>
						<section class="nav_box aquablue">
							<h3><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('capability_pack'); ?></a></h3>
							<p><?php the_sub_field('description'); ?></p>
						</section>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
					
				</div><!--end content wrap-->
			</div><!--end wrapper-->
		</div><!-- end api list -->
	</div><!--end main_content-->
</div><!-- end main -->
		
<?php get_footer(); ?>
