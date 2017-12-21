<?php
/*
 * Template Name: Category Landing Page
 * Description: Landing page layout for a category
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('categoryLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="categoryLanding__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="categoryLanding__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="capabilityBlocks" class="categoryLanding__capabilityBlocks">
          <?php get_template_part('partials/media', 'capabilityBlocks'); ?>
        </section>
        <section id="supplementaryContent" class="categoryLanding__supplementaryContent">
          <?php get_template_part('partials/content', 'supplementary'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="categoryLanding__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="categoryLanding__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="categoryLanding__footerContent">
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
