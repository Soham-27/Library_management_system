<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library PICT, Pune</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="AI-book-page-2.css">
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap'); */

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
                        <li class="option"><form id="z" method='post' action='books-section.php'><input type='hidden' name='search' value='physics'>
                            <a href="javascript:{}" onclick="document.getElementById('z').submit(); return false;"><span class="option-text">Physics</span></a></form>
                        </li>
                        <li class="option"><form id="w" method='post' action='books-section.php'><input type='hidden' name='search' value='chemistry'>
                            <a href="javascript:{}" onclick="document.getElementById('w').submit(); return false;"><span class="option-text">Chemistry</span></a></form>
                        </li>
                        <li class="option"><form id="x" method='post' action='books-section.php'><input type='hidden' name='search' value='artificial intelligence'>
                            <a href="javascript:{}" onclick="document.getElementById('x').submit(); return false;"><span class="option-text">Artificial Intelligence</span></a></form>
                        </li>
                        <li class="option"><form id="v" method='post' action='books-section.php'><input type='hidden' name='search' value='fundamentals'>
                            <a href="javascript:{}" onclick="document.getElementById('v').submit(); return false;"><span class="option-text">CS Fundamentals</span></a></form>
                        </li>
                        <li class="option"><form id="u" method='post' action='books-section.php'><input type='hidden' name='search' value='data structures'>
                            <a href="javascript:{}" onclick="document.getElementById('u').submit(); return false;"><span class="option-text">Data Structures & Algorithm</span></a></form>
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

        </div>
        <div class="panel">
        <div class="search-select">
            <form style="display: flex" method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' id='searchbar'>
            <input class="input-search" placeholder="  Search Books" name="search" value='<?php echo "$search"; ?>'>
                <div class="search-logo">
                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                    <button type='submit' name='submit' form='searchbar'>Search</button>
                </div>
                </div>
            </form>

            </div>
    </header>
    <!-- Header Ends -->

    <main>
        <section class="container">
            <div class="book-cover">
                <div class="book-img"></div>
            </div>
            <div class="book-description">
                <h1>Artificial Intelligence</h1>
                <p style="font-size: 20px;"> And Machine Learning</p> <br>
                <span class="author">
                    <p style="color: #5d5c5c;">Author - </p>
                    <p id="author-1">Neil Wilkins  </p>
                    <!-- <p id="author-2">Peter Norvig</p> -->
                </span>
                <span class="publication">
                    <p style="color: #5d5c5c;">Publication : 	Bravex Publications <br>
                        Published in : December 2019<br>
                        Subject : Artificial Intelligence
                    </p>
                    
                </span>
                <br>
                <p style="color: #5d5c5c;">Description - </p><br>
                <p> 
                    This book will give you a glimpse into the most fascinating topic of the 21st century--artificial intelligence (AI), a hypothetical simulation of a living brain inside a computer. In part 1 of this book, you will: Confluence of Interests AI Myths Manipulating the Limbic System Motivation for Creating AI Basic Concepts IoT Ecosystem Fighting Against Tech Giants Seminal Inventions Fear-based Consumerism AI and Growth Hacking AI and Correcting Fake News AI and Big Data AI and Employment AI and The Legal System AI and Self-driving Vehicles Tech Giants As Rulers of Society AI as One World Religion Dietary Advice by AI AI and Loneliness AI and Ethics AI and Social Credit Hacking AI AI as Sports Referees And much, much more Some of the topics covered in part 2 of this book include: The basics of robotics and what some of the advantages and disadvantages are. Reasons that experts are trying to warn us about robots. Myths about robots and the actual truth. Robotic Process Automation and how it relates to robotics. Mobile robots and how they have changed throughout the years. Artificial Intelligence and how it can be tied to robotics. Machine learning and how robots use it. Autonomous vehicles and how they work. How robots use speech recognition.
                </p>
            </div>
            <div class="book-info">
                <div class="book-availability">
                    <span class="availability">
                        <p>Availability</p>
                    </span>
                </div>
            </div>
        </section>
    </main>
        <!-- Main Ends -->

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