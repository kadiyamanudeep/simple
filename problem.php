<?php
$colors = ["red", "yellow", "blue"];
$quote = "never give up be consistent";
echo "<pre>";
print_r($colors);
echo "</pre>";
echo $quote;
echo "<br>";

$colorStr = implode(", ", $colors);



echo "These are the colors in the colors Array = " . ucfirst($colorStr) . ".";
