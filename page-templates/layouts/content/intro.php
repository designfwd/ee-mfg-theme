<?php // Introductory paragraph content ?>
<div class="o-introContent">
  <div class="o-introContent__before">
<<<<<<< HEAD
    <img class="o-introContent__decoration" src="http://via.placeholder.com/70x90?text=decoration" />
  </div>
  <div class="o-introContent__content">
    <h1 class="o-introContent__title">
      Intro content title
    </h1>
    <div class="o-introContent__paragraph">
      Maecenas quis diam aliquet, auctor quam auctor Vestibulum sed nunc enim. Nullam semper imperdiet magna, ut mattis tortor gravida sit amet. Integer sagittis finibus enim, id tempus purus vulputate vel.
=======
    <img class="o-introContent__decoration" src="<?php echo get_acf_image( get_field('intro_image'), 'preload', 'http://via.placeholder.com/70x90?text=decoration'); ?>" />
  </div>
  <div class="o-introContent__content">
    <h1 class="o-introContent__title">
      <?php the_field('intro_title'); ?>
    </h1>
    <div class="o-introContent__paragraph">
      <?php the_field('intro_text'); ?>      
>>>>>>> saji
    </div>
  </div>
</div>
