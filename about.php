<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/about.css">
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style=" background-image: url('../foodcenter/admin/images/gujarati\ food\ \(2\).jpg');
    background-size: contain;">
    <?php
    include 'head.php';
    ?>
    <main class="about-container glass">
        <h1><i class="fa-solid fa-tag"></i> About Us</h1>
        <section class="company-info">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem consequuntur praesentium odio animi
                saepe magnam ex accusantium, enim sint, quibusdam dignissimos rerum voluptate eius, ab facere ipsam
                voluptatum sapiente ducimus.<br><br>
                Tempore saepe nam tempora laborum repudiandae. Quis nesciunt incidunt minus, obcaecati atque saepe
                suscipit quae sunt sit dolorum aliquid, ipsa nisi? Iusto, velit nam aspernatur sit necessitatibus illum
                excepturi pariatur?<br><br>
                Vitae voluptatum accusantium aut iste minus, cupiditate officiis sunt veniam quo quod molestias ratione,
                quia earum doloribus consequatur at. Vero consequuntur, enim nam consectetur corporis exercitationem
                officiis officia fugit sunt?</p>
        </section>

        <section class="meet-the-team">
            <h2>Meet Our Team</h2>

            <div class="team-member">
                <img src="" alt="Manthan" onerror="this.src='../foodcenter/images/loading.gif';">
                <div>
                    <h3>Tank Manthan</h3>
                    <p class="role">Founder & CEO</p>
                    <p>Manthan is the heart and soul of FoodCenter.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="" alt="Ankit" onerror="this.src='../foodcenter/images/loading.gif';">
                <div>
                    <h3>Bhalala Ankit</h3>
                    <p class="role">Head Designer</p>
                    <p>Ankit brings creativity and innovation to our store services.</p>
                </div>
            </div>
            <section class="contact-info">
                <h2>Our Contact Information</h2>
                <p><strong>Address:</strong> 302 Main Street, Vadala City, TX 75001</p>
                <p><strong>Phone:</strong> (320) 111-1111</p>
                <p><strong>Email:</strong> foodcenter18@gmail.com</p>
                <p><strong>Business Hours:</strong> Monday-Sunday, 10:00 AM - 12:00 PM</p>
            </section>

            <!-- Add more team members as needed -->
        </section>
    </main>
    <?php include 'footer.php';     ?>
</body>

</html>