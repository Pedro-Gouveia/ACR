<!DOCTYPE html>
<html>

<body>
    <?php
    $texto = "this is a string";
    $texto2 = "string 2";
    $length = strlen($texto);
    echo $length . "<br>";

    $cmp = strcmp($texto, $texto2);
    echo $cmp . "<br>";

    $rev = strrev($texto);
    echo $rev . "<br>";

    echo trim($texto, "g") . "<br>";

    $day = date("l");

    function isWeekend($day)
    {
        if ($day != "Saturday" or $day != "Sunday") {
            return "Nunca mais e fim de semana" . "<br>";
        }
        return "Boa!" . "<br>";
    }

    echo isWeekend($day);


    $intArray = array(2, 1, 3);

    function sortArray($intArray)
    {
        sort($intArray);
        $intArrayLength = count($intArray);
        for ($i = 0; $i < $intArrayLength; $i++) {
            echo $intArray[$i]. "<br>";
        }
    }

    echo sortArray($intArray);

    ?>
</body>

</html>