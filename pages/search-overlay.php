<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parenting Seminar / Search</title>

    <link rel="stylesheet" href="../assets/css/header-nav-style.css">
    <link rel="stylesheet" href="../assets/css/search-style.css">
    <link rel="stylesheet" href="../assets/css/search-style-overlay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/media-query.css">
</head>
<body>
<!-- Header -->
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
            <a href="../index.php">Topics</a>
            <a href="search.php">Search Student</a>
            <a href="attendance-report.php">Attendance Report</a>
        </nav>
    </div>
<!-- end Header -->

<!-- Main page content -->
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
<!-- end of Main page content -->

<!-- modal display -->
    <section class="modal-display">
        <h4>Information</h4>
        <div class="controls">
            <button></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
        <div class="modal-info">
            <h3>
                John Lloyd O. Sacay
            </h3>       
            <div >
                <p>Batch: <br> ___________</p>
                <p>Section: <br> ___________</p>
                <p>Adviser: <br> ___________</p>
            </div>
        </div>
        <div class="modal-info-tabs">
            <div class="modal-selection">
                <button>SEMINAR ATTENDANCE</button>
                <button>PARENTS/GUARDIANS' INFO</button>
            </div>
            <div class="modal-info-content" >
                <div class="modal-attendance" >
                    <h3>
                        Attendance Summary
                    </h3>
                    <table class="modal-tab-attendance">
                        <thead>
                            <th>Year Level</th>
                            <th>Sep</th>
                            <th>Oct</th>
                            <th>Nov</th>
                            <th>Jan</th>
                            <th>Feb</th>
                            <th>Mar</th>
                            <th>Apr</th>
                            <th>May</th>
                            <th>Total</th>
                        </thead>
                        <tbody >
                            <tr class="modal-tab-attendance-tr">
                                <td>1st Year</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>8</td>
                            </tr>
                            <tr class="modal-tab-attendance-tr">
                                <td>2nd Year</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>8</td>
                            </tr>
                            <tr class="modal-tab-attendance-tr">
                                <td>3rd Year</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal-tab-parents" >
                    <select name="infor" id="">
                        <option value="parent">PARENTS</option>
                        <option value="">GUARDIAN</option>
                    </select>

                    <div class="modal-tab-parents-info" >
                        <div class="modal-tab-parents-content">
                            <h3>Fathers' Info</h3>
                            <p>Juan Dela Cruz</p>
                            <p>January 1, 1989</p>
                            <p>Region VII, Cebu, Cebu City</p>
                            <p>Farmers and Fishermen</p>
                            <p>Filipino</p>
                            <p>0935xxxxxxx</p>
                            <p>Region VII, Cebu, Cebu City</p>
                        </div>
                        <div class="modal-tab-parents-content">
                            <h3>Mothers' Info</h3>
                            <p>Juan Dela Cruz</p>
                            <p>January 1, 1989</p>
                            <p>Region VII, Cebu, Cebu City</p>
                            <p>Farmers and Fishermen</p>
                            <p>Filipino</p>
                            <p>0935xxxxxxx</p>
                            <p>Region VII, Cebu, Cebu City</p>
                        </div>
                    </div>
                    <div class="modal-tab-guardian-info" >
                        <h3>Guardians' Info</h3>
                        <p>Juan Dela Cruz</p>
                        <p>January 1, 1989</p>
                        <p>Region VII, Cebu, Cebu City</p>
                        <p>Farmers and Fishermen</p>
                        <p>Filipino</p>
                        <p>0935xxxxxxx</p>
                        <p>Region VII, Cebu, Cebu City</p>
                    </div>

                </div>
            </div>
            <div class="modal-closing">
                <button>Close</button>
            </div>
        </div>
    </section>
<!-- end of modal display -->

<!-- footer -->
    <footer class="footer">
            CITE Technical Institute, Inc. - Jinrein12
    </footer>
<!-- end of footer -->

</body> 
</html>