<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/help.css">
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .f,
    h1,
    h2 {
        color: black;
    }
    </style>

</head>

<body style="  background-image: url('../foodcenter/admin/images/drinks\ \(2\).jpg');
    background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <main class="help-container glass">
        <center>
            <h1><i class="fa-solid fa-circle-info"></i> Help & FAQs
            </h1>
        </center>
        <!-- <div class="f">
            <h2>How can I contact customer service?</h2>
            <p>You can contact our customer service team via email at support@.com or by calling (123) 456-7890. We're
                here to assist you with any questions or concerns.</p>
        </div> -->
        <?php
        include '../foodcenter/connect.php';
        $sql = "select * from `help`";
        $result = mysqli_query($con, $sql);
        $no = mysqli_num_rows($result);
        if ($no > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
        ?>
        <!-- <div class="f">
            <h2>How do I return or exchange an item?</h2>
            <p>To return or exchange an item, please follow the instructions in our return policy. Contact customer
                service for a return authorization and shipping instructions.</p>
        </div> -->
        <div class="f">
            <h2><?php echo $row['que']; ?></h2>
            <p><?php echo $row['ans']; ?></p>
        </div>
        <?php }
        } ?>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>

</html>