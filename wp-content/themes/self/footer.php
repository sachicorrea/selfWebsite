<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package self
 */

?>
	<!--
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'self' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'self' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'self' ), 'self', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer>
	-->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col_two_third">
						<div class="col_one_third">
							<div class="widget clearfix">
								<img src="<?php echo get_theme_file_uri('images/footer-widget-logo.png');?>" alt="" class="footer-logo">

								<?php if( dynamic_sidebar('footer_message') ) : else : endif; ?>

								<div style="background: url('<?php echo get_theme_file_uri('images/world-map.png'); ?>') no-repeat center center; background-size: 100%;">
									<strong>Oficina:</strong>
									<address>
										<?php if( dynamic_sidebar('footer_office') ) : else : endif; ?>
									</address>

									<abbr title="Phone Number"><strong>Teléfono:</strong></abbr><?php if( dynamic_sidebar('footer_cellphone') ) : else : endif; ?>
									<abbr title="Email Address"><strong>Correo:</strong></abbr><?php if( dynamic_sidebar('email_cellphone') ) : else : endif; ?>
								</div>
							</div>
						</div>

						<div class="col_one_third">
							<div class="widget clearfix">
								<h4>Desarrollo<br/>de Personas</h4>
								<ul>
									<li><a href="lab.html">Labs de Gestión de Personas</a></li>
									<li><a href="ejecutivo.html">Coaching Ejecutivo</a></li>
								</ul>	

								<h4>Desarrollo<br/>de Equipos</h4>		
								<ul>
									<li><a href="teambuilding.html">Integración de Equipos</a></li>
									<li><a href="equipos.html">Coaching de Equipos</a></li>
								</ul>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="widget clearfix">
								<h4>Aprendizaje Organizacional</h4>
								<ul>
									<li><a href="curricular.html">Diseño de Programas</a></li>
									<li><a href="instruccional.html">Diseño Instruccional</a></li>
								</ul>

								<h4>Programas<br/>de Especialización</h4>		
								<ul>
									<li><a href="leadercoach.html">Leader-Coach</a></li>
									<li><a href="ttt.html">Formación de Formadores</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!--<div class="col_one_third col_last">
						<div class="fb-page" data-href="https://www.facebook.com/SelfDesarrolloPersonas/" data-tabs="timeline" data-height="350" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SelfDesarrolloPersonas/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SelfDesarrolloPersonas/">Self, Desarrollo de Personas</a></blockquote></div>
					</div>-->
				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container clearfix">
					<div class="col_half">
						Derechos de uso &copy; 2018 Todos los derechos reservados por Self, Desarrollo de Personas.<br>
						<div class="copyright-links"><a href="avisolegal.html">Terminos de uso</a> / <a href="privacidad.hmtl">Política de Privacidad</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/SelfDesarrolloPersonas" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="https://www.linkedin.com/company/self-desarrollo-personas/" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@coaching.pe <span class="middot">&middot;</span> <i class="icon-headphones"></i> 923.102.557 
					</div>
				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

<?php wp_footer(); ?>

</body>
</html>
