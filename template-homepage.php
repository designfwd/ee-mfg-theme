<?php
/*
 * Template Name: Homepage
 * Description: Homepage layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('homepage'); ?>>
    <div id="page-wrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="homepage__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
        <section id="featureSlider" class="homepage__featureSlider">
          <?php get_template_part('partials/slider', 'feature'); ?>
        </section>
      </header>

      <main id="main">
        <section id="marketingBlocks" class="homepage__marketingBlocks">
          <?php get_template_part('partials/media', 'marketingBlocks'); ?>
        </section>
        <section id="capabilityStack" class="homepage__capabilityStack">
          <?php get_template_part('partials/media', 'capabilityStack'); ?>
        </section>
        <section id="industrySlider" class="homepage__industrySlider">
          <?php get_template_part('partials/slider', 'industry'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="homepage__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="homepage__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="homepage__footerContent">
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
