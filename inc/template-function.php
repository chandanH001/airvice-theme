<?php 

function airvice_main_menu(){
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container'     => '',
        'menu_class'    => '',
        // 'fallback_cb'   => 'Demo_Walker_Nav_Menu::fallback',
        // 'walker'        => new Demo_Walker_Nav_Menu,
    ));
}