<?php
// Renames the default page template to encourage use of custom templates
add_filter('default_page_template_title', function() {
    return __('--Pick a page template--', 'fwd');
});