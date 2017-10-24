<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">

				<?php get_sidebar( 'footer' ); ?>


				<?php
				if ( has_nav_menu( 'footer-menu' ) ) : ?>

					<div id="et-footer-nav">
						<div class="container">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'footer-menu',
									'depth'          => '1',
									'menu_class'     => 'bottom-nav',
									'container'      => '',
									'fallback_cb'    => '',
								) );
							?>
						</div>
					</div> <!-- #et-footer-nav -->

				<?php endif; ?>


			</footer> <!-- #main-footer -->

			<div id="footer-bottom">
				<div class="container clearfix">
					
					<div class="pull-left">Copyright &copy; <?php echo date("Y");?> - All Rights Reserved - Grievance Investigations </div>
					<div class="pull-right"> 
						<a href="">Privacy Policy</a> | 
						<a href="">Terms and Conditions</a>
					</div>


				</div>	<!-- .container -->
			</div>


		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>