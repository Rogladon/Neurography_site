<?php
/**
 * Callback functions for active_callback
 *
 * @package Education_Soul
 */

if ( ! function_exists( 'education_soul_is_news_ticker_active' ) ) :

	/**
	 * Check if news ticker is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_news_ticker_active( $control ) {

		if ( $control->manager->get_setting( 'theme_options[show_ticker]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_slider_active_non_demo' ) ) :

	/**
	 * Check if featured slider is active and non demo.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_slider_active_non_demo( $control ) {

		if ( 'demo-slider' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_slider_active_non_demo_non_image' ) ) :

	/**
	 * Check if featured slider is active and non demo and also non image
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_slider_active_non_demo_non_image( $control ) {

		if ( 'demo-slider' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() && 'featured-image' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_page_slider_active' ) ) :

	/**
	 * Check if featured page slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_page_slider_active( $control ) {

		if ( 'featured-page' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_post_slider_active' ) ) :

	/**
	 * Check if featured post slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_post_slider_active( $control ) {

		if ( 'featured-post' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_image_slider_active' ) ) :

	/**
	 * Check if featured image slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_image_slider_active( $control ) {

		if ( 'featured-image' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_category_slider_active' ) ) :

	/**
	 * Check if featured category slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_category_slider_active( $control ) {

		if ( 'featured-category' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_tag_slider_active' ) ) :

	/**
	 * Check if featured tag slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_tag_slider_active( $control ) {

		if ( 'featured-tag' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_slider_active_non_demo' ) ) :

	/**
	 * Check if featured slider is active and non demo.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_slider_active_non_demo( $control ) {

		if ( 'demo-slider' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_slider_active_non_demo_non_image' ) ) :

	/**
	 * Check if featured slider is active and non demo and also non image
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_slider_active_non_demo_non_image( $control ) {

		if ( 'demo-slider' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() && 'featured-image' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_page_slider_active' ) ) :

	/**
	 * Check if featured page slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_page_slider_active( $control ) {

		if ( 'featured-page' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_post_slider_active' ) ) :

	/**
	 * Check if featured post slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_post_slider_active( $control ) {

		if ( 'featured-post' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_image_slider_active' ) ) :

	/**
	 * Check if featured image slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_image_slider_active( $control ) {

		if ( 'featured-image' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_category_slider_active' ) ) :

	/**
	 * Check if featured category slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_category_slider_active( $control ) {

		if ( 'featured-category' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_tag_slider_active' ) ) :

	/**
	 * Check if featured tag slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_tag_slider_active( $control ) {

		if ( 'featured-tag' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_slider_active_non_demo' ) ) :

	/**
	 * Check if featured slider is active and non demo.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_slider_active_non_demo( $control ) {

		if ( 'demo-slider' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_slider_active_non_demo_non_image' ) ) :

	/**
	 * Check if featured slider is active and non demo and also non image
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_slider_active_non_demo_non_image( $control ) {

		if ( 'demo-slider' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() && 'featured-image' !== $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_page_slider_active' ) ) :

	/**
	 * Check if featured page slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_page_slider_active( $control ) {

		if ( 'featured-page' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_post_slider_active' ) ) :

	/**
	 * Check if featured post slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_post_slider_active( $control ) {

		if ( 'featured-post' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_image_slider_active' ) ) :

	/**
	 * Check if featured image slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_image_slider_active( $control ) {

		if ( 'featured-image' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_category_slider_active' ) ) :

	/**
	 * Check if featured category slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_category_slider_active( $control ) {

		if ( 'featured-category' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_tag_slider_active' ) ) :

	/**
	 * Check if featured tag slider is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_tag_slider_active( $control ) {

		if ( 'featured-tag' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_featured_slider_caption_active' ) ) :

	/**
	 * Check if featured slider caption is active.
	 *
	 * @since 0.1
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_featured_slider_caption_active( $control ) {

		if ( true === $control->manager->get_setting( 'theme_options[featured_slider_enable_caption]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_image_in_archive_active' ) ) :

	/**
	 * Check if image in archive is active.
	 *
	 * @since 1.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_image_in_archive_active( $control ) {

		if ( 'disable' !== $control->manager->get_setting( 'theme_options[archive_image]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'education_soul_is_image_in_single_active' ) ) :

	/**
	 * Check if image in single is active.
	 *
	 * @since 1.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function education_soul_is_image_in_single_active( $control ) {

		if ( 'disable' !== $control->manager->get_setting( 'theme_options[single_image]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;
