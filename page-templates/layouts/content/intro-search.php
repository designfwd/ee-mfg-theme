<?php // Introductory 404 paragraph content 
    $search_term = get_search_query('s');   
?>
<div class="o-introContent">
  <div class="o-introContent__content">
    <h1 class="o-introContent__title">
        Search Results: <?php echo $search_term; ?>
      <svg class="o-introContent__decoration" viewBox="0 0 100 100">
      <path fill="none" stroke="black" stroke-width="8" d="M 0,0 L 30,25 L 60,0" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,30 L 30,55 L 60,30" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,60 L 30,85 L 60,60" />
    </svg>
    </h1>
    <div class="o-introContent__paragraph">
        Maecenas quis diam aliquet, auctor quam auctor Vestibulum sed nunc enim. Nullam semper imperdiet magna, ut mattis tortor gravida sit amet. Integer sagittis finibus enim, id tempus purus vulputate vel.    
    </div>
  </div>
</div>
