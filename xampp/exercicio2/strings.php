<!DOCTYPE html>
<div>
    <?php
    $str1 = "Ola";
    $str2 = "Adeus";
    echo "Strings: $str1, $str2 <br>";
    echo strlen($str1) . "<br>";
    echo strlen($str2) . "<br>";

    $res = strcmp($str1, $str2);
    if ($res == 0) {
        echo "The strings are equal";
    } else {
        echo "The strings are different";
    }
    ?></div>