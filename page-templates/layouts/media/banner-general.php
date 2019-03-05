<?php // Banner image for general pages. Can be overriden per page, unlike news banners ?>
<div class="o-pageBanner o-pageBanner--general">
  <img class="o-pageBanner__image lazyload" sizes="(min-width: 900px)860px, (min-width: 600px)600px" srcset="<?php echo get_acf_image_srcset(get_sub_field('page_banner_image')); ?>" data-src="<?php echo get_acf_image( get_field('page_banner_image'), '2560w', 'http://via.placeholder.com/2757x531?text=banner+image'); ?>" />
</div>
