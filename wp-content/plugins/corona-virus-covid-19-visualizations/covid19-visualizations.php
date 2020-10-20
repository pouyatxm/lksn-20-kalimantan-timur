<?php
/**
 * Doc Comment.
 *
 * @link              https://www.grandplugin.com/
 * @package           covid19-visualizations
 */

/**
 * Plugin Name:       Corona Virus COVID-19 Visualizations
 * Plugin URI:        https://grandplugin.com/
 * Description:       The plugin will show live visualizations of Covid19 in your website.
 * Version:           1.0.0
 * Author:            GrandPlugin
 * Author URI:        https://grandplugin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpgpcv-corona-visualization
 * Domain Path:       /languages
 */
function wpgpcv_admin_menu() {

	add_menu_page(
		__( 'Corona Visual Page', 'wpgpcv-corona-visualization' ),
		__( 'COVID-19', 'wpgpcv-corona-visualization' ),
		'manage_options',
		'corona-visualization',
		'wpgpcv_admin_page_contents',
		'dashicons-chart-area',
		3
	);
}
add_action( 'admin_menu', 'wpgpcv_admin_menu' );

/**
 * Active Redirection.
 *
 * @return void
 */
function wpgpcv_activation_redirect() {

	$wpgpcv_page_url = 'admin.php?page=corona-visualization';

	wp_safe_redirect( $wpgpcv_page_url );
	exit;
}
add_action( 'activated_plugin', 'wpgpcv_activation_redirect' );

/**
 * Admin page contents.
 *
 * @return void
 */
function wpgpcv_admin_page_contents() {

	?>
		<h1>
			<?php esc_html_e( 'How can I put Coronavirus charts on my website?', 'wpgpcv-corona-visualization' ); ?>
		</h1>
		<h4>
			<?php esc_html_e( 'Answerer: Under each chart demo, you can copy a shortcode to place anywhere on your website. This shortcode will display the particular chat you want to show.', 'wpgpcv-corona-visualization' ); ?>
		</h4>
		<style>
		#wpgp--card {
			background: linear-gradient(140deg, rgb(57, 45, 209) 0%, rgb(142, 41, 149) 100%);
			border-radius: 16px;
			padding: 40px;
			text-align: center;
			transition: .3s;
		}
		#wpgp--card, #wpgp--card h2 {
			color: #fff;
		}
		#wpgp--card a.wpgp--link-support {
			color: rgb(251, 84, 43);
		}
		</style>
		<div id="wpgp--card" class="card">
			<h2>Grand Support</h2>
			<strong>Incredibly Top-notch Support</strong>
			<p>Heads up! If you need any Technical Support, please Submit a Support Ticket on the Support Forum.</p>
			<input type="submit" formtarget="_blank" name="submit" id="submit" class="button button-primary" value="Open a Support Ticket" onclick="window.open('https://grandplugin.com/submit-ticket/', '_blank');">
			<p>Also check out our <a class="wpgp--link-support" target="_blank" href="https://wordpress.org/plugins/search/grandplugin/">More Plugins</a>.</p>
			<p>Watch Video <a class="wpgp--link-support" target="_blank" href="https://www.youtube.com/channel/UCuAom_-bqvqHTZG2XK3WyOw/videos">Tutorials</a>.</p>
		</div>

		<div class="card" style="max-width: min-content;">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ) . 'img/screenshot-1.png'; ?>">
			<div style="padding: 30px 20px">
				<strong style="display: inline-block;"><?php esc_html_e( 'Shortcode:' ); ?></strong>
				<code style="-webkit-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all; padding: 10px;">[wpgpcv_corona]</code>
			</div>
		</div>

		<div class="card" style="max-width: min-content;">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ) . 'img/screenshot-2.png'; ?>">
			<div style="padding: 30px 20px">
				<strong style="display: inline-block;"><?php esc_html_e( 'Shortcode:' ); ?></strong>
				<code style="-webkit-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all; padding: 10px;">[wpgpcv_corona worldwide_map]</code>
			</div>
		</div>

		<div class="card" style="max-width: min-content;">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ) . 'img/screenshot-3.png'; ?>">
			<div style="padding: 30px 20px">
				<strong style="display: inline-block;"><?php esc_html_e( 'Shortcode:' ); ?></strong>
				<code style="-webkit-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all; padding: 10px;">[wpgpcv_corona total_cases]</code>
			</div>
		</div>

		<div class="card" style="max-width: min-content;">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ) . 'img/screenshot-4.png'; ?>">
			<div style="padding: 30px 20px">
				<strong style="display: inline-block;"><?php esc_html_e( 'Shortcode:' ); ?></strong>
				<code style="-webkit-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all; padding: 10px;">[wpgpcv_corona new_cases]</code>
			</div>
		</div>

		<div class="card" style="max-width: min-content;">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ) . 'img/screenshot-5.png'; ?>">
			<div style="padding: 30px 20px">
				<strong style="display: inline-block;"><?php esc_html_e( 'Shortcode:' ); ?></strong>
				<code style="-webkit-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all; padding: 10px;">[wpgpcv_corona recovery_rate]</code>
			</div>
		</div>

		<div class="card" style="max-width: min-content;">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ) . 'img/screenshot-6.png'; ?>">
			<div style="padding: 30px 20px">
				<strong style="display: inline-block;"><?php esc_html_e( 'Shortcode:' ); ?></strong>
				<code style="-webkit-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all; padding: 10px;">[wpgpcv_corona country_growth]</code>
			</div>
		</div>
	<?php
}

add_shortcode( 'wpgpcv_corona', 'wpgpcv_shortcode_content' );
/**
 * Visual init function.
 *
 * @return mixed
 */
function wpgpcv_visual_init() {

	/**
	 * The shortcode.
	 *
	 * @param array $atts attribute.
	 * @return mixed
	 */
	function wpgpcv_shortcode_content( $atts ) {

		$output = '';
		switch ( $atts[0] ) {

			case 'worldwide_chart':
				$output = '<iframe src="https://public.domo.com/cards/dJ45D" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>';
				break;

			case 'worldwide_map':
				$output = '<iframe src="https://public.domo.com/cards/bWxVg" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>';
				break;

			case 'total_cases':
				$output = '<iframe src="https://public.domo.com/cards/dG1jy" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>';
				break;

			case 'new_cases':
				$output = '<iframe src="https://public.domo.com/cards/aKg4r" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>';
				break;

			case 'recovery_rate':
				$output = '<iframe src="https://public.domo.com/cards/dNl4L" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>';
				break;

			case 'country_growth':
				$output = '<iframe src="https://public.domo.com/cards/epNEr" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>';
				break;

			default:
				$output = '<iframe src="https://public.domo.com/cards/dJ45D" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>';
				break;
		}

			return $output;
	}
}
add_action( 'init', 'wpgpcv_visual_init' );
