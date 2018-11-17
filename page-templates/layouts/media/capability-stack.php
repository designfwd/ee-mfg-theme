<?php // Stacked media blocks for E&E capabilities, with introductory content ?>
<div class="o-capabilityStack">
  <h2 class="o-capabilityStack__headline">
    Our Capabilities
  </h2>
<<<<<<< HEAD
  <img class="o-capabilityStack__topDecoration" src="http://via.placeholder.com/32x64" />
  <div class="o-capabilityStack__description">
    Vestibulum sed nunc enim. Nullam semper imperdiet magna, ut mattis tortor gravida sit amet. Integer sagittis finibus enim, id tempus purus vulputate vel.
  </div>

  <div class="o-capabilityStack__stack">

    <a class="m-capabilityRow" href="#">
      <img class="m-capabilityRow__image" src="http://via.placeholder.com/1591x741?text=capability" />
      <div class="m-capabilityRow__label a-rowLabel">
        <h3 class="a-rowLabel__title">
          Tooling &amp; Stamping
=======
  <img class="o-capabilityStack__topDecoration" src="<?php echo get_acf_image( get_field('capabilities_image'), 'preload', 'http://via.placeholder.com/32x64'); ?>" />
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
        <h3 class="a-rowLabel__title">
          <?php the_sub_field('capabilities_row_title'); ?>
>>>>>>> saji
        </h3>
        <svg class="a-rowLabel__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,0 L 0,64 L 64,64" />
        </svg>
      </div>
    </a>
<<<<<<< HEAD

    <a class="m-capabilityRow" href="#">
      <img class="m-capabilityRow__image" src="http://via.placeholder.com/1591x741?text=capability" />
      <div class="m-capabilityRow__label a-rowLabel">
        <h3 class="a-rowLabel__title">
          Welded Component &amp; Complete System
        </h3>
        <svg class="a-rowLabel__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,0 L 0,64 L 64,64" />
        </svg>
      </div>
    </a>

    <a class="m-capabilityRow" href="#">
      <img class="m-capabilityRow__image" src="http://via.placeholder.com/1591x741?text=capability" />
      <div class="m-capabilityRow__label a-rowLabel">
        <h3 class="a-rowLabel__title">
          Roll Forming
        </h3>
        <svg class="a-rowLabel__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,0 L 0,64 L 64,64" />
        </svg>
      </div>
    </a>

    <a class="m-capabilityRow" href="#">
      <img class="m-capabilityRow__image" src="http://via.placeholder.com/1591x741?text=capability" />
      <div class="m-capabilityRow__label a-rowLabel">
        <h3 class="a-rowLabel__title">
          Fastening
        </h3>
        <svg class="a-rowLabel__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,0 L 0,64 L 64,64" />
        </svg>
      </div>
    </a>
=======
    <?php
        endwhile;
      endif;

    ?>

>>>>>>> saji

  </div>
</div>
