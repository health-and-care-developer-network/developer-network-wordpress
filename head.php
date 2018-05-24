<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
		<title><?php bloginfo('name'); ?> <?php wp_title('-');?></title>
		<meta name="Content-Type" content="<?php bloginfo('html_type'); ?>"/>
		<meta name="viewport" content="width=device-width,initial-scale=1">
	
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>?v=3"/>


		<!--[if lt IE 9]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie.css">
		<![endif]-->
		
		<!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/print.css"> -->
		<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		
		<?php wp_head(); ?> 
		<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
		<?php wp_print_scripts(); ?>

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fancybox/fancybox.css">
        <script>
            var developerHost = "<?php echo urlencode('https://' . SITE); ?>";
        </script>
        <?php
            if (get_page_template_slug() == 'landing-page.php' && SITE=='developer.nhs.uk') {
                echo <<<EOF
<script>                      
(function(h,o,t,j,a,r){               
h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};                  
h._hjSettings={hjid:265857,hjsv:5};                
a=o.getElementsByTagName('head')[0];                  
r=o.createElement('script');r.async=1;                      
r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;                     
a.appendChild(r);                   
})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');            
</script>
EOF;
            }
        ?>

		<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="30398f35-a144-4edd-a779-05481f9da7b3" type="text/javascript" async></script>
	</head>
