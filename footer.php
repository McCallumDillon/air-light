<?php
/**
 * Template for displaying the footer
 *
 * Site footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package air-light
 */

namespace Air_Light;

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
  <?php get_template_part( 'template-parts/header/footer-navigation' ); ?>
  <div class="site-info">
    <span class="theme-info">
      <?php echo sprintf( esc_html__( 'Copyright &copy; %s %s. All Rights Reserved', 'mjl' ), date( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?>
    </span>
  </div>
  <!-- ...up until here -->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<a
  href="#page"
  id="top"
  class="top no-external-link-indicator"
  data-version="<?php echo esc_attr( AIR_LIGHT_VERSION ); ?>"
>
  <span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Back to top' ) ); ?></span>
  <span aria-hidden="true">&uarr;</span>
</a>

</body>
</html>
