<?php
/*
 * Template Name: News Landing Page
 * Description: Landing page for news
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('newsLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <section id="navigationMenu" class="newsLanding__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="pageBanner" class="newsLanding__pageBanner">
          <?php get_partial('media', 'banner-news'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="newsLanding__intro">
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="featuredImage" class="newsLanding__featuredImage">
          <?php get_partial('media', 'feature-news'); ?>
        </section>
        <section id="newsContent" class="newsLanding__newsContent">
          <?php get_partial('content', 'news'); ?>
        </section>
        <section id="newsSidebar" class="newsLanding__newsSidebar">
          <?php get_partial('sidebar', 'news'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="newsLanding__categoryLinks">
          <?php get_partial('links', 'category'); ?>
        </section>
        <section id="callToAction" class="newsLanding__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="newsLanding__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="newsLanding__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      get_partial('meta', 'foot');
    ?>

  </body>

</html>
