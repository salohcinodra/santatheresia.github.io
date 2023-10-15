<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  return-blog 1.0.0
 * @access public
 */
final class lead_education_Go_Pro {

	/**
	 * Returns the instance.
	 *
	 * @since return-blog 1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since return-blog 1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since return-blog 1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since return-blog 1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require get_template_directory() . '/inc/customizer/section-go-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'lead_education_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new lead_education_Customize_Section_Pro(
				$manager,
				'return-blog',
				array(
					'title'    => esc_html__( 'Lead Education Pro','lead-education' ),
					'pro_text' => esc_html__( 'Buy Pro','lead-education' ),
					'pro_url'  => esc_url( 'https://wildthemes.com/downloads/lead-education-pro/' )
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since return-blog 1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'return-blog-go-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/go-pro-customize-controls.js', array( 'customize-controls' ) );

	}
}

// Doing this customizer thang!
lead_education_Go_Pro::get_instance();
