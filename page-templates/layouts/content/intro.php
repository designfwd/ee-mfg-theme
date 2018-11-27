<?php // Introductory paragraph content ?>
<div class="o-introContent">
  <div class="o-introContent__content">
    <h1 class="o-introContent__title">
      <?php the_field('intro_title'); ?>
      <svg class="o-introContent__decoration" viewBox="0 0 100 100">
      <path fill="none" stroke="black" stroke-width="8" d="M 0,0 L 30,25 L 60,0" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,30 L 30,55 L 60,30" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,60 L 30,85 L 60,60" />
    </svg>
    </h1>
    <div class="o-introContent__paragraph">
      <?php the_field('intro_text'); ?>      
    </div>
  </div>
</div>
