<?php

if (!function_exists('remove_nbsp')) {
    function remove_nbsp($content)

    {
        $string = htmlentities($content, null, 'utf-8');
        $content = str_replace("&nbsp;", "", $string);
        $content = html_entity_decode($content);
        return $content;
    }
}
