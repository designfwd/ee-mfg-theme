<?php
/*
 * Template Name: Category Landing Page
 * Description: Landing page layout for a category
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('categoryLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <section id="navigationMenu" class="categoryLanding__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="categoryLanding__intro">
          <h1>Howdy</h1>
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="capabilityBlocks" class="categoryLanding__capabilityBlocks">
          <?php get_partial('media', 'capability-blocks'); ?>
        </section>
        <section id="supplementaryContent" class="categoryLanding__supplementaryContent">
          <?php get_partial('content', 'supplementary'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="categoryLanding__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="categoryLanding__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="categoryLanding__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      get_partial( 'meta', 'foot' );
    ?>

  </body>

</html>
