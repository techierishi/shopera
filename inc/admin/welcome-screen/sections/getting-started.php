<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
$current_theme = wp_get_theme();
?>

<div id="getting_started" class="welcome-screen-tab-pane active">

	<div class="shopera-tab-pane-center">

		<h1 class="shopera-welcome-screen-title">Welcome to Shopera!</h1>

		<p><?php esc_html_e( 'Shopera is an advanced, feature-rich WordPress WooCommerce theme.','shopera'); ?></p>
		<p><?php esc_html_e( 'To ensure you have the best experience while using Shopera, we have created this simple dashboard. Here you will find all information necessary to start using your theme.', 'shopera' ); ?>

	</div>

	<hr />

	<div class="shopera-tab-pane-center">

		<h1><?php esc_html_e( 'Documentation', 'shopera' ); ?></h1>
		<p><?php esc_html_e( 'In case you need help with Shopera, plese check the detailed documentation.', 'shopera' ); ?></p>
		<p><a href="http://documentation.cohhe.com/shopera" class="button button-primary" target="_blank"><?php esc_html_e( 'View documentation', 'shopera' ); ?></a></p>

	</div>

	<hr />

	<div class="shopera-tab-pane-center">

		<h1><?php esc_html_e( 'Getting started', 'shopera' ); ?></h1>

		<h4><?php esc_html_e( 'Customize everything in a single place.' ,'shopera' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'shopera' ); ?></p>
		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'shopera' ); ?></a></p>

	</div>

	<hr />

	<div class="shopera-tab-pane-center">

		<h1><?php esc_html_e( 'Get a whole new look for your site', 'shopera' ); ?></h1>

		<p><?php esc_html_e( 'Below you will find a selection of Cohhe themes that will totally transform the look of your site.', 'shopera' ); ?></p>

	</div>

	<div class="shopera-tab-pane-half shopera-tab-pane-first-half">

		<!-- Jobera -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/jobera.png'; ?>" alt="<?php esc_html_e( 'Jobera Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Jobera', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Jobera — the easiest to use job board theme available. Create a community of employers and prospective employees.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Jobera' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Jobera</span>
						<a href="https://cohhe.com/project-view/jobera/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Jobera</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=jobera"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Jobera - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Viva Hotel -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/viva.png'; ?>" alt="<?php esc_html_e( 'Viva Hotel Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Viva Hotel', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Viva hotel is a WordPress theme designed for hotels, hostels, resorts, spas and any other type of service which requires a booking type system.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Viva Hotel' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Viva Hotel</span>
						<a href="https://cohhe.com/project-view/viva-hotel/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Viva Hotel</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=viva"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Viva Hotel - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Seatera -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/seatera.png'; ?>" alt="<?php esc_html_e( 'Seatera Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Seatera', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Seatera is a powerful, feature-rich seat reservation WordPress theme which is suitable for any type of cinema, movie promotion, theaters, blogs and movie communities. Seatera lets you customize a wide variety of features from the comfort of your Dashboard.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Seatera' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Seatera</span>
						<a href="https://cohhe.com/project-view/seatera/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Seatera</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=seatera"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Seatera - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Mobera -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/mobera.png'; ?>" alt="<?php esc_html_e( 'Mobera Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Mobera', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Mobera is clean and modern MultiPurpose App Showcase WordPress Theme. Elegant objects and background’s animation, neat execution, attention to details and the broadest settings spectrum.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Mobera' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Mobera</span>
						<a href="https://cohhe.com/project-view/mobera/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Mobera</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=mobera"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Mobera - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Environmental -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/environmental.jpg'; ?>" alt="<?php esc_html_e( 'Environmental Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Environmental', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Environmental is a beautiful, responsive WordPress theme designed specifically for the needs of non-profits who do environment or humanitarian work.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Environmental' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Environmental</span>
						<a href="https://cohhe.com/project-view/environmental/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Environmental</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=environmental"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Environmental - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Shopera Pro -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/shopera-pro.jpg'; ?>" alt="<?php esc_html_e( 'Shopera Pro Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Shopera Pro', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Shopera Pro is clean, modern, responsive and highly customizable premium WooCommerce theme. It’s perfect for any kind of web shop. It looks great with all types of devices (laptops, tablets and mobiles).', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Shopera Pro' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Shopera Pro</span>
						<a href="https://cohhe.com/project-view/shopera-pro/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Shopera Pro</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.cohhe.com/shopera/"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Shopera Pro - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Matte -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/matte.jpg'; ?>" alt="<?php esc_html_e( 'Matte Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Matte', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Matte is responsive WordPress blog theme with a clean design and modern look. Matte theme is really flexible and easy to use. It can be used for business, blog, personal, travel and many more. ', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Matte' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Matte</span>
						<a href="https://cohhe.com/project-view/matte/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Matte</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/matte/"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Matte - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

	</div>

	<div class="shopera-tab-pane-half">

		<!-- Snaptube -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/snaptube.png'; ?>" alt="<?php esc_html_e( 'Snaptube Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Snaptube', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Snaptube is an advanced solution for Video hosting websites, Video portfolio and Magazine. It will help you get a professional video site up and running quickly, it is inspired by the popular websites: YouTube, Vimeo and Dribbble.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Snaptube' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Snaptube</span>
						<a href="https://cohhe.com/project-view/snaptube/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Snaptube</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=snaptube"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Snaptube - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Animal Care -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/animal_care.png'; ?>" alt="<?php esc_html_e( 'Animal Care Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Animal Care', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Animal Care theme ideal for nonprofits, charities, activists and political campaigns. It is a powerful, feature-rich theme that lets you customize a wide variety of features from the comfort of your Dashboard.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Animal Care' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Animal Care</span>
						<a href="https://cohhe.com/project-view/animal-care/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Animal Care</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=animalcare"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Animal Care - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Rive -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/rive.png'; ?>" alt="<?php esc_html_e( 'Rive Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Rive', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Rive theme is especially designed for charity, NGO, non-profit organization, donation, church or fundraising website. It is packed with amazing donation system and you only need to enter your PayPal address or Authorize.net API details to start using it!', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Rive' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Rive</span>
						<a href="https://cohhe.com/project-view/rive/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Rive</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=rive"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Rive - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Everal -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/everal.png'; ?>" alt="<?php esc_html_e( 'Everal Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Everal', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Everal is FREE and clean, modern, user friendly, highly customizable and responsive Wordpress blog theme, built for especially for you.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Everal' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Everal</span>
						<a href="https://cohhe.com/project-view/everal/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Everal</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/everal"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Everal - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Sky -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/sky.jpg'; ?>" alt="<?php esc_html_e( 'Sky Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Sky', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Sky is a beautiful, responsive, 3-in-1 WordPress listings theme. Its flexible design options make Sky perfect for listing Bed & Breakfast bookings, Vacation Packages, Estates, General Directories, and more.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Sky' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Sky</span>
						<a href="https://cohhe.com/project-view/sky/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Sky</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/sky"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Sky - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Longform Pro -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/longform-pro.jpg'; ?>" alt="<?php esc_html_e( 'Longform Pro Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Longform Pro', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'Enhance your story experience, by leveraging the power of Longform Pro Wordpress Theme, built especially for telling great stories.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Longform Pro' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Longform Pro</span>
						<a href="https://cohhe.com/project-view/longform-pro/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Longform Pro</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.cohhe.com/longform/"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Longform Pro - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Zap Lite -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/zap-lite.png'; ?>" alt="<?php esc_html_e( 'Zap Lite Theme', 'shopera' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Zap Lite', 'shopera' ); ?></h2>
					<p><?php esc_html_e( 'We can say with confidence that Zap Lite is the best free multipurpose WordPress theme. Designed to give a clean and fresh feel for your website, it puts most emphasis on the content.', 'shopera' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Zap Lite' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Zap Lite</span>
						<a href="https://cohhe.com/project-view/zap-lite/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'shopera' ), '<span class="screen-reader-text">Zap Lite</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/zap/"><?php esc_html_e( 'Live Preview','shopera'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Zap Lite - Current theme', 'shopera' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','shopera'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

	</div>


	<div class="welcome-screen-clear"></div>

</div>
