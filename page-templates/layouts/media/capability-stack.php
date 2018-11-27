<?php // Stacked media blocks for E&E capabilities, with introductory content ?>
<div class="o-capabilityStack">
  <h2 class="o-capabilityStack__headline">
    Our Capabilities
    <svg class="o-capabilityStack__topDecoration" viewBox="0 0 100 100">
      <path fill="none" stroke="black" stroke-width="8" d="M 0,0 L 30,25 L 60,0" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,30 L 30,55 L 60,30" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,60 L 30,85 L 60,60" />
    </svg>
  </h2>
  <div class="o-capabilityStack__description">
    <?php the_field('capabilities_description'); ?>
  </div>

  <div class="o-capabilityStack__stack">
    <?php
      if(have_rows('capabilities_row')):
        while(have_rows('capabilities_row')):the_row();

    ?>
    <a class="m-capabilityRow" href="<?php the_sub_field('capabilities_row_link'); ?>">
      <img class="m-capabilityRow__image" src="<?php echo get_acf_image( get_sub_field('capabilities_row_image'), '1600w', 'http://via.placeholder.com/1591x741?text=capability'); ?>" />
      <div class="m-capabilityRow__label a-rowLabel">
        <h2 class="a-rowLabel__title">
          <?php the_sub_field('capabilities_row_title'); ?>
        </h2>
        <svg class="a-rowLabel__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,0 L 0,64 L 64,64" />
        </svg>
      </div>
    </a>
    <?php
        endwhile;
      endif;

    ?>


  </div>
</div>
