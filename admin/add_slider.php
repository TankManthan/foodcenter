<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        .a {
            width: 100%;
            display: flex;
            /* align-items: center; */
            justify-content: center;
        }

        .c {
            z-index: 1;
            height: 250px;
            width: 600px;
            background-color: gainsboro;
            position: fixed;
            top: 10%;
            left: 30%;
            /* padding-top: 100px; */
            border: 1px solid black;
            border-radius: 15px;
            color: black;
            font-family: font2;
        }

        .c button {
            height: 30px;
            width: 150px;
            font-family: font2;
            background-color: orange;
            color: black;
            border: none;
            border-radius: 10px;
        }

        .c input {
            height: 30px;
            width: 300px;
            margin-left: 50px;
        }

        .c label {
            font-size: larger;
            margin-left: 50px;
        }

        .c textarea {
            margin-left: 50px;
            width: 490px;
            height: 50px;
        }
    </style>

</head>

<body style="   background-image: url('../admin/images/sandwich\ \(3\).jpg');
      background-size: contain;">
    <?php include 'head.php'; ?>
    <form action="add_slider.php" method="POST">
        <div class="c">
            <!-- <button name="cancel"
                style="position:fixed;top:12%;right:27%;height:30px;width:30px;background-color:transparent;">
                <i class="fa-solid fa-xmark"></i>
            </button> -->
            <span class="closebtn" style="position:fixed;top:12%;right:27%;color:black;"
                onclick="this.parentElement.style.display='none';"><a href="slider.php"
                    style="color:black;text-decoration:none;">&times;</a></span>
            <center>
                <h3>Add new</h3>
            </center>
            <label>Select image :-</label>
            <input type="file" name="image" required><br>
            <label>Enter slogan :-</label><br>
            <textarea name="slogan" required></textarea><br>
            <center>
                <button name="add">Add</button>
            </center>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
            include '../connect.php';
            $image = $_POST['image'];
            $slogan = $_POST['slogan'];
            $add = "insert into `slider`(`id`,`image`,`slogan`) values(NULL,'$image','$slogan')";
            $result = mysqli_query($con, $add);
            if ($result) {
                echo "<script>alert('Record added successfully...');
                window.location.href='slider.php'</script>";
            }
        }
        ?>
    </form>
    <?php include 'footer.php'; ?>
</body>

</html>