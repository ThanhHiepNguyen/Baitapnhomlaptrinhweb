<?php
session_start();
require "./cauhinh/ketnoi.php";

if (isset($_GET['pet_id'])) {
    $pet_id = $_GET['pet_id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $sql = "SELECT * FROM pets WHERE pet_id = $pet_id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);

    if ($product) {
        $product_id = $product['pet_id'];
        $product_name = $product['pet_name'];
        $price = $product['price'];
        $image_url = $product['image_url'];

        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$product_id] = [
                'name' => $product_name,
                'price' => $price,
                'image_url' => $image_url,
                'quantity' => 1
            ];
        }
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
