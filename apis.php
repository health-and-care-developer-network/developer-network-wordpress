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
			
			<?php if( get_field('api_sections') ): ?>
			<?php while( has_sub_field('api_sections') ): ?>
			
			<div class="wrapper cf container">
				
				<h2 class="api_type_titles"><?php the_sub_field('section_name');?></h2>
				<div class="api_type_description"><?php the_sub_field('section_description');?></div>
				
				<?php if( get_sub_field('api_entries') ): ?>
				<?php while( has_sub_field('api_entries') ): ?>
				<div class="one_third tree_wrap">
					<div class="box">
						<div class="line aquaBlue_line"></div>
						<section class="nav_box aquablue">
							<h3><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('capability_pack'); ?></a></h3>
							<p><?php the_sub_field('description'); ?></p>
							
							<?php if( get_sub_field('child_links') ): ?>
								<ul>
								<?php while( has_sub_field('child_links') ): ?>
									<li><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a>
									<?php if( get_sub_field('status') ): ?>
										<span class="api_status_indicator <?php echo str_replace(" ", "-", get_sub_field('status')); ?>"><?php the_sub_field('status'); ?></span>
									<?php endif; ?>
									</li>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							
							<?php if( get_sub_field('status') ): ?>
								<p><span class="api_status_indicator <?php echo str_replace(" ", "-", get_sub_field('status')); ?>"><?php the_sub_field('status'); ?></span></p>
							<?php endif; ?>
							
						</section>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			
			</div><!--end wrapper-->
			
			<?php endwhile; ?>
			<?php endif; ?>			
			
			
		</div><!-- end api list -->
	</div><!--end main_content-->
</div><!-- end main -->

<?php get_footer(); ?>
