<?php
/*
 * Template Name: General Landing Page
 * Description: General page layout
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
        <section id="pageBanner" class="generalLanding__pageBanner">
          <?php get_partial('media', 'banner-general'); ?>
        </section>
      </header>

      <main id="main" class="generalLanding__main">
        <section id="introContent" class="generalLanding__intro">
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="featuredImage" class="generalLanding__featuredImage">
          <?php get_partial('media', 'feature-general'); ?>
        </section>
        <section id="bodyContent" class="generalLanding__bodyContent">
          <?php get_partial('content', 'general'); ?>
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
