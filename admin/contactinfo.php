<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../admin/tables.css">
    <link rel="stylesheet" href="../admin/styles/homepage.css">
</head>

<body style="background-image: url('../admin/images/burger\ \(3\).jpg');background-size:contain">
    <?php
    include '../admin/head.php';
    ?>
    <center>

        <div class="t-heading glass">
            <div class="con1">
                <h2>Contact requests</h2>
            </div>
            <div class="con2">
                <a href="addconreq.php"><button>Add request</button></a>
            </div>
        </div>
        <table class="glass">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../connect.php';
                $sql = "select * from `contact_us`";
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
                        <td>" . $row['full_name'] . "</td>
                        <td>" . $row['email_address'] . "</td>
                        <td>" . $row['subject'] . "</td>
                        <td>" . $row['message'] . "</td>
                        <td>
                            <a href='update_conreq.php?conreq_uid=" . $id . "'><button id='update'>Update</button></a>
                            <a href='delete_conreq.php?conreq_did=" . $id . "'><button id='delete'>Delete</button></a>
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