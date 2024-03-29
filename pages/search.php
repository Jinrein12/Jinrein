<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parenting Seminar / Search</title>
    <link rel="stylesheet" href="../assets/css/header-nav-style.css">
    <link rel="stylesheet" href="../assets/css/search-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/media-query.css">
</head>

<body>
    <!-- Header -->
    <div class="main-header">
        <aside class="left-title">
            <img src="../assets/img/cite-logo.png" alt="cite-logo">
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
            <a href="../index.php">Topics</a>
            <a href="search.php">Search Student</a>
            <a href="attendance-report.php">Attendance Report</a>
        </nav>
    </div>
    <!-- end Header -->

    
    <div class="search-container">
        <form action="" class="search-box" method="get">
            <input type="text" name="name" id="" placeholder="ex. Juan Dela Cruz" >
            <input type="text" name="name" id="" placeholder="ex. Batch 30">
            <button type="submit" class="searchButton">
                Search<!-- <i class="fa fa-search" style="font-size:24px"></i> -->
            </button>
        </form>
        <div class="result-box">
            <table class="result-table">
                <thead class="table-head">
                    <th class="result-name">Name</th>
                    <th class="result-section">Section</th>
                    <th class="result-batch">Batch</th>
                    <th class="result-adviser">Adviser</th>
                    <th class="result-tech">Technology</th>
                    <th class="more-info"></th>
                </thead>
                <tbody>
                    <tr>
                        <td class="result-name">John Lloyd O. Sacay</td>
                        <td class="result-section">DIET-6C</td>
                        <td class="result-batch">Batch 28</td>
                        <td class="result-adviser">Mr. Loquinario</td>
                        <td class="result-tech">Computer</td>
                        <td class="more-info"><a href="search-overlay.php">Profile</a></td>
                    </tr>
                     <tr>
                        <td class="result-name">Name</td>
                        <td class="result-batch">Batch</td>
                        <td class="result-section">Section</td>
                        <td class="result-adviser">Adviser</td>
                        <td class="result-tech">Technology</td>
                        <td class="more-info"><a href="">Profile</a></td>
                    </tr>
                    <tr>
                        <td class="result-name">Name</td>
                        <td class="result-batch">Batch</td>
                        <td class="result-section">Section</td>
                        <td class="result-adviser">Adviser</td>
                        <td class="result-tech">Technology</td>
                        <td class="more-info"><a href="">Profile</a></td>
                    </tr>
                    <tr>
                        <td class="result-name">Name</td>
                        <td class="result-batch">Batch</td>
                        <td class="result-section">Section</td>
                        <td class="result-adviser">Adviser</td>
                        <td class="result-tech">Technology</td>
                        <td class="more-info"><a href="">Profile</a></td>
                    </tr>
                    <tr>
                        <td class="result-name">Name</td>
                        <td class="result-batch">Batch</td>
                        <td class="result-section">Section</td>
                        <td class="result-adviser">Adviser</td>
                        <td class="result-tech">Technology</td>
                        <td class="more-info"><a href="">Profile</a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer">
            CITE Technical Institute, Inc. - Jinrein12
    </footer>
    <!-- end of footer -->

</body> 
</html>