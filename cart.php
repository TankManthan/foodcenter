<?php session_unset();
ini_set('display_errors', 'Off');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../foodcenter/styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: white;
        }

        /* Product table styles */
        .product-table,
        .cart-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }

        .product-table th,
        .product-table td,
        .cart-table th,
        .cart-table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .product-table th,
        .cart-table th {
            background-color: #f4f4f4;
        }

        /* Add to Cart button styles */
        .add-to-cart,
        .remove-from-cart {
            display: inline-block;
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-to-cart:hover,
        .remove-from-cart:hover {
            background-color: #218838;
        }

        /* Cart Table Specific Styles */
        .cart-table td {
            text-align: center;
        }

        .cart-table td a {
            background-color: #dc3545;
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .cart-table td a:hover {
            background-color: #c82333;
        }

        /* Back to product list link */
        .back-to-products {
            display: block;
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            width: 200px;
            margin: 20px auto;
        }

        .back-to-products:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<?php include 'head.php'; ?>

<body style="background-image: url('../foodcenter/admin/images/background.jpg');background-size:contain">

    <h1>Your Shopping Cart</h1>
    <table class="cart-table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>


    <?php include 'footer.php'; ?>

</body>

</html>