<?php
/*
 * Template Name: News Category Page
 * Description: Category page for news
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('newsCategory'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <section id="navigationMenu" class="newsCategory__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="pageBanner" class="newsCategory__pageBanner">
          <?php get_partial('media', 'banner-news'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="newsCategory__intro">
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="articleGrid" class="newsCategory__articleGrid">
          <?php get_partial('content', 'article-grid'); ?>
        </section>
        <section id="newsSidebar" class="newsCategory__newsSidebar">
          <?php get_partial('sidebar', 'news'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="newsCategory__categoryLinks">
          <?php get_partial('links', 'category'); ?>
        </section>
        <section id="callToAction" class="newsCategory__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="newsCategory__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="newsCategory__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      get_partial('meta', 'foot');
    ?>

  </body>

</html>
