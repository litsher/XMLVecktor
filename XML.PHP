<?php
    $data = file_get_contents('map.svg');
    $svgElements = new SimpleXMLElement($data);

    foreach ($svgElements as $element) {
        $continents =   array('Amerika');
        if (!in_array($element['id'], $continents ))
            echo $element['id'] . ': { path: \'' . $element->path['d'] . '\'},<br>';
    }
?>