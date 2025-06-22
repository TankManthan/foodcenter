<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/tables.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
</head>

<body style=" background-image: url('../admin/images/drinks\ \(2\).jpg');
    background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <center>
        <div class="t-heading glass">
            <div class="con1">
                <h2>Admin Login Information</h2>
            </div>
            <div class="con2">
                <a href="add_adminuser.php"><button>Add user</button></a>
            </div>
        </div>
        <table class="glass" style="margin-bottom: 0px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Admin Id</th>
                    <th>First Password</th>
                    <th>Second Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../connect.php';
                $srno = 0;
                $sql = "select * from `admin_login`";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $srno++;
                        echo "<tr>
                        <td>" . $srno . "</td>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['admin_id'] . "</td>
                        <td>" . $row['pass1'] . "</td>
                        <td>" . $row['pass2'] . "</td>
                        <td>
                            <a href='update_admin.php?updateid=" . $id . "'><button id='update'>Update</button></a>
                            <a href='delete_admin.php?deleteid=" . $id . "'><button id='delete'>Delete</button></a>
                      </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </center>
    <br><br>
    <center>
        <div class="t-heading glass">
            <div class="con1">
                <h2>Login Information</h2>
            </div>
            <div class="con2">
                <a href="add_user.php"><button>Add User</button></a>
            </div>
        </div>
        <table class="glass">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../connect.php';
                $srno = 0;
                $sql = "select * from `create_user`";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $srno++;
                        echo "<tr>
                        <td>" . $srno . "</td>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['mobile'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['password'] . "</td>
                        <td>
                            <a href='update_user.php?updateid=" . $id . "'><button id='update'>Update</button></a>
                            <a href='delete_user.php?deleteid=" . $id . "'><button id='delete'>Delete</button></a>
                      </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>
<?php
include 'footer.php';
?>