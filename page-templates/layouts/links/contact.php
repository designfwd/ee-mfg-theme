<?php // Contact-related links block ?>
<div class="o-contactLinks">
<<<<<<< HEAD

  <div class="o-contactLinks__block">
    <a class="m-contactLinkBlock" href="#">
      <img class="m-contactLinkBlock__image" src="http://via.placeholder.com/872x469?text=image" />
      <div class="a-linkBlockLabel m-contactLinkBlock__label">
        <h2 class="a-linkBlockLabel__title">
          Plymouth
=======
<?php
  if(have_rows('category_links')):
    while(have_rows('category_links')):the_row();      
?>
  <div class="o-contactLinks__block">
    <a class="m-contactLinkBlock" href="<?php the_sub_field('category_link_link'); ?>">
      <img class="m-contactLinkBlock__image" src="<?php echo get_acf_image( get_field('intro_image'), '960w', 'http://via.placeholder.com/872x469?text=image'); ?>" />
      <div class="a-linkBlockLabel m-contactLinkBlock__label">
        <h2 class="a-linkBlockLabel__title">
        <?php the_sub_field('category_link_title'); ?>
>>>>>>> saji
        </h2>
        <svg class="a-linkBlockLabel__flag">
          <path fill="#FF0000" d="M 0,0 L 64,64 L 0,64" />
        </svg>
      </div>
    </a>
  </div>

<<<<<<< HEAD
  <div class="o-contactLinks__block">
    <a class="m-contactLinkBlock" href="#">
      <img class="m-contactLinkBlock__image" src="http://via.placeholder.com/872x469?text=image" />
      <div class="a-linkBlockLabel m-contactLinkBlock__label">
        <h2 class="a-linkBlockLabel__title">
          Athens
        </h2>
        <svg class="a-linkBlockLabel__flag">
          <path fill="#FF0000" d="M 0,0 L 64,64 L 0,64" />
        </svg>
      </div>
    </a>
  </div>

  <div class="o-contactLinks__block">
    <a class="m-contactLinkBlock" href="#">
      <img class="m-contactLinkBlock__image" src="http://via.placeholder.com/872x469?text=image" />
      <div class="a-linkBlockLabel m-contactLinkBlock__label">
        <h2 class="a-linkBlockLabel__title">
          Schedule a Tour
        </h2>
        <svg class="a-linkBlockLabel__flag">
          <path fill="#FF0000" d="M 0,0 L 64,64 L 0,64" />
        </svg>
      </div>
    </a>
  </div>

  <div class="o-contactLinks__block">
    <a class="m-contactLinkBlock" href="#">
      <img class="m-contactLinkBlock__image" src="http://via.placeholder.com/872x469?text=image" />
      <div class="a-linkBlockLabel m-contactLinkBlock__label">
        <h2 class="a-linkBlockLabel__title">
          Request a Quote
        </h2>
        <svg class="a-linkBlockLabel__flag">
          <path fill="#FF0000" d="M 0,0 L 64,64 L 0,64" />
        </svg>
      </div>
    </a>
  </div>
=======
<?php
    endwhile;
  endif;
?>
>>>>>>> saji

</div>
