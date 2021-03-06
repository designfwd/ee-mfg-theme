<?php // Call-to-action block with links for contacting E&E ?>
<div class="o-callToAction">
  <svg class="o-callToAction__titleLeft" viewBox="0 0 64 64">
    <path stroke="black" stroke-width="4" fill="none" d="M 0,64 L 0,0 L 64,0" />
  </svg>
  <svg class="o-callToAction__titleRight" viewBox="0 0 64 64">
    <path stroke="black" stroke-width="4" fill="none" d="M 0,0 L 64,0 L 64,64" />
  </svg>
  <h3 class="o-callToAction__titleText">
    <?php the_field('footer_call_to_action_title', 'option'); ?>
  </h3>
  <div class="o-callToAction__description">  
    <?php the_field('footer_call_to_action_description', 'option'); ?>
  </div>
  <div class="o-callToAction__mediaBlock">
    <img 
      class="o-callToAction__image lazyload" 
      src="<?php echo get_acf_image( get_field('footer_call_to_action_background_image', 'option'), 'preload', 'http://via.placeholder.com/2677x1271?text=call+to+action+background'); ?>" 
      srcset="<?php echo get_acf_image_srcset(get_field('footer_call_to_action_background_image', 'option')); ?>"/>
    <div class="o-callToAction__card">
      <div class="m-ctaCard">
      <?php
        
        if(have_rows('footer_call_to_action_call_out_box', 'option')):
          while(have_rows('footer_call_to_action_call_out_box', 'option')):the_row();

      ?>      
        <h4 class="m-ctaCard__heading">
          <?php 
            the_sub_field('footer_call_to_action_call_out_box_title');
          ?>
        </h4>
        <div class="m-ctaCard__description">
          <?php 
            the_sub_field('footer_call_to_action_call_out_description');
          ?>
        </div>
        <?php
        
          if(have_rows('footer_call_to_action_call_out_links', 'option')):
            while(have_rows('footer_call_to_action_call_out_links', 'option')):the_row();

        ?>
        <div class="m-ctaCard__row">
          <img 
            class="m-ctaCard__icon lazyload" 
            src="<?php echo get_acf_image(get_sub_field('footer_call_to_action_call_out_link_icon', 'option'), 'preload', 'http://via.placeholder.com/64x64?text=icon');?>"
            srcset="<?php echo get_acf_image_srcset(get_sub_field('footer_call_to_action_call_out_link_icon', 'option')); ?>" />
          <div class="m-ctaCard__button">
            <a class="a-dividedIcon" href="<?php the_sub_field('footer_call_to_action_call_out_link_link', 'option'); ?>">
              <span class="a-dividedIcon__text"><?php the_sub_field('footer_call_to_action_call_out_link_title', 'option'); ?></span>
              <span class="a-dividedIcon__icon">
                <svg class="a-dividedIcon__arrow" viewBox="0 0 100 100">
                  <path fill="none" stroke="black" stroke-width="8" d="M 0,40 L 30,65 L 60,40" />
                </svg>
              </span>
            </a>
          </div>
        </div>
        <?php
              endwhile;
            endif;

          endwhile;
        endif;

        ?> 
      </div>
    </div>
  </div>
</div>
