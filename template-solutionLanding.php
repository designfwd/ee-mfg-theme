<?php
/*
 * Template Name: Solution Landing Page
 * Description: Landing page for a solution
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('partials/meta', 'head'); ?>

  <body <?php body_class('solutionLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <?php // WordPress header action
          do_action('get_header');
        ?>
        <section id="navigationMenu" class="solutionLanding__nav">
          <?php get_template_part('partials/navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="solutionLanding__intro">
          <?php get_template_part('partials/content', 'intro'); ?>
        </section>
        <section id="featuredImage" class="solutionLanding__featuredImage">
          <?php get_template_part('partials/media', 'featureSolution'); ?>
        </section>
        <section id="bodyContent" class="solutionLanding__bodyContent">
          <?php get_template_part('partials/content', 'solution'); ?>
        </section>
        <section id="marketingBlocks" class="solutionLanding__marketingBlocks">
          <?php get_template_part('partials/media', 'solutionMarketing'); ?>
        </section>
        <section id="solutionCapabilities" class="solutionLanding__solutionCapabilities">
          <?php get_template_part('partials/media', 'solutionCapabilities'); ?>
        </section>
        <section id="caseStudies" class="solutionLanding__caseStudies">
          <?php get_template_part('partials/links', 'caseStudies'); ?>
        </section>
        <section id="resources" class="solutionLanding__resources">
          <?php get_template_part('partials/links', 'resources'); ?>
        </section>
        <section id="productGrid" class="solutionLanding__productGrid">
          <?php get_template_part('partials/media', 'productGrid'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="solutionLanding__callToAction">
          <?php get_template_part('partials/media', 'callToAction'); ?>
        </section>
        <section id="footerLinks" class="solutionLanding__footerLinks">
          <?php get_template_part('partials/links', 'footer'); ?>
        </section>
        <section id="footerContent" class="solutionLanding__footerContent">
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
