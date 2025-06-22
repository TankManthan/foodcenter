<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../admin/tables.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
</head>

<body style="   background-image: url('../admin/images/gujarati\ food\ \(4\).jpg');
      background-size: contain;">
    <?php
    include '../admin/head.php';
    ?>
    <center>

        <div class="t-heading glass" style="width:90%;">
            <div class="con1">
                <h2>Items information</h2>
            </div>
            <div class="con2">
                <a href="add_item.php"><button>Add item</button></a>
            </div>
        </div>
        <table class="glass">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../connect.php';
                $sql = "select * from `products`";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
                $srno = 0;
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $srno++;
                        $id = $row['id'];
                ?>
                        <tr>
                            <td><?php echo $srno; ?></td>
                            <td><?php echo $id; ?></td>
                            <td>
                                <center>
                                    <img src="../admin/images/<?php echo $row['image']; ?>" alt=""
                                        onerror="this.src='../foodcenter/images/loading.gif';"
                                        style="height:100px;width:100px;"><br>
                                    <?php echo $row['image']; ?>
                                </center>
                            </td>
                            <td><?php echo $row['name']; ?></td>
                            <td style="width:30%;"><?php echo $row['details']; ?></td>
                            <td style="width: 15%;"><?php echo "₹ " . $row['price']; ?></td>
                            <td style="width: 20%;"><?php echo $row['category']; ?></td>
                            <td>
                                <Center>
                                    <a href='../admin/update_item.php?updateid=<?php echo $id; ?>' style="color:blue;">Update
                                        <i class="fa-solid fa-pen"></i></a><br><br>
                                    <a href='delete_item.php?deleteid=<?php echo $id; ?>' style="color:red;">Delete <i
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
    <?php
    include '../admin/footer.php';
    ?>

</body>

</html>