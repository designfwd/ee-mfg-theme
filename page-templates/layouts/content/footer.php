<?php // Footer content that appears at the bottom of each page ?>
<div class="o-footerContent">
<div class="o-footerContent__mainContainer">

  <div class="o-footerContent__logoContainer">
    <img class="o-footerContent__logo" src="<?php echo get_acf_image( get_field('footer_logo', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> " />
  </div>
  <div class="o-footerContent__body">
  <?php
    
    wp_nav_menu( array(
      'container'       => 'nav',
      'container_class' => 'm-footerLinks',
      'menu_class'      => 'm-footerLinks__list',    
      'theme_location' => 'footer_nav'
    ));
  ?>

    <div class="m-footerSocial">
      <div class="m-footerSocial__button">
        <a class="a-dividedIcon a-dividedIcon--footer" href="/contact-us">
          <span class="a-dividedIcon__text">Contact Us</span>
          <span class="a-dividedIcon__icon"></span>
        </a>
      </div>
    <?php
      if(have_rows('social_links', 'option')):
        while(have_rows('social_links', 'option')): the_row();
          if(get_sub_field('footer_social_facebook', 'option')) {
            $icon = return_svg('social-facebook');
            $link = get_sub_field('footer_social_facebook', 'option');
          }
          else if(get_sub_field('footer_social_linked_in', 'option')) {
            $icon = return_svg('social-linkedin');
            $link = get_sub_field('footer_social_linked_in', 'option');
          }
          else if(get_sub_field('footer_social_twitter', 'option')) {
            $icon = return_svg('social-twitter');     
            $link = get_sub_field('footer_social_twitter', 'option');
          }
          else if(get_sub_field('footer_social_youtube', 'option')) {
            $icon = return_svg('social-youtube');    
            $link = get_sub_field('footer_social_youtube', 'option');
          }
          else if(get_sub_field('footer_social_instagram', 'option')) {
            $icon = return_svg('social-facebook'); 
            $link = get_sub_field('footer_social_instagram', 'option');
          }                
    ?>
          <a class="m-footerSocial__icon" href="<?php echo $link; ?>">
           <?php echo $icon; ?>
          </a>
    <?php
        endwhile;
      endif;
    ?>
    </div>

    <div class="m-footerContact">
    <?php
      if (have_rows('footer_locations', 'option')):
        while (have_rows('footer_locations', 'option')): the_row();
    ?>
      <div class="m-footerContact__option">
        <h5 class="m-footerContact__title">
          <?php the_sub_field('footer_location_title'); ?>
        </h5>
        <div class="m-footerContact__location">
          <a class="m-footerContact__address" href="#">
          <?php the_sub_field('footer_location_address'); ?>
          </a>
          <a class="m-footerContact__phone" href="tel:<?php the_sub_field('footer_location_phone'); ?>">            
          <?php the_sub_field('footer_location_phone'); ?>
          </a>
        </div>
      </div>
    <?php
        endwhile;
      endif;
    ?>
    </div>

  </div>
</div>

<div class="o-copyrightContent">
  <div class="o-copyrightContent__legal">
    &copy; Copyright 2017 E&amp;E Manufacturing. All rights reserved.
  </div>
  <div class="o-copyrightContent__links">
    <a class="o-copyrightContent__anchor" href="#">
      Sitemap
    </a>
    <a class="o-copyrightContent__anchor" href="#">
      Privacy Policy
    </a>
    <a class="o-copyrightContent__anchor" href="#">
      Terms of Service
    </a>
    <a class="o-copyrightContent__anchor" href="#">
      Web Design by FWD
    </a>
  </div>
</div>
</div>
