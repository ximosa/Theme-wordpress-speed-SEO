<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package webgae
 */
?>

	<?php
	// If footer sidebars do not have widget let's bail.

	if ( ! is_active_sidebar( 'home-widget-1' ) && ! is_active_sidebar( 'home-widget-2' ) && ! is_active_sidebar( 'home-widget-3' ) )
		return;

	// If we made it this far we must have widgets.
	?>


	<div>
		<?php if ( is_active_sidebar( 'home-widget-1' ) ) : ?>
		<div class="front-page-1 image-section">
			<?php dynamic_sidebar( 'home-widget-1' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-2' ) ) : ?>
		<div class="solid-section">
			<?php dynamic_sidebar( 'home-widget-2' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-3' ) ) : ?>
		<div class="front-page-3 image-section">
			<?php dynamic_sidebar( 'home-widget-3' ); ?>
		</div><!-- .widget-area .third -->
		<?php endif; ?>
	</div>
