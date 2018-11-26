<?php // Link block for featuring related resources. Similar styling to sidebars ?>
<div class="o-sidebar o-sidebar--resources">
  <div class="o-sidebar__widget">
    <div class="m-sidebarTitle">
      <h3 class="m-sidebarTitle__text">
        <svg class="m-sidebarTitle__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
        </svg>
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
    </ul>
  </div>

</div>
