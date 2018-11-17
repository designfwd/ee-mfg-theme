<?php // Banner image for general pages. Can be overriden per page, unlike news banners ?>
<div class="o-pageBanner o-pageBanner--general">
<<<<<<< HEAD
  <img class="o-pageBanner__image" src="http://via.placeholder.com/2757x531?text=banner+image" />
=======
  <img class="o-pageBanner__image" src="<?php echo get_acf_image( get_field('page_banner_image'), '2560w', 'http://via.placeholder.com/2757x531?text=banner+image'); ?>" />
>>>>>>> saji
</div>
