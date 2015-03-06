<?php

    $file = fopen("data/categories", "r");
    $menu = array();
    if($file)
    {
        while(($line = fgets($file)) != false)
        {
            $k = strpos($line, "=");
            $href = substr($line, 0, $k);
            $title = substr($line, $k + 1);
            $menu[$href] = $title;
        }
    }

    foreach($menu as $href=>$title)
        echo "<a href = \"?q=$href\"> $title</a>";


?>

