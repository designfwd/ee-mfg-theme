<?php
/*
 * Template Name: History
 * Description: History page layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('history'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="history__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="history__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="timeline" class="history__timeline">
          <?php get_template_part('partials/content', 'timeline'); ?>
        </section>
        <section id="linkedMedia" class="history__linkedMedia">
          <?php get_template_part('partials/media', 'linkedBlock'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="history__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="history__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="history__footerContent">
          <?php get_template_part('partials/content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      do_action('get_footer');
      wp_footer();
    ?>

  </body>

</html>
