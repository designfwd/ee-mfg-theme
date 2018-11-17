<?php // Alternating media blocks, for displaying information about capabilties ?>
<div class="o-capabilityBlocks">
  <?php
    if(have_rows('capability_block_rows')):
      $i = 0;
      while(have_rows('capability_block_rows')): the_row();
        $image = get_acf_image( get_sub_field('capability_block_row_image'), '1600w', 'http://via.placeholder.com/1591x741?text=capability');
        $title = get_sub_field('capability_block_row_title');
        $description = get_sub_field('capability_block_row_description');
        $link = get_sub_field('capability_block_row_link');
        
        if ($i % 2):
  ?>
          <div class="o-capabilityBlocks__block">
            <div class="m-capabilityBlock">
              <p class="m-capabilityBlock__description">
                <?php echo $description; ?>
              </p>
              <a class="m-capabilityBlock__mediaBlock" href="<?php echo $link; ?>">
                <img class="m-capabilityBlock__image" src="<?php echo $image; ?>" />
                <div class="m-capabilityBlock__label">
                  <div class="a-blockLabel">
                    <h2 class="a-blockLabel__title">
                    <?php echo $title; ?>
                    </h2>
                    <svg class="a-blockLabel__flag" viewBox="0 0 64 64">
                      <path fill="#FF0000" d="M 0,0 L 64,64 L 0,64" />
                    </svg>
                  </div>
                </div>
              </a>
            </div>
          </div>
  <?php    else: ?>
          <div class="o-capabilityBlocks__block o-capabilityBlocks__block--reverse">
            <div class="m-capabilityBlock m-capabilityBlock--reverse">
              <a class="m-capabilityBlock__mediaBlock" href="<?php echo $link; ?>">
                <img class="m-capabilityBlock__image m-capabilityBlock__image--reverse" src="<?php echo $image; ?>" />
                <div class="m-capabilityBlock__label m-capabilityBlock__label--reverse">
                  <div class="a-blockLabel a-blockLabel--reverse">
                    <h2 class="a-blockLabel__title">
                    <?php echo $title; ?>
                    </h2>
                    <svg class="a-blockLabel__flag a-blockLabel__flag--reverse" viewBox="0 0 64 64">
                      <path fill="#FF0000" d="M 0,0 L 64,64 L 0,64" />
                    </svg>
                  </div>
                </div>
              </a>
              <p class="m-capabilityBlock__description">
                <?php echo $description; ?>
              </p>
            </div>
          </div>
    <?php  endif;
        $i++;
      endwhile;
    endif;
    ?>  

</div>
