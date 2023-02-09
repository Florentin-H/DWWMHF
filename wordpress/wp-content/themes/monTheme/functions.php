<?php
add_action('after_setup_theme' );
add_action('wp_head', function(){
    die('Au revoir les gens');
}, 5);