<<<<<<< HEAD
<?php // Solution-specific capabilities shown in a media block
=======
<?php // Solution-specific capabilities shown in a media block ?>
<div class="o-capabilitiesBlock o-capabilitesBlock--solution">
    <img class="o-capabilitesBlock__image" src="<?php echo get_acf_image( get_field('solutions_capabilities_background_image'), '2560w', 'http://via.placeholder.com/2677x1271?text=call+to+action+background'); ?>" />
   
<div class="o-capabilitiesBlock__block">
  <div class="m-capabilitiesBlock">
    <h3 class="m-capabilitiesBlock__headline">
      <?php the_field('solutions_capabilities_title'); ?>
    </h3>
    <?php
      if( have_rows('solution_capability_rows') ):
        $i = 1;
        while( have_rows('solution_capability_rows') ): the_row();
    ?>
    <div class="m-capabilitiesBlock__row">
      <div class="m-capabilitiesBlock__num"><?php echo $i; ?> / </div>
      <div class="m-capabilitiesBlock__text"><?php the_sub_field('solutions_capability_row_text'); ?></div>
    </div>  
    <?php
          $i++;
        endwhile;
      endif;
    ?>    
  </div>
</div>


</div>
>>>>>>> saji
