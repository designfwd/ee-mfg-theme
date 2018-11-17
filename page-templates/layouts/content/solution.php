<?php // Body content for solutions pages ?>
<div class="o-bodyContent o-bodyContent--solution">
<?php
  if(have_rows('solutions')):
    while(have_rows('solutions')): the_row();
?>
  <h3><?php the_sub_field('solution_title'); ?></h3>
  <?php the_sub_field('solution_text'); ?>
<?php
    endwhile;
  endif;
?>
</div>
