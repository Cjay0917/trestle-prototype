<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="landing.js"></script>
    <script src="https://kit.fontawesome.com/5357b59286.js" crossorigin="anonymous"></script>
    <title>Trestle | Home</title>
</head>

<body>
    <!--Start of header-->
    <header id="navigation">
        <a href="#Home" class="logo">Trestle</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>
        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="integrated_calendar/views/calendar.php">Calendar</a>
            <a href="integrated_calendar/views/task_checklist.php">Task Checklist</a>
            <a href="integrated_calendar/views/announcements.php">Announcements</a>
            <a href="./settings.php">Settings</a>
            <a href="./help.php">Help</a>
            <a href="#" onclick="logout();">Logout</a>
        </nav>
    </header>
    <!--End of header-->
    <!--Start of home-->
    <section class="home" id="home">
        <div class="content">
            <h3>Welcome to<br><span>Trestle</span></h3>
            <p>Here at Trestle we aim to help bridge the gap of E-ducation by integrating two of the popular E-learning
                platforms which are Canvas Instructure and Google Classroom. You can create your own tasks and checklist
                of your personalized activities as well as manage them together with the course works from Classroom and
                Canvas. You also have your own Calendar to help you see your activities and manage them accordingly.</p>
            <a href="help.php" class="btn">New To Trestle?<i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>

    </section>
    <!--End of home-->
    <div class="body-container">
        <!--Start of Features-->
        <section class="features">
            <h1 class="heading">Features of Trestle</h1>
            <div class="box-container">
                <div class="box reveal">
                    <img src="images/f1.png" alt="">
                    <h3>Integration of Two E-Learning Platforms</h3>
                    <p>Have an easy management on your activities and assignments from your Canvas Instructure and
                        Google Classroom accounts here at Trestle. By integrating two of the popular E-Learning media,
                        you can manage, create, and edit your activities all in one place.</p>
                </div>
                <div class="box reveal">
                    <img src="images/f2.png" alt="">
                    <h3>Your very own Personalized Calendar</h3>
                    <p>The Trestle Calendar helps you keep track of all the projects, assignments, and announcements
                        both from Canvas Instructure and Google Classroom. You can also add your own activities and edit
                        them to match your own personal schedule.</p>
                </div>
            </div>
            <div class="box-container">
                <div class="box reveal">
                    <img src="images/f3.png" alt="">
                    <h3>Create and Manage your Task Checklist</h3>
                    <p>Trestle provides a task-checklist for your personalized reminders and activities. This will help
                        you keep track of all the things you should do and get it done on time. The Recurring Reminders
                        feature also helps you if you ever forgot a specific task.</p>
                </div>
                <div class="box reveal">
                    <img src="images/f4.png" alt="">
                    <h3>Introducing Trestle Announcements</h3>
                    <p>Let Trestle manage all the announcement from Canvas Instructure and Google Classroom to help you
                        keep updated from all the activities and assignments from your professors/instructors. </p>
                </div>
            </div>
        </section>
        <!--End of Features-->
        <!--Start of About-->
        <section class="about">
            <h1 class="heading reveal">About</h1>
            <div class="about-container reveal">
                <div class="image">
                    <img src="images/about-img.png" alt="">
                </div>
                <div class="content">
                    <h3>The Meaning Behind Trestle</h3>
                    <p>Trestle is a capstone project of a group of Bachelor of Science in Information Technology (BSIT)
                        students from Bulacan State University. The name was derived from trestle bridges which are made
                        up of planks and supports architecturalized for bridges and railroads---which explains the major
                        function of trestle, to support and bridge E-learning media.</p><br>
                    <p>Trestle also acts as a support system like its origin trestle bridges in modern times, we act as
                        reinforcements to ease and strengthen the main purpose of the entire structural design of
                        E-ducation. As the rise on E-Z learning in the 21st century are sought-after, Trestle helps
                        elevate the capacity of the students by the use of its features as a whole.</p>
                </div>
            </div>
            <div class="information">
                <div class="about-container reveal">
                    <div class="image">
                        <img src="images/canvas.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Canvas Instructure</h3>
                        <p>Canvas is a web-based learning management system, or LMS. It is used by learning
                            institutions, educators, and students to access and manage online course learning materials
                            and communicate about skill development and learning achievement. Canvas includes a variety
                            of customizable course creation and management tools, course and user analytics and
                            statistics, and internal communication tools. Also a variety of built-in course construction
                            and management tools that can be customized to create unique and accessible teaching and
                            learning experiences.</p>
                    </div>
                </div>
                <div class="about-container reveal">
                    <div class="image">
                        <img src="images/classroom.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Google Classroom</h3>
                        <p>Google Classroom is a free blended learning platform developed by Google for educational
                            institutions that aims to simplify creating, distributing, and grading assignments. The
                            primary purpose of Google Classroom is to streamline the process of sharing files between
                            teachers and students. Google Classroom integrates a variety of other Google Applications
                            for Education, such as Google Docs, Google Sheets, Google Slides, Gmail, and Google Calendar
                            into a cohesive platform to manage student and teacher communication.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End of About-->
    </div>
    <!--Start of footer-->
    <div class="footer">
        <div class="box-container">
            <div class="box">
                <h3>About Us</h3>
                <p style="text-align:justify">We aim to help bridge the gap of E-ducation by integrating two of the
                    popular E-learning platforms which are Canvas Instructure and Google Classroom. Also by the
                    different features of Trestle, we envision to have E-Z learning and management for our users.</p>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#Home">Home</a>
                <a href="./integrated_calendar/views/calendar.php">Calendar</a>
                <a href="./integrated_calendar/views/task_checklist.php">Task Checklist</a>
                <a href="./integrated_calendar/views/announcements.php">Announcements</a>
                <a href="./settings.php">Settings</a>
                <a href="./help.php">Help</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
                <a href="#">LinkedIn</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <div class="info">
                    <i class="fas fa-phone"></i>
                    <p>0123-456-7890 <br> 0987-654-321</p>
                </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <p>trestle2022@gmail.com <br> trestle2022@yahoo.com</p>
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Malolos, Bulacan - Philippines, Zip code: 0123</p>
                </div>
            </div>
        </div>
        <h1 class="credit">&copy; Trestle 2022</h1>
    </div>
    <!--End of footer-->
    <!--Scroll effects-->
    <script type="text/javascript">
        window.addEventListener('scroll', reveal);
        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;
                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                }
                else {
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>
    <script type="text/javascript">
        var lastScrollTop = 0;
        navbar = document.getElementById("navigation");
        window.addEventListener('scroll', function () {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.style.top = "-80px";
            } else {
                navbar.style.top = "0";
            }
            lastScrollTop = scrollTop;
        })
    </script>
</body>

</html>