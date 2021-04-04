<?php
/**
* Template Name: Home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header(); ?>

<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
		<div class="slider-parallax-inner">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Maximiza el Desempeño</h2>
								<br/>
								<H3 class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Estimula colaboración, compromiso, y creatividad<br/>en los gerentes y ejecutivos de tu organización.</H3>
							</div>
						</div>
						<div class="video-wrap">
							<video id="slide-video" poster="<?php echo get_theme_file_uri('images/videos/intro.png');?>" preload="auto" loop autoplay muted>
								<source src='<?php echo get_theme_file_uri('images/videos/bckgrnd.webm');?>' type='video/webm' />
								<source src='<?php echo get_theme_file_uri('images/videos/bckgrnd.mp4');?>' type='video/mp4' />
							</video>
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
						</div>
					</div>
				</div>

				<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
			</div>

			<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
		</div>
	</section>

	<!-- Content
	============================================= -->
	<section id="content">
		<div class="content-wrap">
			<div class="container clearfix">
				<div class="divcenter center clearfix" style="max-width: 900px;">
					<img class="bottommargin" src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="">
					<h2>Especialistas en <span>Aprendizaje &Aacute;gil &amp; Desarrollo Disruptivo.</span></h2>
					<h4>Ofrecemos soluciones que maximizan el desempeño de personas, equipos, y organizaciones.</h4>
					<a href="#seccion-soluciones" class="button button-3d button-dark button-large">Explorar soluciones</a>
					<a href="contact.html" class="button button-3d button-large">Contáctanos</a>
				</div>

				<div class="line"></div>

				<div class="col_one_third">
					<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
						<div class="fbox-icon">
						<i class="icon-phone2"></i>
						</div>
						<h3>Consultora Boutique:<br/>Alianzas de Crecimiento.</h3>
						<p align="justify">Dedicamos nuestros mejores recursos en menos clientes en paralelo para servir de un modo relevante. No solo hacemos negocios: construimos alianzas sostenibles en desarrollo, que acompañen a generar resultados. </p>
					</div>
				</div>

				<div class="col_one_third">
					<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
						<div class="fbox-icon">
						<i class="icon-eye"></i>
						</div>
						<h3>Desarrollo Disruptivo: Intervenciones Estratégicas.</h3>
						<p align="justify">Más allá de transferir conocimientos e incrementar  habilidades: intervenimos para actualizar el marco de referencia mental, que favorece o limita -hoy- el desempeño de personas.</p>
					</div>
				</div>

				<div class="col_one_third col_last">
					<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
						<div class="fbox-icon">
						<i class="icon-star2"></i>
						</div>
						<h3>Aprendizaje Ágil:<br/>Cambios Sostenibles.</h3>
						<p align="justify">Estimulamos a aprender de la experiencia para generar resultados, en el marco de las necesidades detectadas, inquietudes profesionales, y acuerdos establecidos, para maximizar el desempeño.</p>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		<div class="clear"></div>	

		<section id="section-about" class="page-section">
			<div class="container clearfix">
				<div class="heading-block center">
					<h2><br/>Nuestra <span>Esencia</span></h2>
					<span>Quiénes somos, y cómo creamos valor.</span>
				</div>

				<div class="col_one_third nobottommargin">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img src="<?php echo get_theme_file_uri('images/services/1.jpg'); ?>" alt="Why choose Us?">
						</div>
						<div class="fbox-desc">
							<h3>Por qué escogernos.<span class="subtitle">Somos especialistas.</span></h3>
							<p align="justify">Somos una potente amalgama de perspectivas educativas &amp; psicológicas. <br/>Nuestra expertise: trabajar con ejecutivos en la gestión de personas. Nos especializamos en ofrecerte experiencias a la medida de tus necesidades.</p>
						</div>
					</div>
				</div>

				<div class="col_one_third nobottommargin">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img src="<?php echo get_theme_file_uri('images/services/2.jpg'); ?>" alt="Nuestra misión.">
						</div>
						<div class="fbox-desc">
							<h3>Nuestra misión.<span class="subtitle">Maximizar el desempeño de tu gente.</span></h3>
							<p align="justify">Nos especializamos en lidiar con la esperable resistencia al cambio. Nos dedicamos a educar, acompañar, apoyar o guiar según se necesite para transicionar hacia los resultados que buscas mientras estimulamos cooperación, compromiso &amp; aprendizaje ágil en tu gente.</p>
						</div>
					</div>
				</div>

				<div class="col_one_third nobottommargin col_last">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img src="<?php echo get_theme_file_uri('images/services/3.jpg'); ?>" alt="Cómo lo hacemos.">
						</div>
						<div class="fbox-desc">
							<h3>Cómo lo hacemos.<span class="subtitle">Facilitamos el Aprendizaje &amp; Desarrollo.</span></h3>
							<p align="justify">Ofrecemos consultoría a la medida, que facilita que tu gente y equipos aprendan y se desarrollen; asesoramos en aprendizaje organizacional via diseño de programas y cursos; y ofrecemos oportunidades de especialización profesional.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</section>

		<div class="clear"></div>
		
		<div class="promo topmargin-lg nopadding bottommargin">
			<div class="container clearfix">
				<h3>Llámanos hoy al <span>923.102.557</span><br/>o escríbenos a <span>info@coaching.pe</span></h3>
				<a href="contact.html" class="button button-xlarge button-rounded" align="center">Contáctanos</a>
			</div>	
		</div>
		
		<div id="seccion-soluciones" class="clear"></div>

		<div class="topmargin-lg nopadding bottommargin">
			<div class="container clearfix">
				<div class="heading-block center">
					<h3>Nuestras <span>Soluciones</span></h3>
					<span>Facilitamos el Desarrollo de Personas y Equipos,<br/>Apalancamos el Aprendizaje Organizacional, Formamos Especialistas.</span>
				</div>

				<!-- Portfolio Filter
				============================================= -->
				<ul class="portfolio-filter clearfix" data-container="#portfolio">

					<li class="activeFilter"><a href="#" data-filter="*">Mostrar todos</a></li>
					<li><a href="#" data-filter=".pf-uielements">Desarrollo de Personas</a></li>
					<li><a href="#" data-filter=".pf-media">Desarrollo de Equipos</a></li>
					<li><a href="#" data-filter=".pf-illustrations">Aprendizaje Organizacional</a></li>
					<li><a href="#" data-filter=".pf-graphics">Programas de Especialización</a></li>
					
				</ul><!-- #portfolio-filter end -->

				<div class="portfolio-shuffle" data-container="#portfolio">
					<i class="icon-random"></i>
				</div>

				<div class="clear"></div>

				<div id="portfolio" class="portfolio grid-container clearfix">
					<article class="portfolio-item pf-uielements">
						<div class="portfolio-image">
							<a href="lab.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/6.jpg'); ?>" alt="Lab de Gestión de Personas">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="lab.html">Labs de Gestión de Personas</a></h3>
							<span>Desarrollo de Personas</span>
						</div>
					</article>

					<article class="portfolio-item pf-uielements">
						<div class="portfolio-image">
							<a href="ejecutivo.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/9.jpg'); ?>" alt="Coaching Ejecutivo">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="ejecutivo.html">Coaching Ejecutivo</a></h3>
							<span>Desarrollo de Personas</span>
						</div>
					</article>	

					<article class="portfolio-item pf-media">
						<div class="portfolio-image">
							<a href="teambuilding.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/10.jpg'); ?>" alt="Integración de Equipos">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="teambuilding.html">Integración de Equipos</a></h3>
							<span>Desarrollo de Equipos</span>
						</div>
					</article>	

					<article class="portfolio-item pf-media">
						<div class="portfolio-image">
							<a href="equipos.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/11.jpg'); ?>" alt="Coaching de Equipos">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="equipos.html">Coaching de Equipos</a></h3>
							<span>Desarrollo de Equipos</span>
						</div>
					</article>

					<article class="portfolio-item pf-illustrations">
						<div class="portfolio-image">
							<a href="curricular.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/4.jpg'); ?>" alt="Diseño de Programas">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="curricular.html">Diseño de Programas</a></h3>
							<span>Aprendizaje Organizacional</span>
						</div>
					</article>

					<article class="portfolio-item pf-illustrations">
						<div class="portfolio-image">
							<a href="instruccional.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/5.jpg'); ?>" alt="Diseño Instruccional">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="instruccional.html">Diseño Instruccional</a></h3>
							<span>Aprendizaje Organizacional</span>
						</div>
					</article>

					<article class="portfolio-item pf-graphics">
						<div class="portfolio-image">
							<a href="leadercoach.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/12.jpg'); ?>" alt="Leader-Coach">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="leadercoach.html">Leader-Coach</a></h3>
							<span>Programa de Especialización</span>
						</div>
					</article>

					<article class="portfolio-item pf-graphics">
						<div class="portfolio-image">
							<a href="ttt.html">
								<img src="<?php echo get_theme_file_uri('images/portfolio/4/8.jpg'); ?>" alt="Formación de Formadores">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="ttt.html">Formación de Formadores</a></h3>
							<span>Programa de Especialización</span>
						</div>
					</article>
				</div>
			</div>
		</div>

		<div class="clear nobottommargin"></div>
			<a href="contact.html" class="button button-full button-dark center tright footer-stick">
				<div class="container clearfix">
				8 soluciones para maximizar el desempeño. <strong>Contáctanos</strong><i class="icon-caret-right" style="top:4px;"></i>
				</div>
			</a>
		</div>
	</section><!-- #content end -->

<?php get_footer(); ?>