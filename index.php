<!doctype html>
<html <?php language_attributes(); ?>>

  <body <?php body_class('general'); ?>>

    <header>
      <?php // WordPress header action
        do_action('get_header');

        include(
          locate_template('./page-templates/patterns/navigation/primary.php')
        );
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
