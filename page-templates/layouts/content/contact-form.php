<?php // A contact form, with optional paragraph content before ?>
<div class="o-contactForm">
  <h2 class="o-contactForm__title">
    <?php the_field('contact_form_title'); ?>
  </h2>
  <div class="o-contactForm__description">
    <?php the_field('contact_form_description'); ?>
  </div>
  <?php if(get_field('contact_form_form')) : ?>
  <div class="o-contactForm__form">
    <?php gravity_form(get_field('contact_form_form'), true, true, false, '', true, 1);  ?>
  </div>
  <?php endif; ?>
</div>
