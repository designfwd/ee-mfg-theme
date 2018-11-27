<?php // Link block for featuring case studies. Similar styling to sidebars ?>
<div class="o-sidebar o-sidebar--caseStudies">

  <div class="o-sidebar__widget">
    <div class="m-sidebarTitle">
      <h3 class="m-sidebarTitle__text">
        <svg class="m-sidebarTitle__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
        </svg>
        <?php the_field('solution_case_studies_title'); ?>
      </h3>
    </div>
    <ul class="o-sidebar__list">
      <?php
        if ( get_field('solution_case_studies_title') ) : 
          echo get_field('solution_case_studies_title'); 
        endif;        
      ?>
      <?php if ( have_rows('solution_case_studies') ) : ?>      
        <?php while( have_rows('solution_case_studies') ) : the_row(); ?>      
          <li class="o-sidebar__item">
            <a href="<?php the_sub_field('solution_case_study_link'); ?>"><?php the_sub_field('solution_case_study_text'); ?></a>
          </li>
        <?php endwhile; ?>      
      <?php endif; ?>
    
    </ul>
  </div>

</div>
