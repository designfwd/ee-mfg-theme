<?php
/*
 * Template Name: Homepage
 * Description: Homepage layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('homepage'); ?>>
    <div id="page-wrapper">

      <header id="header">
        <section id="navigationMenu" class="homepage__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="featureSlider" class="homepage__featureSlider">
          <?php get_partial('slider', 'feature'); ?>
        </section>
      </header>

      <main id="main">
        <section id="marketingBlocks" class="homepage__marketingBlocks">
          <?php get_partial('media', 'marketing-blocks'); ?>
        </section>
        <section id="capabilityStack" class="homepage__capabilityStack">
          <?php get_partial('media', 'capability-stack'); ?>
        </section>
        <section id="industrySlider" class="homepage__industrySlider">
          <?php get_partial('slider', 'industry'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="homepage__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="homepage__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="homepage__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      get_partial('meta', 'foot');
    ?>

  </body>

</html>
