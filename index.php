<?php
    $pages = array ("a", "b", 1 , 0.5);
    

    $urlSegments = (explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    // print_r ($urlSegments[3]);    
    $page;

    if(array_key_exists("3", $urlSegments)){
        switch ($urlSegments[3]){
            case "main.php": 
                                $pages="pages/404.php";
                                break;
            default: 
                        $pages="pages/404.php";
        }
    }else $page;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("elements/header.php");
        include ("assets/css/style.css");
        include ("elements/main.php");
    ?>
</body>
</html>