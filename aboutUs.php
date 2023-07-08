<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="aboutUs.css">
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
        <section class="hero">
            <div class="heading">
                <h1>About Us</h1>
            </div>
            <div class="container">
                <div class="hero-content">
                    <h2>Welcome To Our Website</h2>
                    <p>Pune Institute of Computer Technology (popularly known as PICT), is an elite academic Institute
                        located in Pune, “The Oxford of the East.” Since our establishment in 1983, PICT has been
                        revolutionizing the education sector by nurturing skilled and industry-ready engineers.
                    </p>
                    <a href="aboutUs-2.php">
                        <button class="cta-button">Read More</button>
                    </a>
                </div>
                <div class="hero-image">
                    <img src="LibraryImages/College Photo 23 Feb 2023.jpg">
                </div>
            </div>
            <hr>
            </section>
            <div class="heading">
            <h1>About Library</h1>
        </div>

        <div class="about-library">

            <div class="about-library-info">

                <h2>Digital Library</h2>
                <p>A Digital Library being a special library with a focused collection of digital objects which can include text, visual material, audio material, video material, stored as electronic media formats. <br>
                    PICT Digital Library is well equipped with latest configuration machines having multimedia facility for accessing the E-resources. Access to various e-resources is available 24x7 to the users. <br>
                   <b> Digital Library Intranet Portal : http://10.10.15.220:8080/digital-library </b> <br>
                    <b>E-Resources of Digital Library</b> <br>
                    <b>E-Journals: </b> IEEE <br>
                    <b>E-Books:</b> Springer, PACKT, Prentice Hall of India and so many from reputed and standard publishers. <br>
                    <b>Video Lectures:</b> NPTEL <br>
                    <b>Institutional Repository:</b> Project Reports, College Magazine- PICTOREAL For accessing the contents, PICT users can contact: library@pict.edu <br>
                    </p>

                    <a href="e-resources.php">
                        <button class="cta-button">More E-Resources</button>
                    </a>
            </div>
            <div class="video-library">
                <div class="lib-cen-img"></div>

            </div>
        </div>
        <div class="ndli-info">
            <div class="ndli-lib">
                <h1>National Digital Library of India (NDLI)</h1> <br>
                <p>National Digital Library of India (NDLI) is a virtual repository of learning resources which is not just a repository with search/browse facilities but provides a host of services for the learner community. It is sponsored and mentored by Ministry of Education, Government of India, through its National Mission on Education through Information and Communication Technology (NMEICT). Filtered and federated searching is employed to facilitate focused searching so that learners can find the right resource with least effort and in minimum time. NDLI provides user group-specific services such as Examination Preparatory for School and College students and job aspirants. Services for Researchers and general learners are also provided. NDLI is designed to hold content of any language and provides interface support for 10 most widely used Indian languages. It is built to provide support for all academic levels including researchers and life-long learners, all disciplines, all popular forms of access devices and differently abled learners. It is designed to enable people to learn and prepare from best practices from all over the world and to facilitate researchers to perform inter-linked exploration from multiple sources. It is developed, operated and maintained from Indian Institute of Technology Kharagpur. <br>
    
                    PICT has become a member of National Digital Library of India (NDLI) Club. All students and staff members can enroll themselves as members of Pune Institute of Computer Technology NDLI Club. <br>
                    
                    For Details of NDLI club, please visit <a href="https://club.ndl.iitkgp.ac.in/club-home">https://club.ndl.iitkgp.ac.in</a> <br>
                    
                    For enrollment details please contact library.</p>
            </div>
            <div class="ndli-cover">
                <div class="ndli-img"></div>
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