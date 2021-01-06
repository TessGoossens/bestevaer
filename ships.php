<?php
function GetShip($name)
{
    $ships = array(
        "lucky star" => array(
            "photo" => "luckystar.jpg",
            "GT" => 4178,
            "M3" => 7527.7
        ),
        "triumph" => array(
            "photo" => "triumph.jpg",
            "GT" => 4039,
            "M3" => 8262
        ),
        "ns angela" => array(
            "photo" => "nsangela.jpg",
            "GT" => 3806,
            "M3" => 6842.88
        ),
        "sabrina" => array(
            "photo" => "sabrina.jpg",
            "GT" => 6278,
            "M3" => 12416
        ),
        "hermes" => array(
            "photo" => "hermes.jpg",
            "GT" => 3806,
            "M3" => 6842.88
        ),
    );
    return $ships[$name];
}
?>
