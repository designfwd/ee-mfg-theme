<?php
/*
 * Template Name: News Category Page
 * Description: Category page for news
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('newsCategory'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="newsCategory__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
        <section id="pageBanner" class="newsCategory__pageBanner">
          <?php get_template_part('partials/media', 'bannerNews'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="newsCategory__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="articleGrid" class="newsCategory__articleGrid">
          <?php get_template_part('partials/content', 'articleGrid'); ?>
        </section>
        <section id="newsSidebar" class="newsCategory__newsSidebar">
          <?php get_template_part('partials/sidebar', 'news'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="newsCategory__categoryLinks">
          <?php get_template_part('partials/links', 'category'); ?>
        </section>
        <section id="callToAction" class="newsCategory__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="newsCategory__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="newsCategory__footerContent">
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
