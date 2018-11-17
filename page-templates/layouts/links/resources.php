<?php // Link block for featuring related resources. Similar styling to sidebars ?>
<div class="o-sidebar o-sidebar--resources">
<<<<<<< HEAD

=======
>>>>>>> saji
  <div class="o-sidebar__widget">
    <div class="m-sidebarTitle">
      <svg class="m-sidebarTitle__flag">
        <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
      </svg>
      <h3 class="m-sidebarTitle__text">
<<<<<<< HEAD
        Resources
      </h3>
    </div>
    <ul class="o-sidebar__list">
      <li class="o-sidebar__item">
        <img class="o-sidebar__icon" src="http://via.placeholder.com/64x64?text=icon" /> Sagittis finibus enim, id tempus purus vulputate
      </li>
      <li class="o-sidebar__item">
        <img class="o-sidebar__icon" src="http://via.placeholder.com/64x64?text=icon" /> Phasellus ultrices, dui vitae ultricies imperdiet
      </li>
=======
      <?php
        if ( get_field('solution_resources_title') ) : 
          echo get_field('solution_resources_title'); 
        endif;        
      ?>
      </h3>
    </div>
    <ul class="o-sidebar__list">
      <?php if ( have_rows('solution_resource_links') ) : ?>      
        <?php while( have_rows('solution_resource_links') ) : the_row();
        ?>      
          <li class="o-sidebar__item">
            <a href="<?php the_sub_field('solution_resource_link_link'); ?>"><?php the_sub_field('solution_resource_link_title'); ?></a>
          </li>
        <?php endwhile; ?>      
      <?php endif; ?>      
>>>>>>> saji
    </ul>
  </div>

</div>
