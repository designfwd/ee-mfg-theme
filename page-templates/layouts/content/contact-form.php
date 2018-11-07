<?php // A contact form, with optional paragraph content before ?>
<div class="o-contactForm">
  <h2 class="o-contactForm__title">
<<<<<<< HEAD
    Maecenas luctus malesu ada tellus
  </h2>
  <div class="o-contactForm__description">
    Nullam semper imperdiet magna, ut mattis tortor gravida sit amet. Integer sagittis finibus enim, id tempus purus vulputate vel.
  </div>
  <div class="o-contactForm__form">
    CONTACT FORM HERE
=======
    <?php the_field('contact_form_title'); ?>
  </h2>
  <div class="o-contactForm__description">
    <?php the_field('contact_form_description'); ?>
  </div>
  <div class="o-contactForm__form">
    <?php gravity_form(get_field('contact_form_form'), true, true, false, '', true, 1);  ?>
>>>>>>> saji
  </div>
</div>
