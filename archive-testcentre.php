<?php get_header(); ?>
		<div role="main" class="main">
			<div class="page_title">
				<div class="wrapper">
					<hgroup>
						<h1>Test Centre</h1>
						<h2>Find testing tools, data and guidance</h2>
					</hgroup>
				</div>
			</div><!--end page title-->

			<div class="main_content cf">
				<?php include_once "breadcrumbs.php"; ?>
				<div class="wrapper cf">
					<div class="fw_nav_boxes">
					<?php
              echo hdnPosts::generateTemplateTransient('testcentre', function () {
	              foreach( get_categories('hide_empty=1&exclude=0') as $cat ) :
									if ( !$cat->parent ) {
										$sOut = '<div class="one_third"><div class="box"><div class="line purple_line"></div>';
										$sOut .= '<section class="nav_box purple"><h3>' . $cat->name . '</h3>';
		                                hdnPosts::$category = $cat->term_id;
										hdnPosts::$displayTree[hdnPosts::$category] = false;
										hdnPosts::processCatTree($cat->term_id, 'testcentre');
										$sOut .= hdnPosts::$sTree;
		                                $sOut .= '</section></div></div>';

										if (isset(hdnPosts::$category) && hdnPosts::$category > 0 ) {
											if (hdnPosts::$displayTree[hdnPosts::$category]) {
												echo $sOut;
											}
										} // if set
	                } // no parent
	              endforeach;

	              wp_reset_query(); //to reset all trouble done to the original query
              });
					?>

					</div><!--end content wrap-->
				</div><!--end wrapper-->
			</div><!--end main_content-->
<?php get_footer(); ?>
