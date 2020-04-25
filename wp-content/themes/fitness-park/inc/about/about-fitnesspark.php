<?php
/**
 * Add ABout Theme Page
*/
function fitness_park_about_page() {
	add_theme_page( esc_html__( 'About Fitness Park', 'fitness-park' ), esc_html__( 'About Fitness Park', 'fitness-park' ), 'edit_theme_options', 'about-fitnesspark', 'fitness_park_about_page_output' );
}
add_action( 'admin_menu', 'fitness_park_about_page' );


/**
 * Render About Themes HTML
*/
function fitness_park_about_page_output() {
	$theme_data	 = wp_get_theme();
?>
	<div class="wrap">
		<h1>
			<?php /* translators: %s theme name */
				printf( esc_html__( 'Welcome to %s', 'fitness-park' ), esc_html( $theme_data->Name ) );
			?>
		</h1>
		<p class="welcome-text">
			<?php /* translators: %s theme name */
					printf( esc_html__( '%s is a user-friendly and feature-rich, intuitive and creative, powerful and impressive engaging and dynamic, tech-savvy and good looking, rapidly responsive personal trainer free WordPress theme. Its a solid toolkit for the development of awesome and modern free WordPress themes for gym centers, fitness studios, yoga studios, and CrossFit. Fitness Park multipurpose theme can also be used for other related fitness center or needs of health clubs, gymnasiums, spas and wellness centers, indoor and outdoor exercises and any other sport and health-related website. Fitness Park is one of the most accessible free WordPress themes which can easily accommodate all type of users with no coding skills to advanced or normal web developers. Fitness Park includes excellent features for gymnasiums professionals and practices of all kinds, themes have included following features one-click demo data import, customizer based theme options, page builder-friendly design, individual page &  post layout options. This Free Fitness Park WordPress theme is fully responsive, cross-browser compatible, translation ready, SEO friendly themes.', 'fitness-park' ), esc_html( $theme_data->Name ) );
				?>
				<br><br><a href="<?php echo esc_url('http://demo.sparklewpthemes.com/fitnessparkpro/'); ?>" class="button button-primary button-hero" target="_blank"><?php esc_html_e( 'Theme Demo Preview', 'fitness-park' ); ?></a>
		</p><br>
		<?php
			/**
			 * Active Tab
			*/
			if ( isset($_GET[ 'tab' ]) ) {
				$active_tab = sanitize_key($_GET[ 'tab' ]);
			} else {
				$active_tab = 'fitness_park_tab_1';
			}
		?>
		<div class="nav-tab-wrapper">
			<a href="?page=about-fitnesspark&tab=fitness_park_tab_1" class="nav-tab <?php echo $active_tab == 'fitness_park_tab_1' ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Getting Started', 'fitness-park' ); ?>
			</a>
			<a href="?page=about-fitnesspark&tab=fitness_park_tab_2" class="nav-tab <?php echo $active_tab == 'fitness_park_tab_2' ? 'nav-tab-active' : ''; ?>">
				<span class="dashicons dashicons-video-alt3"></span><?php esc_html_e( 'Video Tutorials', 'fitness-park' ); ?>
			</a>
			<a href="?page=about-fitnesspark&tab=fitness_park_tab_3" class="nav-tab <?php echo $active_tab == 'fitness_park_tab_3' ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Useful Plugins', 'fitness-park' ); ?>
			</a>
			<a href="?page=about-fitnesspark&tab=fitness_park_tab_4" class="nav-tab <?php echo $active_tab == 'fitness_park_tab_4' ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Support', 'fitness-park' ); ?>
			</a>
			<a href="?page=about-fitnesspark&tab=fitness_park_tab_5" class="nav-tab <?php echo $active_tab == 'fitness_park_tab_5' ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Free vs Pro', 'fitness-park' ); ?>
			</a>
		</div>

		<?php if ( $active_tab == 'fitness_park_tab_1' ) : ?>
			<div class="three-columns-wrap">
				<br>
				<div class="column-width-3">
					<h3><?php esc_html_e( 'Documentation', 'fitness-park' ); ?></h3>
					<p>
						<?php /* translators: %s theme name */
							printf( esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use %s.', 'fitness-park' ), esc_html( $theme_data->Name ) );
						?>
					</p>
					<a target="_blank" href="http://docs.sparklewpthemes.com/fitnesspark/" class="button button-primary"><?php esc_html_e( 'Read Full Documentation', 'fitness-park' ); ?></a>
				</div>

				<div class="column-width-3">
					<h3><?php esc_html_e( 'Demo Content', 'fitness-park' ); ?></h3>
					<p>
						<?php esc_html_e( 'Install the Demo Content in 2 clicks. Just click the button below to install demo import plugin and wait a bit to be redirected to the demo import page.', 'fitness-park' ); ?>
					</p>
					<?php if ( is_plugin_active( 'one-click-demo-import/one-click-demo-import.php' ) ) : ?>
						<a href="<?php echo esc_url( admin_url( '/themes.php?page=pt-one-click-demo-import' ) ); ?>" class="button button-primary demo-import"><?php esc_html_e( 'Go to Import page', 'fitness-park' ); ?></a>
					<?php elseif ( fitness_park_check_installed_plugin( 'one-click-demo-import', 'one-click-demo-import' ) ) : ?>
						<button class="button button-primary demo-import" id="fitnesspark-demo-content-act"><?php esc_html_e( 'Activate Demo Import Plugin', 'fitness-park' ); ?></button>
					<?php else: ?>
						<button class="button button-primary demo-import" id="fitnesspark-demo-content-inst"><?php esc_html_e( 'Install Demo Import Plugin', 'fitness-park' ); ?></button>
					<?php endif; ?>
					<!-- <a href="#" target="_blank" class="button button-primary import-video"><span class="dashicons dashicons-video-alt3"></span><?php esc_html_e( 'Video Tutorial', 'fitness-park' ); ?></a> -->
				</div>

				<div class="column-width-3">
					<h3><?php esc_html_e( 'Theme Customizer', 'fitness-park' ); ?></h3>
					<p>
						<?php /* translators: %s theme name */
							printf( esc_html__( '%s supports the Theme Customizer for all theme settings. Click "Customize" to personalize your site.', 'fitness-park' ), esc_html( $theme_data->Name ) );
						?>
					</p>
					<a target="_blank" href="<?php echo esc_url( wp_customize_url() );?>" class="button button-primary"><?php esc_html_e( 'Start Customizing', 'fitness-park' ); ?></a>
				</div>

			</div>

			
		<?php elseif ( $active_tab == 'fitness_park_tab_2' ) : ?>

			<div class="four-columns-wrap video-tutorials">

				<div class="column-width-4">
					<h3><?php esc_html_e( 'Demo Content', 'fitness-park' ); ?></h3>
					<a class="button button-primary" target="_blank" href="h#"><?php esc_html_e( 'Watch Video', 'fitness-park' ); ?></a>
					<a class="button button-secondary" href="<?php echo esc_url(admin_url('themes.php?page=about-fitnesspark&tab=fitness_park_tab_1')); ?>"></span><?php esc_html_e( 'Get Started', 'fitness-park' ); ?></a>
				</div>

			</div>

		<?php elseif ( $active_tab == 'fitness_park_tab_3' ) : ?>
			
			<div class="three-columns-wrap">
				<br><br>
				<?php
					// WooCommerce
					fitness_park_recommended_plugin( 'woocommerce', 'woocommerce' );

					// Contact Form 7
					fitness_park_recommended_plugin( 'contact-form-7', 'wp-contact-form-7' );

					// Ajax Thumbnail Rebuild
					fitness_park_recommended_plugin( 'ajax-thumbnail-rebuild', 'ajax-thumbnail-rebuild' );

					// Facebook Widget
					fitness_park_recommended_plugin( 'facebook-pagelike-widget', 'facebook_widget' );
				?>
			</div>

		<?php elseif ( $active_tab == 'fitness_park_tab_4' ) : ?>

			<div class="three-columns-wrap">
				<br>
				<div class="column-width-3">
					<h3>
						<span class="dashicons dashicons-sos"></span>
						<?php esc_html_e( 'Forums', 'fitness-park' ); ?>
					</h3>
					<p>
						<?php esc_html_e( 'Before asking a questions it highly recommended to search on forums, but if you can\'t find the solution feel free to create a new topic.', 'fitness-park' ); ?>
						<hr>
						<a target="_blank" href="<?php echo esc_url('https://sparklewpthemes.com/support/forum/wordpress-themes/free-themes/fitness-park/'); ?>"><?php esc_html_e( 'Go to Support Forums', 'fitness-park' ); ?></a>
					</p>
				</div>

				<div class="column-width-3">
					<h3>
						<span class="dashicons dashicons-admin-tools"></span>
						<?php esc_html_e( 'Changelog', 'fitness-park' ); ?>
					</h3>
					<p>
						<?php esc_html_e( 'Want to get the gist on the latest theme changes? Just consult our changelog below to get a taste of the recent fixes and features implemented.', 'fitness-park' ); ?>
						<hr>
						<a target="_blank" href="<?php echo esc_url('https://sparklewpthemes.com/update-logs/fitness-park-pro-update-logs/'); ?>"><?php esc_html_e( 'Changelog', 'fitness-park' ); ?></a>
					</p>
				</div>

			</div>

		<?php elseif ( $active_tab == 'fitness_park_tab_5' ) : ?>

			<table class="free-vs-pro form-table">
				<thead>
					<tr>
						<th>
							<a href="<?php echo esc_url('https://sparklewpthemes.com/wordpress-themes/fitnessparkpro/'); ?>" target="_blank" class="button button-primary button-hero">
								<?php esc_html_e( 'Get Fitness Park Pro', 'fitness-park' ); ?>
							</a>
						</th>
						<th class="compare-icon"><?php esc_html_e( 'Fitness Park', 'fitness-park' ); ?></th>
						<th class="compare-icon"><?php esc_html_e( 'Fitness Park Pro', 'fitness-park' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<h3><?php esc_html_e( 'One Click Demo Import', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Unlimited Color Scheme', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Different Header Layouts', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon">1</td>
						<td class="compare-icon">3</td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Reorder All Sections', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Advanced Slider Options', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'WooCommerce Support', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Pre loader settings', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Custom Widget', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Footer Copyright Editor', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Breadcrumbs Settings', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Powerful Option Panel', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Built on Customizer', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Sticky Navigation', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Sticky Sidebar', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Translation Ready', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'SEO Optimized', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>
					<tr>
						<td>
							<h3><?php esc_html_e( 'Premium Support 24/7', 'fitness-park' ); ?></h3>
						</td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
						<td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
					</tr>

					<tr>
						<td colspan="3">
							<a href="<?php echo esc_url('https://sparklewpthemes.com/wordpress-themes/fitnessparkpro/'); ?>" target="_blank" class="button button-primary button-hero">
								<strong><?php esc_html_e( 'View Full Feature List', 'fitness-park' ); ?></strong>
							</a>
						</td>
					</tr>
				</tbody>
			</table>

	    <?php endif; ?>

	</div><!-- /.wrap -->
<?php
} // end fitness_park_about_page_output

// Check if plugin is installed
function fitness_park_check_installed_plugin( $slug, $filename ) {
	return file_exists( ABSPATH . 'wp-content/plugins/' . $slug . '/' . $filename . '.php' ) ? true : false;
}

// Generate Recommended Plugin HTML
function fitness_park_recommended_plugin( $slug, $filename ) {

	$plugin_info = fitness_park_call_plugin_api( $slug );
	$plugin_desc = $plugin_info->short_description;
	$plugin_img  = ( ! isset($plugin_info->icons['1x']) ) ? $plugin_info->icons['default'] : $plugin_info->icons['1x'];
?>

	<div class="plugin-card">
		<div class="name column-name">
			<h3>
				<?php echo esc_html( $plugin_info->name ); ?>
				<img src="<?php echo esc_url( $plugin_img ); ?>" class="plugin-icon" alt="">
			</h3>
		</div>
		<div class="action-links">
			<?php if ( fitness_park_check_installed_plugin( $slug, $filename ) ) : ?>
			<button type="button" class="button button-disabled" disabled="disabled"><?php esc_html_e( 'Installed', 'fitness-park' ); ?></button>
			<?php else : ?>
			<a class="install-now button-primary" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin='. $slug ), 'install-plugin_'. $slug ) ); ?>" >
				<?php esc_html_e( 'Install Now', 'fitness-park' ); ?>
			</a>							
			<?php endif; ?>
		</div>
		<div class="desc column-description">
			<p><?php echo esc_html( $plugin_desc ) . esc_html__( '...', 'fitness-park' ); ?></p>
		</div>
	</div>

<?php
}

// Get Plugin Info
function fitness_park_call_plugin_api( $slug ) {

	$call_api = get_transient( 'fitness_park_about_plugin_info_' . $slug );

	if ( false === $call_api ) {

	    if ( ! function_exists( 'plugins_api' ) && file_exists( trailingslashit( ABSPATH ) . 'wp-admin/includes/plugin-install.php' ) ) {
	        require_once( trailingslashit( ABSPATH ) . 'wp-admin/includes/plugin-install.php' );
	    }

	    if ( function_exists( 'plugins_api' ) ) {

			$call_api = plugins_api(
				'plugin_information', array(
					'slug'   => $slug,
					'fields' => array(
						'downloaded'        => false,
						'rating'            => false,
						'description'       => false,
						'short_description' => true,
						'donate_link'       => false,
						'tags'              => false,
						'sections'          => true,
						'homepage'          => true,
						'added'             => false,
						'last_updated'      => false,
						'compatibility'     => false,
						'tested'            => false,
						'requires'          => false,
						'downloadlink'      => false,
						'icons'             => true,
					),
				)
			);

			if ( ! is_wp_error( $call_api ) ) {
				set_transient( 'fitness_park_about_plugin_info_' . $slug, $call_api, 30 * MINUTE_IN_SECONDS );
			}

		}
	}

	return $call_api;
}


// enqueue ui CSS/JS
function fitness_park_enqueue_about_page_scripts($hook) {

	if ( 'appearance_page_about-fitnesspark' != $hook ) {
		return;
	}

	wp_enqueue_style( 'fitnesspark-about-css', get_theme_file_uri( '/inc/about/css/about-page.css' ), array() );
	wp_enqueue_script( 'plugin-install' );
	wp_enqueue_script( 'updates' );
	wp_enqueue_script( 'fitnesspark-about-page-css', get_theme_file_uri( '/inc/about/js/about-fitnesspark-page.js' ), array() );

}
add_action( 'admin_enqueue_scripts', 'fitness_park_enqueue_about_page_scripts' );


// Install/Activate Demo Import Plugin 
function fitness_park_plugin_auto_activation() {

	// Get the list of currently active plugins (Most likely an empty array)
	$active_plugins = (array) get_option( 'active_plugins', array() );

	array_push( $active_plugins, 'one-click-demo-import/one-click-demo-import.php' );

	// Set the new plugin list in WordPress
	update_option( 'active_plugins', $active_plugins );

}
add_action( 'wp_ajax_fitness_park_plugin_auto_activation', 'fitness_park_plugin_auto_activation' );


// Import Plugin Data
function fitness_park_import_demo_files() {
	return array(
		array(
			'import_file_name'             => esc_html__( 'Import Demo Data', 'fitness-park' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/about/import/fitnesspark-demo.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/about/import/fitnesspark-widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/about/import/fitnesspark-customizer.dat'
		)
	);
}
add_filter( 'pt-ocdi/import_files', 'fitness_park_import_demo_files' );

// Install Menus after Import
function fitness_park_after_import_setup() {
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$top_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'menu-1' => $main_menu->term_id,
			'footer-menu'  => $top_menu->term_id,
		)
	);
}
add_action( 'pt-ocdi/after_import', 'fitness_park_after_import_setup' );

// Disable PT Branding after Import Notice
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );