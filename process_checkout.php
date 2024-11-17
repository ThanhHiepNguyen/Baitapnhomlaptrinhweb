<?php
session_start();
include './cauhinh/ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $order_date = date("Y-m-d H:i:s");
    $status = "Đang giao hàng";


    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }

    $sql = "INSERT INTO orders (username, email, phone, address, order_date, total_price, status) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $username, $email, $phone, $address, $order_date, $total_price, $status);

    if ($stmt->execute()) {
        unset($_SESSION['cart']); 
        header("Location: success.php"); 
        exit();
    } else {
        echo "Lỗi khi lưu đơn hàng: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
