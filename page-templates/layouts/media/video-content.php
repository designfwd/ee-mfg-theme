<?php // Stacked media blocks for E&E capabilities, with introductory content ?>
<div class="o-videoContent">
  <h2 class="o-videoContent__headline">
    <?php the_field('video_content_title'); ?>
      <svg class="o-videoContent__topDecoration" viewBox="0 0 100 100">
        <path fill="none" stroke="black" stroke-width="8" d="M 0,0 L 30,25 L 60,0" />
        <path fill="none" stroke="black" stroke-width="8" d="M 0,30 L 30,55 L 60,30" />
        <path fill="none" stroke="black" stroke-width="8" d="M 0,60 L 30,85 L 60,60" />
      </svg>
  </h2>
  <div class="o-videoContent__container"> 
    <div class="o-videoContent__description">
      <?php the_field('video_content_description'); ?>
    </div>
  </div>
  <div class="o-videoContent__video">
    <?php the_field('video_content_video'); ?>
  </div>
</div>
