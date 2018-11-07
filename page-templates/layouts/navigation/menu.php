<?php // Navigation menu with links and search functionality ?>
<nav class="o-navigationMenu">
<<<<<<< HEAD
  <img class="o-navigationMenu__image" src="http://via.placeholder.com/588x216/010066/ffffff?text=E+E+Manufacturing" />
  <div class="o-navigationMenu__topRow">
    <ul class="m-navigationRow m-navigationRow--upper">
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor m-navigationRow__anchor--upper" href="#">Tour</a>
      </li>
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor m-navigationRow__anchor--upper" href="#">Request Quote</a>
      </li>
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor m-navigationRow__anchor--upper" href="#">Contact</a>
      </li>
      <li class="m-navigationRow__link m-navigationRow__link--button">
        <a class="m-navigationRow__anchor m-navigationRow__anchor--upper" href="#"><img class="m-navigationRow__image" src="http://via.placeholder.com/128x128/ff3300/ffffff?text=search" /></a>
      </li>
      <li class="m-navigationRow__link m-navigationRow__link--menuToggle">
        <a class="m-navigationRow__anchor m-navigationRow__anchor--upper" href="#drawerMenu"><img class="m-navigationRow__image" src="http://via.placeholder.com/128x128?text=toggle" /></a>
      </li>
    </ul>
  </div>
  <div class="o-navigationMenu__bottomRow">
    <ul class="m-navigationRow">
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor" href="#">Solutions</a>
      </li>
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor" href="#">Products</a>
      </li>
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor" href="#">Who We Serve</a>
      </li>
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor" href="#">Why E&amp;E?</a>
      </li>
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor" href="#">Join Our Team</a>
      </li>
      <li class="m-navigationRow__link">
        <a class="m-navigationRow__anchor" href="#">Community</a>
      </li>
    </ul>
  </div>
</nav>

<nav id="drawerMenu" class="o-drawerMenu">
=======
  <img class="o-navigationMenu__image" src="http://via.placeholder.com/588x216/010066/ffffff?text=E+E+Manufacturing" />  
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
>>>>>>> saji
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
<<<<<<< HEAD
    <!-- Use https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/ to get menu items -->
=======
   Use https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/ to get menu items 
>>>>>>> saji
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
<<<<<<< HEAD
</nav>
=======
</nav> -->
>>>>>>> saji
