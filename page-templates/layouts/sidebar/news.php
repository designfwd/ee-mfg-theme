<?php // Sidebar for recent news and categories ?>
<div class="o-sidebar">

  <div class="o-sidebar__widget">
    <div class="m-sidebarTitle">
      <h3 class="m-sidebarTitle__text">
        <svg class="m-sidebarTitle__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
        </svg>
        Most Recent
      </h3>
    </div>
    <ul class="o-sidebar__list">
    <?php
      // WP_Query arguments
      $args = array(
        // 'cat' => ??,
        'orderby' => 'date',
        );
        // The Query
        $query = new WP_Query( $args );  
        if( $query->have_posts() ):
          while( $query->have_posts() ): $query->the_post();
    ?>    
      <li class="o-sidebar__item">
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
      </li>
    <?php
          endwhile;
        endif;
    ?>
    </ul>
  </div>

  <div class="o-sidebar__widget">
    <div class="m-sidebarTitle">
      <h3 class="m-sidebarTitle__text">
        <svg class="m-sidebarTitle__flag" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
        </svg>
        Categories     
      </h3>
    </div>
    <ul class="o-sidebar__list">
    <?php 
      $categories = get_categories(); 
      foreach ($categories as $category): 
        if(1 !== $category->term_id) :
    ?>  

      <li class="o-sidebar__item">
        <a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name; ?></a>
      </li>
    <?php 
        endif;
      endforeach;
    ?>
    </ul>
  </div>

</div>
