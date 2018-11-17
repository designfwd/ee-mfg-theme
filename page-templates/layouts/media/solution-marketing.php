<?php // Blocks of solution-specific information used for marketing purposes ?>
<div class="o-marketingBlocks o-marketingBlocks--solution">
<<<<<<< HEAD

  <div class="o-marketingBlocks__block">
    <div class="m-marketingBlock">
      <h3 class="m-marketingBlock__headline">
        50+ Years
      </h3>
      <h4 class="m-marketingBlock__body">
        experience and diversity in talent
      </h4>
      <svg class="m-marketingBlock__decoration">
        <path fill="none" stroke="yellow" stroke-width="4" d="M 0,32 L 32,0 L 64,32" />
      </svg>
    </div>
  </div>

  <div class="o-marketingBlocks__block">
    <div class="m-marketingBlock">
      <h3 class="m-marketingBlock__headline">
        50+ Years
      </h3>
      <h4 class="m-marketingBlock__body">
        experience and diversity in talent
=======
<?php
    if(have_rows('solution_marketing_blocks')):
      while(have_rows('solution_marketing_blocks')): the_row();
  ?>
  <div class="o-marketingBlocks__block">
    <div class="m-marketingBlock">
      <h3 class="m-marketingBlock__headline">       
        <?php the_sub_field('solution_marketing_title'); ?>
      </h3>
      <h4 class="m-marketingBlock__body">
        <?php the_sub_field('solution_marketing_text'); ?>
>>>>>>> saji
      </h4>
      <svg class="m-marketingBlock__decoration">
        <path fill="none" stroke="yellow" stroke-width="4" d="M 0,32 L 32,0 L 64,32" />
      </svg>
    </div>
  </div>
<<<<<<< HEAD
=======
  <?php
      endwhile;
    endif;
  ?>
>>>>>>> saji

</div>
