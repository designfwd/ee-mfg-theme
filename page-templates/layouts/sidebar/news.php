<?php // Sidebar for recent news and categories ?>
<div class="o-sidebar">

  <div class="o-sidebar__widget">
    <div class="m-sidebarTitle">
      <svg class="m-sidebarTitle__flag">
        <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
      </svg>
      <h3 class="m-sidebarTitle__text">
        Most Recent
      </h3>
    </div>
    <ul class="o-sidebar__list">
<<<<<<< HEAD
      <li class="o-sidebar__item">
        Sagittis finibus enim, id tempus purus vulputate
      </li>
      <li class="o-sidebar__item">
        Phasellus ultrices, dui vitae ultricies imperdiet
      </li>
=======
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
>>>>>>> saji
    </ul>
  </div>

  <div class="o-sidebar__widget">
    <div class="m-sidebarTitle">
      <svg class="m-sidebarTitle__flag">
        <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
      </svg>
      <h3 class="m-sidebarTitle__text">
        Categories
      </h3>
    </div>
    <ul class="o-sidebar__list">
<<<<<<< HEAD
      <li class="o-sidebar__item">
        Sagittis finibus enim, id tempus purus vulputate
      </li>
      <li class="o-sidebar__item">
        Phasellus ultrices, dui vitae ultricies imperdiet
      </li>
=======
    <?php 
      $categories = get_categories( array(
        'orderby'            => 'name',
         )); 
      foreach ($categories as $category): 
    ?>  

      <li class="o-sidebar__item">
        <?php echo $category->name; ?>
      </li>
    <?php 
      endforeach;
    ?>
>>>>>>> saji
    </ul>
  </div>

</div>
