<?php
/**
 * The template for displaying search forms in Shape
 *
 * @package Shape
 * @since Shape 1.0
 */
?>
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
  <label for="s" class="assistive-text"><?php _e( 'Search' ); ?></label>
        <input name="s" type="text" class="field" id="s" placeholder="<?php esc_attr_e( 'Buscar …'); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" size="90%" />
        
    </form>