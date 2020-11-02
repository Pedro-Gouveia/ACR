<!DOCTYPE html>
<html>

<body>
    <?php
    $pages = array("home", "vars", "strings", "arrays", "about");

    function generateHTML($pages)
    {
        $pagesLength = count($pages);
        echo "<ul>";
        $page = 0;
        for ($i = 0; $i < $pagesLength; $i++) {
            //echo "<a href=\"./p=$i\"</a>"; // gera link
            //echo "<li>" . "<a href=\"/exercicio2/$pages[$i].php\"</a>" . $pages[$i] . "</li>"; // easy mode
            echo "<li>" . "<a href=\"./?p=$i\"</a>" . $pages[$i] . "</li>";
        }
        echo "</ul>";

        
        $page = $_GET['p'];
        $pageName = $pages[$page];
        echo $pageName;
    }

    echo generateHTML($pages);

    ?>
</body>

</html>