<h2 class="o-capabilitiesBlock__title">Capabilities
  <svg class="o-capabilitiesBlock__topDecoration" viewBox="0 0 100 100">
    <path fill="none" stroke="black" stroke-width="8" d="M 0,0 L 30,25 L 60,0" />
    <path fill="none" stroke="black" stroke-width="8" d="M 0,30 L 30,55 L 60,30" />
    <path fill="none" stroke="black" stroke-width="8" d="M 0,60 L 30,85 L 60,60" />
  </svg>
</h2>
<?php // Solution-specific capabilities shown in a media block ?>
<div class="o-capabilitiesBlock o-capabilitesBlock--solution">    
<div class="o-capabilitiesBlock__block"> 
  <img class="o-capabilitesBlock__image" src="<?php echo get_acf_image( get_field('solutions_capabilities_background_image'), '2560w', 'http://via.placeholder.com/2677x1271?text=call+to+action+background'); ?>" />   
  <div class="o-capabilitiesSlider__wrapper"> 
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
