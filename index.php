<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library PICT, Pune</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
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
                    </form>
                    </div>
                </div>
            </div>
    </header>
    <!-- Header Ends -->

    <main>
        <section class="home" id="home">

            <div class="row">
                <div class="content">
                    <h3>Explore More Books</h3>
                    <p>
                        "Books are the quietest and most constant of friends; they are the most accessible and wisest of
                        counselors, and the most patient of teachers."<br> - Charles William Eliot
                    </p>
                    <a href="books-section.php" class="view">View More</a>
                </div>
                <section class="book-cover">
                    <a href="AI-book-page.php"><div class="book-cover-img">
                        <div class="book-cover-1-img"></div>
                    </div>
                    </a>
                    <a href="DSA-Python-book-page.php"><div class="book-cover-img">
                        <div class="book-cover-2-img"></div>
                    </div>
                    </a>
                    <a href="blockchain-book-page.php"><div class="book-cover-img">
                        <div class="book-cover-3-img"></div>
                    </div>
                    </a>

                    </div>
<!-- hell -->
                </section>
            </div>

        </section>
        <div class="box">
            <div class="featured">
                <div class="feat-name">Featured Books</div>
            </div>

        </div>



        <div class="book-feat">
            <div class="book-feat-1">
                <div class="book-feat-img-1"></div>
                <div class="book-name-1">
                    <a href="AI-book-page-2.php"><h2>Artificial Intelligence :</h2></a> <br>
                    <a href=""><p>Wilkins Neil Wilkins</p></a>
                </div>
            </div>
            <div class="book-feat-2">
                <div class="book-feat-img-2"></div>
                <div class="book-name-2">
                    <a href="cyber-security-book-page.php"><h2>Cyber Security :</h2></a> <br>
                    <a href=""><p>Kali Kevin Kali</p></a>
                </div>
            </div>
            <div class="book-feat-3">
                <div class="book-feat-img-3"></div>
                <div class="book-name-3">
                    <a href="ML-book-page.php"><h2>Machine Learning Programming :</h2></a> <br>
                    <a href=""><p>Samul Hack</p></a>
                </div>
            </div>
            <div class="book-feat-4">
                <div class="book-feat-img-4"></div>
                <div class="book-name-4">
                    <a href="Ece-book-page.php"><h2>Digital Electronics Principle Devices & Applications :</h2></a> <br>
                    <a href=""><p>Anil K Maini</p></a>
                </div>
            </div>
            <div class="book-feat-5">
                <div class="book-feat-img-5"></div>
                <div class="book-name-5">
                    <a href="maths-book-page.php"><h2>Learning Mathematics: From Basic to Advanced :</h2></a> <br>
                    <a href=""><p>G. Hardy</p></a>
                </div>
            </div>
        </div>

        <hr>
        <div class="library">
            <div class="library-info">
                <h3>Central Library, PICT <br><br></h3>
                <h4>About the Library </h4><br>
                <p>PICT central library being information hub provides access to full text, digital and printed
                    resources to support the scholarly and informational needs of the students, faculty, researchers,
                    and other users. The Central Library is well equipped with modern facilities and resources in the
                    form of on-line databases, e-journals, e-books, video lectures, project and seminar reports,
                    motivational, inspirational books, competitive examination books etc.¬ The library follows open
                    access system, which permits the users to enter in the Library Stack Section for browsing and
                    selecting the book. For locating and searching books in the library an internationally accepted
                    classification system “Dewey Decimal Classification” is used. Effective utilization of all resources
                    is the motto of the library. Various platforms for knowledge sharing like training sessions,
                    conferences, seminars, workshops are organized.
                    <br><br>
                </p>
            </div>
            <div class="library-img">
                <div class="lib-img"></div>
            </div>
        </div>

        <div class="line"></div>

        <div class="library-2">
            <p>
            <h4>Library Sections</h4><br>

            <b>Stack Area:</b> Excellent collection of books are available in this section which are arranged
            subject-wise. For locating the required book, the display of Book Location Charts is helpful. <br><br>
            <b>PG Section:</b> Textbooks and reference books required for Post-Graduation courses are kept here.
            Comfortable seating arrangement is made here itself for the users convenience. <br><br>
            <b>Reference Section:</b> The Reference Section is located on the mezzanine floor of the Central Library.
            This section includes all reference books related to the curriculum of the PICT. Books kept in this section
            are to be referred in the section itself only. <br><br>
            <b>Periodical Section:</b> All the latest periodicals are displayed here. Users will find back issues of
            periodicals in the same place. <br><br>
            <b>Reading Hall:</b> The facility of Automated Barcode Entry Register System is provided in the Reading
            Hall. It is having the excellent infrastructure, Wi-Fi access, ample number of charging ports. It is kept
            open beyond the college timing. At a time 300 students can seat here. <br><br>
            <b>Group Study Area:</b> In this section students can have discussion among themselves or with teachers
            regarding their curricular activities. <br><br>
            <b>Property Section:</b> Users are supposed to keep their belongings like sack, bag, helmet, etc. before
            entering the library. <br>

            <div class="more-info">
                <div class="read-more">
                    <a href="aboutUs.php">Read More</a>
                </div>
            </div>

        </div>

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