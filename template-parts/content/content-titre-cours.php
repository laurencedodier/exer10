<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<?php


		
 		$no_session =  substr(get_the_title(),4,1);
		the_title( sprintf( '<h2 class="entry-title %s"><a href="%s" rel="bookmark">','session'.$no_session,  esc_url( get_permalink() ) ), '</a></h2>' );
		?>

