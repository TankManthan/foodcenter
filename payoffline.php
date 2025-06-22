<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../foodcenter/styles/contact_us.css">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
</head>
<style>
div {
    background-color: transparent;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 70%;
    margin-top: 60px;
    height: 400px;
    color: white;
}
</style>

<body style="background-image: url('admin/images/background.jpg');background-size:contain">
    <Center>
        <div class="glass">
            <img style="height:30px;width:30px;border-radius:5px;margin-top:30px;" src="../foodcenter/images/logo.png"
                alt="" onerror="this.src='../foodcenter/images/loading.gif';">
            <?php sleep(1); ?>
            <span style="font-size: 35px;margin-left:10px;">Food Center</span><br><br>
            <b>THANK YOU !</b>
            <p style="color: white;font-family:cursive">Food Center sent you a message and email , you can track your
                order using given
                link into it.</p><br>
            <p style="color: white;font-family:cursive">Your order will be delivered within 2 days.</p><br>
            <form action="index.php">
                <button type="submit" class="button" name="submit">Go to Food Center</button>
            </form>
            <form action="checkout2.php">
                <br> <button type="submit" class="button" name="cancel"
                    style="background-color:red;width: 160px;">Cancel
                    Order</button>
            </form>
        </div>
    </Center>

</body>

</html>