<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library PICT, Pune</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="books-section.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Belanosima&display=swap');
    </style>
</head>

<body>
<header>
        <div class="nav-bar">
            <div class="main-logo">
                <div class="nav-logo border">
                    <a id="click-logo" href="index.php">
                        <div class="logo"></div>
                    </a>
                </div>
                <div class="logo-name">
                    <a id="click-logo" href="index.php">
                        <p>Library PICT, Pune</p>
                    </a>
                </div>
            </div>

            <div class="space">
                <div class="nav-about">
                    <a href="aboutUs.php">About Us</a>
                    <div class="underline"></div>
                </div>
                <div class="nav-E-resources">
                    <a href="e-resources.php">E-Resources</a>
                </div>
                <div class="nav-library-service">
                    <a href="services.php">Library Services</a>
                </div>
                <div class="select-menu">
                    <div class="select-btn">
                        <div class="section-name">
                            <span class="sBtn-text">Books Section</span>
                        </div>

                        <div class="drop-down">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </div>

                    <ul class="options">
                        <li class="option">
                            <a href="books-section.php"><span class="option-text">Books Section</span></a>
                        </li>
                        <li class="option"><form id="y" method='post' action='books-section.php'><input type='hidden' name='search' value='math'>
                            <a href="javascript:{}" onclick="document.getElementById('y').submit(); return false;"><span class="option-text">Mathematics</span></a></form>
                        </li>
                        <li class="option"><form id="z" method='post' action='books-section.php'><input type='hidden' name='search' value='blockchain'>
                            <a href="javascript:{}" onclick="document.getElementById('z').submit(); return false;"><span class="option-text">Blockchain</span></a></form>
                        </li>
                        <li class="option"><form id="w" method='post' action='books-section.php'><input type='hidden' name='search' value='object'>
                            <a href="javascript:{}" onclick="document.getElementById('w').submit(); return false;"><span class="option-text">Objected Oriented Programming</span></a></form>
                        </li>
                        <li class="option"><form id="x" method='post' action='books-section.php'><input type='hidden' name='search' value='artificial intelligence'>
                            <a href="javascript:{}" onclick="document.getElementById('x').submit(); return false;"><span class="option-text">Artificial Intelligence</span></a></form>
                        </li>
                        <li class="option"><form id="v" method='post' action='books-section.php'><input type='hidden' name='search' value='data structures'>
                            <a href="javascript:{}" onclick="document.getElementById('v').submit(); return false;"><span class="option-text">Data Structures & Algorithm</span></a></form>
                        </li>
                        <li class="option"><form id="u" method='post' action='books-section.php'><input type='hidden' name='search' value='machine learning'>
                            <a href="javascript:{}" onclick="document.getElementById('u').submit(); return false;"><span class="option-text">Machine Learning</span></a></form>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="info">
                <div class="logIn">
                    <a href="login.php">Log In</a>
                </div>
                <div class="signUp border">
                    <a href="signUp.php">Sign Up</a>
                </div>
            </div>

            <!-- </div> -->

<?php
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$search="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $search = test_input($_POST["search"]);
}

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = 'akshit2405';
$dbname = 'library';

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * FROM BOOKS WHERE SUMMARY LIKE '%".$search."%'";
$result = $conn->query($sql);
/*while ($row = $result->fetch_assoc()){
    echo '<br>';
    foreach ($row as $x){
        echo $x." ";
    }
}*/
?>

        </div>
        <div class="panel">
        <div class="search-select">
            <form style="display: flex" method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' id='searchbar'>
                <input class="input-search" placeholder="  Search Books" name="search" value='<?php echo "$search"; ?>'>
                <div class="search-logo">
                <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                <button type='submit' name='submit' form='searchbar'>Search</button>
                </form>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Ends -->


    <main>
        <div class="container">
            <div class="main-container">
                <div class="separate-div">
                    <div class="books-container">
                        <h4>Suggested topics within your search</h4>
                        <div class="related-search" style="padding:0px 7px"><br> 
                        <form id="l" method='post' action='books-section.php'><input type='hidden' name='search' value='object'></form>
                        <form id="m" method='post' action='books-section.php'><input type='hidden' name='search' value='blockchain'></form>
                        <a href="javascript:{}" onclick="document.getElementById('x').submit(); return false;">Artificial Intelligence </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('l').submit(); return false;">Objected Oriented Programming </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('m').submit(); return false;">Blockchain </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('u').submit(); return false;">Data Structures and Analysis </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('z').submit(); return false;">Physics </a>
                        </div>

                        <div class="library-container">
                            <ol><?php $num=1;
                                while ($row = $result->fetch_assoc()){
                                echo '<div class="sr-no" style="border:0px">';
                                    echo '<p>'.$num.'</p>';
                                    echo '<li>';
                                        echo '<div class="book-img" style="border:0px"><img style="height:220px; width:150px" src="'.$row["IMAGEPATH"].'"></div>';
                                        echo '<div class="book-info" style="padding:0px 7px; border:0px"><pre></pre>'.$row["BOOKNAME"].', '.$row["SUMMARY"].'<br>By '.$row["AUTHORNAME"].'<br><br>Pages: '.$row["PAGES"];
                                        echo '<br><br>Publication: '.$row["PUBLISHERNAME"].', '.$row["PUBLISHDATE"].'<br><br>Section Available: '.$row["SECTION"].'</div>';
                                        echo '</li>';
                                echo '</div>'; $num++;
                                }
/*                                <div class="sr-no">
                                    <p>2.</p>
                                    <li>
                                        <div class="book-img">Book Image</div>
                                        <div class="book-info">Book Info</div>
                                    </li>
                                </div>
                                <div class="sr-no">
                                    <p>3.</p>
                                    <li>
                                        <div class="book-img">Book Image</div>
                                        <div class="book-info">Book Info</div>
                                    </li>
                                </div>
                                <div class="sr-no">
                                    <p>4.</p>
                                    <li>
                                        <div class="book-img">Book Image</div>
                                        <div class="book-info">Book Info</div>
                                    </li>
                                </div>
                                <div class="sr-no">
                                    <p>5.</p>
                                    <li>
                                        <div class="book-img">Book Image</div>
                                        <div class="book-info">Book Info</div>
                                    </li>
                                </div>
                                <div class="sr-no">
                                    <p>6.</p>
                                    <li>
                                        <div class="book-img">Book Image</div>
                                        <div class="book-info">Book Info</div>
                                    </li>
                                </div>
                                <div class="sr-no">
                                    <p>7.</p>
                                    <li>
                                        <div class="book-img">Book Image</div>
                                        <div class="book-info">Book Info</div>
                                    </li>
                                </div>
                                <div class="sr-no">
                                    <p>8.</p>
                                    <li>
                                        <div class="book-img">Book Image</div>
                                        <div class="book-info">Book Info</div>  
                                    </li>
                                </div>*/ ?>
                            </ol>
                        </div>
                    </div>


                    <div class="info-container">
                        <p>Results</p>
                    </div>
                </div>
            </div>
    </main>

    <footer>
        <div class="foot-panel">
            <a href="#">
                <p>Back To Top</p>
            </a>
        </div>

        <div class="footer-panel">
            <div class="firstBlock">
                <ul>
                    <div class="info">Quick Links</div>
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="aboutUs-2.php">
                        <li>About Us</li>
                    </a>
                    <a href="e-resources.php">
                        <li>E-Resources</li>
                    </a>
                    <a href="services.php">
                        <li>Library Services</li>
                    </a>
                    <a href="books-section.php">
                        <li>Books Section</li>
                    </a>
                    <a href="login.php">
                        <li>Log In</li>
                    </a>
                </ul>
            </div>
            <div class="secondBlock">
                <ul>
                    <div class="info">Get to know Us</div>
                    <a href="aboutUs-2.php">
                        <li>About PICT College</li>
                    </a>
                    <a href="aboutUs.php">
                        <li>About PICT Library</li>
                    </a>
                    <a target="_blank"
                        href="https://www.google.com/maps/place/SCTR'S+Pune+Institute+of+Computer+Technology/@18.4575421,73.8482587,17z/data=!3m1!4b1!4m6!3m5!1s0x3bc2eac85230ba47:0x871eddd0a8a0a108!8m2!3d18.4575421!4d73.8508336!16zL20vMDc3MTl3?entry=ttu">
                        <li>Location</li>
                    </a>
                </ul>
            </div>
            <div class="thirdBlock">
                <ul>
                    <div class="info">Approved By </div>
                    <a target="_blank" href="https://pict.edu/naac/">
                        <li>NAAC</li>
                    </a>
                    <a target="_blank" href="https://pict.edu/NBA/">
                        <li>NBA</li>
                    </a>
                    <a target="_blank" href="https://pict.edu/pdf/footer/AICTE%20Approvals_08June23.pdf">
                        <li>AICT Approval</li>
                    </a>
                    <a target="_blank" href="https://pict.edu/pdf/footer/ara_fe_final%20approval%20letter_2021-22.pdf">
                        <li>ARA Approval</li>
                    </a>
                </ul>
            </div>
            <div class="fourthBlock">
                <ul>
                    <div class="info">Contact Us</div>

                    <li>Phone No :- <a target="_blank" href="">020 2437 1101</a></li>
                    
                    <li>Email id :- <a target="_blank" href="">registrar@pict.edu</a>
                    </li>
                    <li>Address :- 
                        <a target="_blank" href="https://www.google.com/maps/place/SCTR'S+Pune+Institute+of+Computer+Technology/@18.4575421,73.8508336,17z/data=!3m1!4b1!4m6!3m5!1s0x3bc2eac85230ba47:0x871eddd0a8a0a108!8m2!3d18.4575421!4d73.8508336!16zL20vMDc3MTl3?entry=ttu">
                            Survey No. 27, Near,<br> Trimurti Chowk, Bharati Vidyapeeth Campus,<br> Dhankawadi, Pune, Maharashtra 411043
                        </a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="social-details">
            <div class="insta">
                <div class="img">
                    <a target="_blank" href="https://www.instagram.com/pict.pune/?hl=en"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="linkedIn">
                <div class="img">
                    <a target="_blank" href="https://www.linkedin.com/school/pune-institute-of-computer-technology/"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="facebook">
                <div class="img">
                    <a target="_blank" href="https://www.facebook.com/PICTOfficial/"><i
                            class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <div class="twitter">
                <div class="img">
                    <a target="_blank" href="https://twitter.com/punepict?lang=en"><i
                            class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr>

        <div class="copyright-info">
            <div class="copy">
                <i class="fa-regular fa-copyright"></i>
            </div>
            <p>Copyright 2022-23 PICT, Pune. All Rights Reserved <br>
                Developed by <a href="team.php"> WEB TEAM </a> of First Year PICT.</p>
        </div>


    </footer>

    <script src="script.js"></script>

</body>

</html>