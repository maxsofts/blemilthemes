<?php

namespace max_themes\components\backend;


class menu
{
    public function __construct()
    {
        /** menu chinh **/
        add_theme_support('menus');
        register_nav_menus(
            array(
                'header-menu' => 'Menu chính',
                'menu-footer-right' => 'Menu Cuối trang bên phải',
                'menu-footer-left' => 'Menu Cuối trang bên trái'
            )
        );
    }
}