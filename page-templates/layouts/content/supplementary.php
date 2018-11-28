<?php // Supplementary paragraph content, split into columns at higher device widths ?>
<div class="o-supplementaryContent">
  <h2 class="o-supplementaryContent__title">
    <?php the_field('supplementary_content_title'); ?>
    <svg class="o-supplementaryContent__topDecoration" viewBox="0 0 100 100">
      <path fill="none" stroke="black" stroke-width="8" d="M 0,0 L 30,25 L 60,0" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,30 L 30,55 L 60,30" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,60 L 30,85 L 60,60" />
    </svg>
  </h2>
  <div class="o-supplementaryContent__paragraph">
    <?php the_field('supplementary_content_description');  ?>
  </div>
</div>
