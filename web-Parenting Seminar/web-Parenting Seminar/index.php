<?php
//    //indexed array

    // $page = array("s", "b", "d");    
    // $page [100]= "sample";
    // $page [0]="test";

    ///////////////////////////////////////////

    //associated array
    // $page = array (
    //                 "title"=>"dashboard",
    //                 "stylesheet" => "dashboard.css",
    //                 "script"=>"dashboard.js"
    // );

     /////////////////////////////////////////

    //     $main = array (
    //                     "title"=>"search",
    //                     "stylesheet" => "style.css",
    //                     "script"=>"__"
    //     );

    //     $search = array (
    //                     "title"=>"search",
    //                     "stylesheet" => "search-style.css",
    //                     "script"=>"__"
    //     );
        
    //     $attendanceReport = array (
    //                     "title"=>"attendance report",
    //                     "stylesheet" => "attendance-report-style.css",
    //                     "script"=>"__"
    //     );

    // ////////////////////////////////////////

    // $mda = array(
    //         array ("a", "b", "c"),
    //         array ("x", "y", "z")
    //     );
    // $mda[1]["z"]="abc";


    // change value
    // specify key, change value
    // print_r($page["title"] = "admin");

    // $students = array(
    //                 array(  "first_name"=>"No",
    //                         "last_name" =>"Entry", 
    //                         "section"=>"A",
    //                         "batch"=>33),
                
    //                 array(  "first_name"=>"Stay",
    //                         "last_name" =>"Safe", 
    //                         "section"=>"B",
    //                         "batch"=>34),

    //                 array(  "first_name"=>"Technical",
    //                         "last_name" =>"School", 
    //                         "section"=>"C",
    //                         "batch"=>35),
            
    //                 array(  "first_name"=>"Proper",
    //                         "last_name" =>"Grooming", 
    //                         "section"=>"D",
    //                         "batch"=>36),     
    // );
    // $students[] = $mda;

    // test area
    //     echo "<pre>";
    //     print_r($students);
    //           print_r($page["keyword"] = "dashboard");
    //     echo "</pre>";
    // include ("elements/header.php");
    // $pages = array ("a", "b", 1 , 0.5);
    $urlSegments = (explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    print_r ($urlSegments[3]);    
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


$pages = array(
                "attendance" => array("title" => "attendance report",
                                      "stylesheet" => "assets/attendance-report-style.css",
                                      "page" => "pages/attendance-report.php"
                                    ),
                "search" => array("title" => "search",
                                      "stylesheet" => "search-style.css",
                                      "page" => "pages/search.php"
                                    )
);

        echo "<pre>";
            print_r($pages);
        echo "</pre>";

    exit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parenting Attendance
    </title>
    <link rel="stylesheet" href="assets/css/header-nav-style.css">
    <link rel="stylesheet" href="assets/css/home-style.css">
    <link rel="stylesheet" href="assets/css/search-style.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
        include ("elements/header.php");
        include ("elements/main.php");
        // include ("pages/search.php");
        include ("elements/footer.php");
    ?>
</body>
</html>