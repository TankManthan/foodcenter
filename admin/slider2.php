<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <style>
    /* box-sizing: border-box */


    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        /* max-width: 1000px; */
        max-width: 100%;
        max-height: 600px;
        position: relative;
        margin: auto;
        background-color: #717171;
    }



    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        margin: 0px;
        /* cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease; */
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

        .prev,
        .next,
        .text {
            font-size: 11px
        }
    }

    img {
        height: 600px;
        width: 100%;

    }

    .center {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 330px;
        width: 80%;
        background-color: transparent;
        z-index: 1;
        border-radius: 25px;
    }

    .btn {
        z-index: 1;
        top: 25%;
        position: absolute;
        height: 25px;
        width: 230px;
        background-color: #717171;
        text-align: center;
        border-radius: 0px 10px 10px 0px;
    }

    .btn a {
        text-decoration: none;
        color: white;
    }

    .btn:hover {
        color: black;
        background-color: black;
    }
    </style>
</head>

<body>
    <div class="btn">
        <a href="slider.php">
            <b><i class="fa-solid fa-sun"></i> Click to modify slider</b>
        </a>
    </div>
    <div class="slideshow-container">
        <?php
        include '../connect.php';
        $dot = 0;
        $sql = "select * from `slider`";
        $result = mysqli_query($con, $sql);
        $no = mysqli_num_rows($result);
        if ($no > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $dot++;
                $l = NULL;
        ?>
        <div class="mySlides fade">
            <img src="../admin/images/<?php echo $row['image']; ?>" alt=""
                onerror="this.src='../foodcenter/images/loading.gif';">
            <div class="center glass" style="font-size: xx-large;color:black;">
                <center><b style="padding:30px 0px 30px 0px;font-family:font3;"><i class="fa-solid fa-sun"></i>
                        <?php echo $row['slogan']; ?> <i class="fa-solid fa-sun"></i></b>
                </center>
                <p style="font-size:large;padding:0px 100px 0px 100px;margin-bottom:20px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloremque temporibus nostrum enim,
                    numquam debitis voluptatem officiis numquam debitis voluptatem officiis numquam debitis voluptatem
                    officiis.
                </p>
                <center>
                    <img src="../gif1.gif" style="height:110px;width:200px;" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';">
                    <img src="../gif2.gif" style="height:110px;width:200px;margin-left:40px;" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';">
                    <img src="../gif3.gif" style="height:110px;width:200px;margin-left:40px;" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';">
                    <img src="../gif4.gif" style="height:110px;width:200px;margin-left:40px;" alt=""
                        onerror="this.src='../foodcenter/images/loading.gif';">
                </center>
                <center>
                    <span style="font-size:large;margin-top:20px;">Scroll down </span><br>
                    <i class="fa-solid fa-circle-chevron-down"></i>
                </center>
            </div>

        </div>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(<?php echo $dot; ?>)"></span>
            <span class="dot" onclick="currentSlide(<?php echo $l; ?>)"></span>
        </div>


        <?php
            }
        }
        ?>
    </div>

    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>

</body>

</html>


</body>

</html>