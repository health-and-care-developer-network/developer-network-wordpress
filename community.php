 <?php
/*
Template Name: z_Community Community
*/
?>

<?php get_header(); ?>
		
<div role="main" class="main single-community">
	<div class="page_title">
		<div class="wrapper">
			<hgroup>
				<h1>Community</h1>
				<h2>Links to forums and sites to get involved in the community</h2>
			</hgroup>
		</div>
	</div><!--end page title-->
	<div class="main_content cf">
		<?php include_once "breadcrumbs.php"; ?>

		<div class="wrapper cf container">
			<div class="one_quarter tree_wrap">
			</div>

			<div class="three_quarters">
				<?php if( get_field('community_links') ): ?>
				<?php while( has_sub_field('community_links') ): ?>

				
					<div class="content_wrap">
						<article class="blog_post cf">
							<h3><a target="_blank" href="<?php the_sub_field('link_url');?>"><?php the_sub_field('link_title');?></a></h3>
							<p><?php the_sub_field('link_description');?></p>
							<a target="_blank" href="<?php the_sub_field('link_url');?>" class="btn aquaGreen_btn"><?php the_sub_field('link_label');?><span class="btn_icon" aria-hidden="true" data-icon=")"></span></a>
						</article>
					</div><!--end content wrap-->
				
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div><!--end two thirds-->
		</div><!--end wrapper-->
	</div><!--end main_content-->
</div><!-- end main -->
		
<?php get_footer(); ?>
