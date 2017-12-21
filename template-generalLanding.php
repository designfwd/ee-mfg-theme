<?php
/*
 * Template Name: General Landing Page
 * Description: General page layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('generalLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="generalLanding__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
        <section id="pageBanner" class="generalLanding__pageBanner">
          <?php get_template_part('partials/media', 'bannerGeneral'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="generalLanding__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="featuredImage" class="generalLanding__featuredImage">
          <?php get_template_part('partials/media', 'featureGeneral'); ?>
        </section>
        <section id="bodyContent" class="generalLanding__bodyContent">
          <?php get_template_part('partials/content', 'general'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="generalLanding__categoryLinks">
          <?php get_template_part('partials/links', 'category'); ?>
        </section>
        <section id="callToAction" class="generalLanding__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="generalLanding__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="generalLanding__footerContent">
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
