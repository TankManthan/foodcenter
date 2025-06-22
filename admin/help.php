<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../admin/tables.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
</head>

<body style="   background-image: url('../admin/images/fries\ \(2\).jpg');
      background-size: contain;">
    <?php
    include '../admin/head.php';
    ?>
    <center>
        <div class=" t-heading glass" style="width:95%;">
            <div class="con1">
                <h2>Help & FAQ</h2>
            </div>
            <div class="con2">
                <a href="add_help.php"><button>Add new</button></a>
            </div>
        </div>
        <table class="glass" style="width:95%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Questions</th>
                    <th>Answers</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../connect.php';
                $sql = "select * from `help`";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
                $srno = 0;
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $srno++;
                        $id = $row['id'];
                        echo "<tr>
                        <td>" . $srno . "</td>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['que'] . "</td>
                        <td>" . $row['ans'] . "</td>
                        <td style='width:20%;'>
                    
                            <a href='update_help.php?updateid=" . $id . "'><button id='update'>Update</button></a>
                            <a href='delete_help.php?deleteid=" . $id . "'><button id='delete'>Delete</button></a>
                         
                            </td>
                      </tr>";
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