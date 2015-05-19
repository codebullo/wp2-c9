<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		
		<div class="footer-above">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <h3>Location</h3> 3481 Melrose Place Beverly Hills, CA 90210

            </div>
            <div class="col-md-4">
                <h3>Around the Web</h3>
                <div class="social">
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>

                    </ul>
                </div>
                <!-- Cierre div social-->
            </div>
            <div class="col-md-4">
                <h3>About Freelancer</h3> Freelance is a free, open source Bootstrap <a href="http://startbootstrap.com">Start Bootstrap</a>.

            </div>
        </div>
    </div>
</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://www.soloaplicaciones.com', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Creado por Soloaplicaciones.com', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/js/swiper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/js/swiper.min.js"> </script>
	<script src="/js/swiperpersonal.js"></script>	
	
</body>
</html>