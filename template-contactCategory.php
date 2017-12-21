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
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="contactCategory__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="contactCategory__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="contactForm" class="contactCategory__contactForm">
          <?php get_template_part('partials/content', 'contactForm'); ?>
        </section>
        <section id="contactLinks" class="contactCategory__contactLinks">
          <?php get_template_part('partials/links', 'contact'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="contactCategory__categoryLinks">
          <?php get_template_part('partials/links', 'category'); ?>
        </section>
        <section id="callToAction" class="contactCategory__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="contactCategory__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="contactCategory__footerContent">
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
