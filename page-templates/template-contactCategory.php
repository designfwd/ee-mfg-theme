<?php
/*
 * Template Name: Category Contact Page
 * Description: Contact page layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('categoryContact'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <section id="navigationMenu" class="categoryContact__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="categoryContact__intro">
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="contactForm" class="categoryContact__contactForm">
          <?php get_partial('content', 'contact-form'); ?>
        </section>
        <section id="contactLinks" class="categoryContact__contactLinks">
          <?php get_partial('links', 'contact'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="categoryContact__categoryLinks">
          <?php get_partial('links', 'category'); ?>
        </section>
        <section id="callToAction" class="categoryContact__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="categoryContact__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="categoryContact__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      get_partial('meta', 'foot');
    ?>

  </body>

</html>
