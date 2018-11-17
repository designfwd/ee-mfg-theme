<?php // Blocks of broad information used for marketing purposes ?>
<div class="o-marketingBlocks">
  <div class="o-marketingBlocks__description">
<<<<<<< HEAD
    Maecenas quis diam aliquet, auctor quam auctor Vestibulum sed nunc enim. Nullam semper imperdiet magna, ut mattis tortor gravida sit amet. Integer.
  </div>

  <div class="o-marketingBlocks__block">
    <div class="m-marketingBlock">
      <h3 class="m-marketingBlock__headline">
        50+ Years
      </h3>
      <h4 class="m-marketingBlock__body">
        experience and diversity in talent
      </h4>
      <svg class="m-marketingBlock__decoration" viewBox="0 0 64 64">
        <path fill="none" stroke="yellow" stroke-width="8" d="M 8,32 L 32,8 L 56,32" />
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
      </h4>
      <svg class="m-marketingBlock__decoration" viewBox="0 0 64 64">
        <path fill="none" stroke="yellow" stroke-width="8" d="M 8,32 L 32,8 L 56,32" />
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
      </h4>
      <svg class="m-marketingBlock__decoration" viewBox="0 0 64 64">
        <path fill="none" stroke="yellow" stroke-width="8" d="M 8,32 L 32,8 L 56,32" />
      </svg>
    </div>
  </div>

=======
    <?php the_field('marketing_introduction'); ?>
  </div>

  <?php
    if(have_rows('marketing_content_block')):
      while(have_rows('marketing_content_block')): the_row();
  ?>
        <div class="o-marketingBlocks__block">
          <div class="m-marketingBlock">
            <h3 class="m-marketingBlock__headline">
              <?php the_sub_field('marketing_content_block_title'); ?>
            </h3>
            <h4 class="m-marketingBlock__body">
              <?php the_sub_field('marketing_content_block_text'); ?>
            </h4>
            <svg class="m-marketingBlock__decoration" viewBox="0 0 64 64">
              <path fill="none" stroke="yellow" stroke-width="8" d="M 8,32 L 32,8 L 56,32" />
            </svg>
          </div>
        </div>
  <?php
      endwhile;
    endif;
  ?>
>>>>>>> saji
</div>
