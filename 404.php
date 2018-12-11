<?php
/*
 * Template Name: 404 Landing Page
 * Description: 404 page layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('generalLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <section id="navigationMenu" class="generalLanding__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="introContent" class="generalLanding__intro">
          <?php get_partial('content', 'intro-404'); ?>
        </section>
      </header>

      <main id="main" class="generalLanding__main">
        <section id="bodyContent" class="generalLanding__bodyContent">
          <?php get_partial('content', 'general-404'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="generalLanding__categoryLinks">
          <?php get_partial('links', 'category'); ?>
        </section>
        <section id="callToAction" class="generalLanding__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="generalLanding__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="generalLanding__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      get_partial('meta', 'foot');
    ?>

  </body>

</html>
