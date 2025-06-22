<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <link rel="stylesheet" href="../foodcenter/styles/contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .true {
            padding: 15px;
            background-color: #04AA6D;
            color: white;
        }

        .false {
            padding: 15px;
            background-color: #f44336;
            color: white;
        }

        .warning {
            padding: 15px;
            background-color: #FFC300;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body>
    <?php
    include '../foodcenter/head.php';
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $con = mysqli_connect("localhost", "root", "", "foodcenter");
        $name = $_POST['name'];
        $message = $_POST['message'];
        $star = $_POST['star'];
        if ((preg_match('/^[a-zA-Z ]*$/', $name))) {
            $insert = "INSERT INTO `review` (`id`, `name`, `message`, `star`) VALUES (NULL, '$name', '$message',$star);";
            if (mysqli_query($con, $insert)) {
    ?>
                <div class="true">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Success.</strong> Review submitted successfully...
                </div>
            <?php            }
        } else {
            ?>
            <div class="warning">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Warning !</strong> Name must contain only charcter...
            </div>
    <?php
        }
    }

    ?>
    <center>
        <h1 style="color:black;" class="glass">Thank you for visiting our website...</h1>
    </center>
    <form action="review.php" method="POST">
        <main class="contact-container glass" style="max-width: 550px;">
            <center>
                <h3 style="font-size:larger">Review website</h3>
            </center>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="message">Your Experience</label>
                <textarea id="message" name="message" required style="height:100px;"></textarea>
            </div>
            <div class="star">
                <label for="star">Rate Our Website
                </label>
                <br> <select id="star" name="star" required
                    style="width:200px;background-color:transparent;border-radius:15px;height:33px;border:1px solid black;">
                    <option value="5"> 5 </option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1 </option>
                </select>
            </div>
            <center><button type="submit" class="button">Send Review</button></center>
        </main>
    </form>

    <hr>
    <center>
        <h1 style="color:black;" class="glass">Clients Review</h1>
        <div class="con" style="width:100%;  display: flex;flex-wrap: wrap;justify-content:center;">
            <?php
            include 'connect.php';
            $sql = "select * from `review`";
            $result = mysqli_query($con, $sql);
            $no = mysqli_num_rows($result);
            if ($no > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
            ?>
                    <div class="container1"
                        style="height:230px;width:230px;background-color:white;border-radius:20px;margin:20px;">
                        <div class="name"
                            style="color:green;font-size:larger;margin:10px 0px 10px 0px;text-decoration:underline">
                            <?php echo strtoupper($row['name']); ?>
                        </div>
                        <div class="message"
                            style="font-size: larger;padding:10px;background-color:gold;border-radius:20px;margin:0px 20px 0px 20px;">
                            <span style="color: black;margin-right:150px;font-size:larger;">"</span><br>
                            <?php echo $row['message']; ?><br>
                            <span style="color: black;margin-left:150px;font-size:larger;">"</span>
                        </div><br>
                        <div class="star">
                            <?php
                            $r = $row['star'];
                            if (filter_var($r, FILTER_VALIDATE_INT) == true) {
                                $i = (int)$r;
                                for ($a = 0; $a <= $i - 1; $a++) {
                                    echo '<i class="fa-solid fa-star" style="color:gold;"></i>';
                                }
                            } ?>
                        </div>
                    </div>
            <?php   }
            }  ?>

        </div>
    </center>
    <?php
    include '../foodcenter/footer.php';
    ?>
</body>

</html>