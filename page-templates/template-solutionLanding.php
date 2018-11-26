<?php
/*
 * Template Name: Solution Landing Page
 * Description: Landing page for a solution
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_partial('meta', 'head'); ?>

  <body <?php body_class('solutionLanding'); ?>>
    <div id="pageWrapper">

      <header id="header">
        <section id="navigationMenu" class="solutionLanding__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
      </header>

      <main id="main">
        <section id="introContent" class="solutionLanding__intro">
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="featuredImage" class="solutionLanding__featuredImage">
          <?php get_partial('media', 'feature-solution'); ?>
        </section>
        <section id="bodyContent" class="solutionLanding__bodyContent">
          <?php get_partial('content', 'solution'); ?>
        </section>
        <section id="marketingBlocks" class="solutionLanding__marketingBlocks">
          <?php get_partial('media', 'solution-marketing'); ?>
        </section>
        <section id="solutionCapabilities" class="solutionLanding__solutionCapabilities">
          <?php get_partial('media', 'solution-capabilities'); ?>
        </section>
        <section id="caseStudies-wrapper"> <section class="caseStudies-wrapper-container">
          <section id="caseStudies" class="solutionLanding__caseStudies">
            <?php get_partial('links', 'case-studies'); ?>
          </section>
          <section id="resources" class="solutionLanding__resources">
            <?php get_partial('links', 'resources'); ?>
          </section>
        </section></section>
        <section id="productGrid" class="solutionLanding__productGrid">
          <?php get_partial('media', 'product-grid'); ?>
        </section>
      </main>

      <footer id="footer">
        <section id="callToAction" class="solutionLanding__callToAction">
          <?php get_partial('media', 'call-to-action'); ?>
        </section>
        <section id="footerLinks" class="solutionLanding__footerLinks">
          <?php get_partial('links', 'footer'); ?>
        </section>
        <section id="footerContent" class="solutionLanding__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

    </div>

    <?php // Page Footer
      get_partial('meta', 'foot');
    ?>

  </body>

</html>
