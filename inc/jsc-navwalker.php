<?php

class jsc_wp_nav_menu_walker extends Walker_Nav_menu
{

    function start_lvl(&$output, $depth = 0, $args = null)
    {

        // $tmp_class = "child-" . $depth;

        $output .= "<ul class='ace-responsive-menu' id='respMenu'>";
        

    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {

        $output .= "<li>" ;
            $output .= "<a href='javascript:;'>";
                $output .= "<span class='title'>". $item->title."</span>";
            $output .= "</a>";

    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>";
    }

}

?>