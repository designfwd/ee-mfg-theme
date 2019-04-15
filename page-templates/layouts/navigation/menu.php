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
  <button id="mobile" data-pushbar-target="mypushbar1">
<?php get_svg('icon-bars'); ?>
</button>
</nav>
<nav data-pushbar-id="mypushbar1" class="pushbar from_left">
<?php
    wp_nav_menu( array(
      'container'       => 'div',
      'container_class' => 'o-navigationMenu__bottomRow--mobile',
      'menu_class'      => 'm-navigationRow',    
      'theme_location' => 'primary_nav',
      'walker'          => new mobile_nav_icon()
    ));   
  ?>
</nav>