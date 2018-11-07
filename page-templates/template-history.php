<?php
/*
 * Template Name: History
 * Description: History page layout
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('history'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <section id="navigationMenu" class="history__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="history__intro">
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="timeline" class="history__timeline">
          <?php get_partial('content', 'timeline'); ?>
        </section>
        <section id="linkedMedia" class="history__linkedMedia">
          <?php get_partial('media', 'linked-block'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="history__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="history__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="history__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
    get_partial('meta', 'foot');
    ?>

  </body>

</html>
