<?php // Solution-specific capabilities shown in a media block ?>
<div class="o-capabilitiesBlock o-capabilitesBlock--solution">    
<div class="o-capabilitiesBlock__block"> 
  <img class="o-capabilitesBlock__image" src="<?php echo get_acf_image( get_field('solutions_capabilities_background_image'), '2560w', 'http://via.placeholder.com/2677x1271?text=call+to+action+background'); ?>" />   
  <div class="o-capabilitiesSlider__wrapper"> 
    <svg class="a-rowLabel__flag" viewBox="0 0 64 64">
      <path fill="#FF0000" d="M 0,0 L 0,64 L 64,64" />
    </svg>
    <h2 class="o-supplementaryContent__title">Capabilities</h2>
  <div class="o-capabilitiesSlider"> 
    <?php
      if( have_rows('solutions_capabilities_slideshow') ):
        $i = 1;
        while( have_rows('solutions_capabilities_slideshow') ): the_row();
    ?>
    <div class="m-capabilitiesBlock__row">
      <div class="m-capabilitiesBlock__num"><?php echo $i; ?>  </div>
      <div class="m-capabilitiesBlock__textBlock">
        <h3 class="m-capabilitiesBlock__headline">
          <?php the_sub_field('solutions_capabilities_slide_title'); ?>
        </h3> 
        <div class="m-capabilitiesBlock__text">
            <?php the_sub_field('solutions_capabilities_slide_description'); ?>
        </div>
      </div>
    </div>  
    <?php
          $i++;
        endwhile;
      endif;
    ?>    
  </div>
</div>
</div>


</div>
