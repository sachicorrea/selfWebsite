<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package self
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="stretched" <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!--<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'self' ); ?></a>-->

	<!--<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0&appId=1687990311250297&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>-->


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<!--
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$self_description = get_bloginfo( 'description', 'display' );
				if ( $self_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $self_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'self' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
		-->

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
			<div id="header-wrap">

				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo get_theme_file_uri('images/logo-dark.png');?>"><img src="<?php echo get_theme_file_uri('images/logo.png');?>" alt="Self Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?php echo get_theme_file_uri('images/logo-dark@2x.png');?>"><img src="<?php echo get_theme_file_uri('images/logo@2x.png');?>" alt="Self Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">
						<ul>
							<li class="mega-menu"><a href="#"><div>Organizaciones</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-4">
										<div class="entry-title">
											<h5><span>MAXIMIZA EL DESEMPEÑO<span></h5>
											<p class="topmargin-sm nobottommargin" align="justify">Mejora el desempeño de los ejecutivos clave y gerentes en tu organización con nuestras soluciones especializadas de desarrollo de personas:</p>
										</div>
										<br/>
									</ul>

									<ul class="mega-menu-column col-sm-2">
										<li class="mega-menu-title"><div>DESARROLLO DE PERSONAS</div>
											<ul>
												<li><a href="lab.html"><div>Laboratorios de Gestión de Personas</div></a></li>
												<li><a href="ejecutivo.html"><div>Coaching Ejecutivo</div></a></li>
											</ul>
										</li>
									</ul>

									<ul class="mega-menu-column col-sm-2">
										<li class="mega-menu-title"><div>DESARROLLO DE EQUIPOS</div>
											<ul>
												<li><a href="teambuilding.html"><div>Integración de Equipos /<br/>Team Building</div></a></li>
												<li><a href="equipos.html"><div>Coaching de Equipos</div></a></li>
											</ul>
										</li>	
																				
									</ul>
									
									<ul class="mega-menu-column col-sm-2">
										<li class="mega-menu-title"><div>APRENDIZAJE ORGANIZACIONAL</div>
											<ul>
												<li><a href="curricular.html"><div>Malla Curricular &amp;<br/>Diseño de Programas</div></a></li>
												<li><a href="instruccional.html"><div>Diseño Instruccional</div></a></li>
											</ul>
										</li>
									</ul>

									<ul class="mega-menu-column col-sm-2">
										<li class="mega-menu-title"><div>PROGRAMAS DE ESPECIALIZACIÓN</div>
											<ul>
												<li><a href="leadercoach.html"><div>Leader-Coach</div></a></li>
												<li><a href="ttt.html"><div>Formación de Formadores</div></a></li>
											</ul>	
										</li>
									</ul>
								</div>
							</li>
							
							<li class="mega-menu"><a href="#"><div>Personas</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<div class="entry-title">
											<h5><span>CULTIVA BIENESTAR<span></h5>
											<p class="topmargin-sm nobottommargin" align="justify">Cultiva Bienestar en tu vida, con nuestros programas de bienestar.</p>
										</div>
									</ul>

									<ul class="mega-menu-column col-sm-3">
										<li class="mega-menu-title"><a href="#"><div>PROCRASTINACIÓN, INCERTIDUMBRE, &amp; REDISEÑO DE VIDA</div></a>
											<ul>
												<li><a href="#"><div>Lab de Rediseño de Vida</div></a></li>
												<li><a href="#"><div>MasterMind de Innovación Personal</div></a></li>
												<li><a href="#"><div>Coaching de Vida 1-a-1</div></a></li>
											</ul>
										</li>
									</ul>
									
									<ul class="mega-menu-column col-sm-3">
										<li class="mega-menu-title"><a href="#"><div>INNOVACIÓN DE CARRERA</div></a>
											<li><a href="#"><div>Lab de Rediseño de Carrera</div></a></li>
											<li><a href="#"><div>Mastermind de Innovación Profesional</div></a></li>
											<li><a href="#"><div>Coaching de Carrera 1-a-1</div></a></li>
										</li>
									</ul>

									<ul class="mega-menu-column col-sm-3">
										<li class="mega-menu-title"><a href="#"><div>REGENERACIÓN DE RELACIONES</div></a>
											<li><a href="#"><div>Coaching en Relaciones 1-a-1</div></a></li>
											<li><a href="#"><div>Coaching en Parejas</div></a></li>
										</li>
									</ul>		
								</div>	
							</li>

							<li class="mega-menu"><a href="#"><div>Especialización</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<div class="entry-title">
											<h5><span>FACILITA EL APRENDIZAJE Y LA TRANSFORMACIÓN<span></h5>
											<p class="topmargin-sm nobottommargin" align="justify">Facilita el aprendizaje y la transformación en otros. Especializate progresivamente con nuestros programas modulares.</p>
										</div>
									</ul>
									<ul class="mega-menu-column col-sm-3">
										<li class="mega-menu-title"><a href="esp-ttt.html"><div>Train the Trainers</div></a>
											<ul>
												<li><a href="#"><div>Intro a Habilidades de Capacitación</div></a></li>
												<li><a href="#"><div>Diseño & Gestión de Experiencias de Aprendizaje</div></a></li>
												<li><a href="#"><div>Diseño & Gestión de Programas de Aprendizaje</div></a></li>
												<li><a href="#"><div>Supervisión de Casos</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-sm-3">
										<li class="mega-menu-title"><a href="aprauto.html"><div>Aprendizaje AutoDirigido</div></a>
											<ul>
												<li><a href="#"><div>Lab de Aprendizaje Autodirigido</div></a></li>
												<li><a href="#"><div>Mastermind de Teorías y Estrategias de Aprendizaje y Desarrollo</div></a></li>
												<li><a href="#"><div>Supervisión de Casos</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-sm-3">
										<li class="mega-menu-title"><a href="cambio.html"><div>Gestión del Cambio en Personas</div></a>
											<ul>
												<li><a href="#"><div>Lab de Transformación Personal</div></a></li>
												<li><a href="#"><div>Mastermind de Teorías y Estrategias de Transformación Personal</div></a></li>
												<li><a href="#"><div>Supervisión de Casos</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>	
							<li class="mega-menu"><a href="/blog/index.php"><div>Blog</div></a></li>
											
							<li class="mega-menu"><a href="contact.html"><div>Contáctanos</div></a></li>	
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Tipea &amp; da Enter..">
							</form>
						</div><!-- #top-search end -->
					</nav><!-- #primary-menu end -->
				</div>
			</div>
		</header><!-- #masthead -->
