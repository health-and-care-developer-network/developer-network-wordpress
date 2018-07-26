		<footer>
			<div class="wrapper cf">
				<nav>
					<ul class="cf">
						<li><a href="/accessibility">Accessibility</a></li>
						<li><a href="/privacy">Privacy</a></li>
						<li><a href="/cookie-policy">Cookie Policy</a></li>
                        <li><a class="last" href="mailto:enquiries@nhsdigital.nhs.uk">Contact Us</a></li>
					</ul>
				</nav>

				<p><a target="_blank" href="//www.nationalarchives.gov.uk/information-management/our-services/crown-copyright.htm" class="copyright">&copy; Crown Copyright <?php echo date("Y") ?></a></p>
			</div><!-- end wrapper -->
		</footer>

        <script>
            if (window['jQuery']) {
                window.$ = window.jQuery;
            }
        </script>
				
				<script src="<?php bloginfo('template_directory'); ?>/js/landing/promise.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/landing/fetch.min.js"></script>
				<script src="<?php bloginfo('template_directory'); ?>/js/plugins-ck.js"></script>
				<script src="<?php bloginfo('template_directory'); ?>/js/script-ck.js"></script>
				<script src="<?php bloginfo('template_directory'); ?>/js/landing/site.js"></script>
				<?php wp_footer(); ?>

        <!-- Google Analytics code-->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(
                ['_setAccount', 'UA-13017909-3'],
		['_gat._anonymizeIp'],
                ['_trackPageview'],
                ['b._setAccount', 'UA-38028819-4'],
                ['b._trackPageview'],
                ['c._setAccount', 'UA-67811038-1'],
                ['c._trackPageview']
            );
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
	</body>
</html>
