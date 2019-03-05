<?php ?>
<div class="o-featuredImage o-featuredImage--general">
    <img class="o-featuredImage__image lazyload" sizes="(min-width: 900px)860px, (min-width: 600px)600px"
        srcset="<?php echo get_acf_image_srcset(get_sub_field('featured_image')); ?>"
        data-src="<?php echo get_acf_image(get_field('featured_image'), '960w', 'http://via.placeholder.com/941x697?text=featured+image'); ?>" />
</div>