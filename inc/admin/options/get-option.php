<?php

/**
 * Get BuddyBoss_Theme options
 *
 * @param string $id Option ID.
 * @param string $param Option type.
 * @param bool   $default default value.
 *
 * @return $output False on failure, Option.
 */
if ( !function_exists( 'buddyboss_theme_get_option' ) ) {

	function buddyboss_theme_get_option( $id, $param = null, $default = false ) {

		global $press_pool_options;

		/* Check if options are set */
		if ( !isset( $press_pool_options ) ) {
			$press_pool_options = get_option( 'press_pool_options', array() );
		}

		/* Check if array subscript exist in options */
		if ( empty( $press_pool_options[ $id ] ) ) {
			if ( array_key_exists( $id, $press_pool_options ) ) {
				return false;
			} else {
				// Return true if default passed to true and key not exists into the press_pool_options array.
				return ( $default ) ? true : false;
			}
		}

		/**
		 * If $param exists,  then
		 * 1. It should be 'string'.
		 * 2. '$press_pool_options[ $id ]' should be array.
		 * 3. '$param' array key exists.
		 */
		if ( !empty( $param ) && is_string( $param ) && (!is_array( $press_pool_options[ $id ] ) || !array_key_exists( $param, $press_pool_options[ $id ] ) ) ) {
			return false;
		}

		return empty( $param ) ? $press_pool_options[ $id ] : $press_pool_options[ $id ][ $param ];
	}
}
