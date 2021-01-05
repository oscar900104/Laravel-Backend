<?php
if (!function_exists('navigation')) {
    function navigation()
    {
        $menus = \Citmatel\Support\Menus\Menu::where('menu_id', '=', null)->orderBy('order')->get();
        return $menus;
    }
}

if (!function_exists('getTrans')) {
    function getTrans($text, $locale)
    {
        return app('lang')->getTrans($text, $locale);
    }
}

if (!function_exists('translate')) {
    function translate($text)
    {
        return app('lang')->translate($text);
    }
}