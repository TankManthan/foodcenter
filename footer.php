<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/homepage.css">
</head>

<body>
    <footer>
        <div class="backtotop">
            <a href="#"><button class="backtotop-button" style="height:35px;width:200px;"> Back To Top <i
                        class="fa-solid fa-arrow-up"></i></button>
            </a>
        </div>
        <div class="footer" style="color:white;">
            <div class="f1">
                TOOLS<br>
                <a href="#">AI Image Generator</a><br>
                <a href="#">AI Video Generator</a><br>
                <a href="#">Image Upscaler</a><br>
                <a href="#">Background Remover</a><br>
                <a href="#">Photo Editor</a><br>
                <a href="#">All Freepik Tools</a><br>
            </div>
            <div class="f2">
                INFORMATION<br>
                <a href="#">Pricing</a><br>
                <a href="#">About Us</a><br>
                <a href="#">API</a><br>
                <a href="#">Jobs</a><br>
                <a href="#">Sell Content</a><br>
                <a href="#">Freepik Grand Guidelines</a><br>
                <a href="#">Events</a><br>
                <a href="#">Search Trends</a><br>
                <a href="#">Blog</a><br>
            </div>
            <div class="f3">
                LEGAL<br>
                <a href="#">Terms Of Use</a><br>
                <a href="#">Licenese Agreement</a><br>
                <a href="#">Privacy Policy</a><br>
                <a href="#">Copyright Information</a><br>
                <a href="#">Cookies Policy</a><br>
                <a href="#">Cookies Settings</a><br><br>

                SUPPORT<br>
                <a href="#">FAQ</a><br>
                <a href="#">Search Guide</a><br>
                <a href="#">Contact</a><br>
            </div>
            <div class="f4">
                <i class="fa-brands fa-facebook" style="background-color: blue;border-radius:50%;"></i>
                <i class="fa-brands fa-twitter" style="background-color: #0680a5;border-radius:5px;"></i>
                <i class="fa-brands fa-instagram" style="background-color: #bb0d55;border-radius:7px;"></i>
                <i class="fa-brands fa-linkedin" style="background-color: #0680a5;border-radius:7px;"></i>
                <i class=" fa-brands fa-youtube" style="background-color: red;border-radius:5px;"></i>
                <i class=" fa-brands fa-pinterest" style="background-color: red;border-radius:50%;"></i>
                <div>
                    <div class=" footer-info">Copyright © 2005-2025 <div style="color:green;display:inline">
                            FOODCENTER</div> Inc.<br> All Rights
                        Reserved.
                    </div>
                </div><br><br><br>
                <div class=" nav2a">
                    <center>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                        ?>
                            <a href="../foodcenter/login.php"><button style="background-color:white;color:green">Logged
                                    In</button></a>
                        <?php
                        } else {
                        ?>
                            <a href="../foodcenter/login.php"><button>Login</button></a>
                        <?php } ?> <br><br>
                        <a href="createnew.php"><button>Create
                                New</button></a>
                    </center>

                </div>
            </div>
        </div>
        <div class="f5" style="color:white">
            Created and Developed by : Manthan & Ankit
        </div>
    </footer>
</body>

</html>