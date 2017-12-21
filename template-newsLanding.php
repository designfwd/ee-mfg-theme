<?php
/*
 * Template Name: News Landing Page
 * Description: Landing page for news
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('newsLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="newsLanding__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
        <section id="pageBanner" class="newsLanding__pageBanner">
          <?php get_template_part('partials/media', 'bannerNews'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="newsLanding__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="featuredImage" class="newsLanding__featuredImage">
          <?php get_template_part('partials/media', 'featureNews'); ?>
        </section>
        <section id="newsSidebar" class="newsLanding__newsSidebar">
          <?php get_template_part('partials/sidebar', 'news'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="categoryLinks" class="newsLanding__categoryLinks">
          <?php get_template_part('partials/links', 'category'); ?>
        </section>
        <section id="callToAction" class="newsLanding__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="newsLanding__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="newsLanding__footerContent">
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
