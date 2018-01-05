<?php
/*
 * Template Name: Category Contact Page
 * Description: Contact page layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('categoryContact'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="categoryContact__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="categoryContact__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="contactForm" class="categoryContact__contactForm">
          <?php get_template_part('partials/content', 'contactForm'); ?>
        </section>
        <section id="contactLinks" class="categoryContact__contactLinks">
          <?php get_template_part('partials/links', 'contact'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="categoryContact__categoryLinks">
          <?php get_template_part('partials/links', 'category'); ?>
        </section>
        <section id="callToAction" class="categoryContact__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="categoryContact__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="categoryContact__footerContent">
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
