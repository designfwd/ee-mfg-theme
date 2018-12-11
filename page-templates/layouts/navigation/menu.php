<?php // Navigation menu with links and search functionality  ?>
<nav class="o-navigationMenu">
  <a class="o-navigationMenu__link" href="<?php echo get_site_url(); ?>"><img class="o-navigationMenu__image" src="<?php echo get_acf_image( get_field('site_logo', 'option'), '540w', 'http://via.placeholder.com/588x216/010066/ffffff?text=E+E+Manufacturing'); ?> " /></a>  
  <?php
    
    wp_nav_menu( array(
      'container'       => 'div',
      'container_class' => 'o-navigationMenu__topRow',
      'menu_class'      => 'm-navigationRow m-navigationRow--upper',    
      'theme_location' => 'top_nav'
    ));

    wp_nav_menu( array(
      'container'       => 'div',
      'container_class' => 'o-navigationMenu__bottomRow',
      'menu_class'      => 'm-navigationRow',    
      'theme_location' => 'primary_nav'
    ));    
  ?>  
</nav>

<!-- <nav id="drawerMenu" class="o-drawerMenu">
  <ul class="o-drawerMenu__list">
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Tour</a>
    </li>
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Request a Quote</a>
    </li>
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Contact</a>
    </li>
   Use https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/ to get menu items 
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Solutions</a>
    </li>
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Products</a>
    </li>
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Who We Serve</a>
    </li>
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Why E&amp;E?</a>
    </li>
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Join Our Team</a>
    </li>
    <li class="o-drawerMenu__item">
      <a class="o-drawerMenu__anchor" href="#">Community</a>
    </li>
  </ul>
</nav> -->
