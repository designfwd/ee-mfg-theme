<?php // Page content for general page layouts ?>
<div class="o-bodyContent o-bodyContent--general">
  <?php

wp_nav_menu(array(
    'container' => 'div',
    'theme_location' => 'top_nav',
));

wp_nav_menu(array(
    'container' => 'div',
    'theme_location' => 'primary_nav',
));
?>
</div>
