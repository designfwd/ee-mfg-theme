<?php // Quicklinks block to feature above the footer 

$footer_newsletter = get_field('footer_newsletter', 'option');
?>
<div class="o-footerLinks">
<?php
  if(have_rows('footer_links','option')):
    while(have_rows('footer_links', 'option')): the_row();
?>
  <a class="o-footerLinks__block" href="<?php the_sub_field('footer_link_link', 'option'); ?>">
    <div class="m-footerLink">
      <img class="m-footerLink__image lazyload" src="<?php echo get_acf_image( get_sub_field('footer_link_image', 'option'), '960w', 'http://via.placeholder.com/934x687?text=image'); ?> " />
      <h3 class="m-footerLink__title">
        <?php the_sub_field('footer_link_title', 'option'); ?>
      </h3>
    </div>
  </a>
<?php 
    endwhile;
  endif;
?>

  <div class="o-footerLinks__block o-footerLinks__block--newsletter">
    <div class="m-footerLink m-footerLink--newsletter" href="#">
      <img class="m-footerLink__icon lazyload" src="<?php echo get_acf_image( $footer_newsletter['footer_newsletter_icon'], 'preload', 'http://via.placeholder.com/64x64?text=image'); ?> " />
      <h3 class="m-footerLink__label">
        <?php echo $footer_newsletter['footer_newsletter_title']; ?>
      </h3>
      <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
    </div>
  </div>

</div>
