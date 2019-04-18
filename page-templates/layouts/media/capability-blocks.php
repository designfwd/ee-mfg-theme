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
          <a class="o-capabilityBlocks__block" href="<?php echo $link; ?>">
            <div class="m-capabilityBlock">
              <div class="m-capabilityBlock__description">
                <?php echo $description; ?>
              </div>
              <div class="m-capabilityBlock__mediaBlock">
                <img class="m-capabilityBlock__image lazyload" src="<?php echo $image; ?>" />
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
              </div>
            </div>
          </a>
  <?php    else: ?>
          <a class="o-capabilityBlocks__block o-capabilityBlocks__block--reverse" href="<?php echo $link; ?>">
            <div class="m-capabilityBlock m-capabilityBlock--reverse">
              <div class="m-capabilityBlock__mediaBlock">
                <img class="m-capabilityBlock__image m-capabilityBlock__image--reverse lazyload" src="<?php echo $image; ?>" />
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
              </div>
              <div class="m-capabilityBlock__description">
                <?php echo $description; ?>
              </div>
            </div>
        </a>
    <?php  endif;
        $i++;
      endwhile;
    endif;
    ?>  

</div>
