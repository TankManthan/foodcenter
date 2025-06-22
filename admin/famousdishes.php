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

<body style="   background-image: url('../admin/images/pizza\ \(1\).jpg');
      background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <form action="chef.php" method="POST">
        <center>
            <div class="t-heading glass" style="width: 90%;">
                <div class="con1">
                    <h2>Most loved dishes</h2>
                </div>
                <div class="rin">
                    <a href="../admin/add_fdish.php" style="text-decoration:none;font-size:large;">Add new
                        <i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
            <table class="glass" style="width:90%;">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../connect.php';
                    $srno = 0;
                    $sql = "select * from `famous_dishes`";
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
                                        <?php echo $row['name']; ?>
                                    </center>
                                </td>
                                <td><?php echo $row['name']; ?></td>
                                <td style="width:40%;"><?php echo $row['details']; ?></td>
                                <td><?php echo "₹" . $row['price']; ?></td>
                                <td>
                                    <Center>
                                        <a href='../admin/update_fdish.php?updateid=<?php echo $id; ?>'
                                            style="color:blue;">Update
                                            <i class="fa-solid fa-pen"></i></a><br><br>
                                        <a href='delete_fdish.php?deleteid=<?php echo $id; ?>' style="color:red;">Delete <i
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