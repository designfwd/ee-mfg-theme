<?php
/**
 * default search form
 */
?>
<form role="search" method="get" class="o-search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="m-search-field" placeholder="Search …" value="" name="s" title="Search for:" />
    </label>
    <input type="submit" class="m-search-submit" value="Search" />
</form>