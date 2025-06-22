<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/tables.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
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

        table a {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        table a:hover {
            text-decoration: underline;
            color: black;
        }

        .rin a {
            color: white;
        }

        .rin a:hover {
            color: black;
        }
    </style>
</head>

<body style="   background-image: url('../admin/images/sandwich\ \(3\).jpg');
      background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <form action="slider.php" method="POST">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
            include '../connect.php';
            $image = $_POST['image'];
            $slogan = $_POST['slogan'];
            $add = "insert into `slider`(`id`,`image`,`slogan`) values(NULL,'$image','$slogan')";
            $result = mysqli_query($con, $add);
            if ($result) {
        ?>
                <div class="true">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Success.</strong> Item added successfully...
                </div>
            <?php    } else {
            ?>
                <div class="false">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Danger !</strong> Error occured...
                </div>
        <?php     }
        }
        ?>
    </form>
    <form action="slider.php" method="POST">
        <center>
            <div class="t-heading glass" style="width: 70%;">
                <div class="con1">
                    <h2>Slider information</h2>
                </div>
                <div class="rin">
                    <!-- <button name="add-button">Add new</button> -->
                    <a href="../admin/add_slider.php" style="text-decoration:none;font-size:large;">Add new
                        <i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
            <table class="glass" style="width:70%;">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Image</th>
                        <th>Slogan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../connect.php';
                    $srno = 0;
                    $sql = "select * from `slider`";
                    $result = mysqli_query($con, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $srno++;
                    ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td>
                                    <center>
                                        <img src="../admin/images/<?php echo $row['image']; ?>" alt=""
                                            onerror="this.src='../foodcenter/images/loading.gif';"
                                            style="height:100px;width:100px;"><br>
                                        <?php echo $row['image']; ?>
                                    </center>
                                </td>
                                <td><?php echo $row['slogan']; ?></td>
                                <td>
                                    <Center>
                                        <a href='../admin/update_slider.php?slideruid=<?php echo $id; ?>'
                                            style="color:blue;">Update
                                            <i class="fa-solid fa-pen"></i></a><br><br>
                                        <a href='delete_slider.php?sliderdid=<?php echo $id; ?>' style="color:red;">Delete <i
                                                class="fa-solid fa-trash"></i></a><br>
                                    </Center>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </center>
    </form>
</body>

</html>
<?php
include 'footer.php';
?>