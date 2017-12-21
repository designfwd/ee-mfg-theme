<?php
/*
 * Template Name: Category Contact Page
 * Description: Contact page layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('contactCategory'); ?>>

    <header>
      <?php // WordPress header action
        do_action('get_header');
      ?>
    </header>

    <main>
      <?php
        if ( have_posts() ):
          while ( have_posts() ):
            the_post();
          endwhile;
        endif;
      ?>
    </main>

    <footer>
    </footer>

    <?php // Page Footer
      do_action('get_footer');
      wp_footer();
    ?>

  </body>

</html>
