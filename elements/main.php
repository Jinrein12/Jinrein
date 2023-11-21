<?php
    $pages = array ("a", "b", 1 , 0.5);
    

    $urlSegments = (explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    // print_r ($urlSegments[3]);    
    $pages;
    switch ($urlSegments[3]){
        case "dashboard": 
                            $pages="pages/404.php";
                            break;
        default: 
                    $pages="pages/404.php";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/home-style.css">
    <link rel="stylesheet" href="assets/css/header-nav-style.css">
    <link rel="stylesheet" href="assets/css/media-query.css">
</head>
<body>
    <div class="main-header">
        <aside class="left-title">
            <img src="assets/img/cite-logo.png" alt="cite-logo">
            <section class="cite-title" >
                <h4 >
                    CITE Technical Institute, Inc.
                </h4>
                <h3>
                    Parenting Seminar Information Page
                </h3>
            </section>
        </aside>
        <nav class="nav-panel">
            <a href="index.php">Topics</a>
            <a href="pages/search.php">Search Student</a>
            <a href="pages/attendance-report.php">Attendance Report</a>
        </nav>
    </div>

    <div class="body-container">    
        <div class="main">
            <div class="topic-list">
                <h3>Parenting Seminar Topics</h3>
                <ul class="topic-data">
                    <li>Legacy of Giving</li>
                    <li>CITE Dual Training System</li>
                    <li>EDUCHILD Case no. 1</li>
                    <li>EDUCHILD Case no. 2</li>
                    <li>EDUCHILD Case no. 3</li>
                    <li>EDUCHILD Case no. 4</li>
                    <li>EDUCHILD Case no. 5</li>
                    <li>EDUCHILD Case no. 6</li>
                    <li>Teaching of St. Josemaria Escriva to the Family</li>
                    <li>Family and School Collaboration</li>
                    <li>Role of Parents in the Education of Children</li>
                    <li>Teaching Professionalism by Example</li>
                    <li>Teaching of St. Josemaria Escriva (Ordinary Works)</li>
                    <li>Forming Adolescence</li>
                    <li>Mass Media and the Formation of Children    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer">
        <div class="footer-content">
            CITE Technical Institute, Inc. - Jinrein12
        </div>
    </footer>

</body>       
</html>