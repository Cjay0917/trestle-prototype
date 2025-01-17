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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../static/styles/announcements.css">
    <script src="https://kit.fontawesome.com/5357b59286.js" crossorigin="anonymous"></script>
    <script src="../static/script/announcements.js" async></script>
    <title>Trestle | Announcements</title>
</head>

<body>
    <!--Start of header-->
    <header id="navigation">
        <a href="#" class="logo">Trestle</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>
        <nav class="navbar">
            <a href="../../landing.php">Home</a>
            <a href="./calendar.php">Calendar</a>
            <a href="./task_checklist.php">Task Checklist</a>
            <a href="#announcements">Announcements</a>
            <a href="../../settings.php">Settings</a>
            <a href="../../help.php">Help</a>
            <a href="#" onclick="logout();">Logout</a>
        </nav>
    </header>
    <!--End of header-->
    <div class="wrapper">
        <div class="sidebar">
            <h2>Trestle</h2>
            <ul>
                <li><a href="../../landing.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="calendar.php"><i class="far fa-calendar"></i>Calendar</a></li>
                <li><a href="task_checklist.php"><i class="fas fa-tasks"></i>Task Checklist</a></li>
                <li class="li-active"><a class="a-active" href="#"><i class="fas fa-bullhorn"></i>Announcements</a></li>
                <li><a href="../../settings.php"><i class="fas fa-cog"></i>Settings</a></li>
                <li><a href="../../help.php"><i class="far fa-question-circle"></i>Help</a></li>
                <li><a href="#" onclick="logout();"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
            </ul>
        </div>
        <!-- Modal for viewing complete information -->
        <div id="show_modal">
            <div id="modal_content"></div>
        </div>
        <!--Start of Announcements-->
        <div class="body-container">
            <h1 class="heading">Announcements</h1>
            <div class="announcement-container">
                <br>
                <br>
                <div id="notification_section">
                </div>
            </div>
        </div>
        <!--End of Announcements-->
    </div>

</body>

</html>