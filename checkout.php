<?php
session_start();

// Kiểm tra giỏ hàng
if (empty($_SESSION['cart'])) {
    header('Location: cart.php');
    exit();
}

// Lấy tổng giá trị giỏ hàng
$totalPrice = 0;
foreach ($_SESSION['cart'] as $item) {
    $totalPrice += $item['price'] * $item['quantity'];
}

// Thực hiện thanh toán (có thể tích hợp API thanh toán ở đây)

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thanh toán</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/footer.css" />
</head>
<style>
    .checkout-container {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.checkout-container h1 {
    font-size: 28px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
}

.checkout-summary {
    background-color: #f8f8f8;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.checkout-summary table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.checkout-summary th,
.checkout-summary td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.checkout-summary th {
    background-color: #f1f1f1;
    font-weight: bold;
}

.checkout-summary td {
    font-size: 16px;
}

.checkout-total {
    text-align: right;
    margin-top: 20px;
    font-size: 18px;
    font-weight: bold;
}

.checkout-total h3 {
    color: #333;
}

form {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

button {
    padding: 12px 25px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #218838;
}

form button:focus {
    outline: none;
}

@media (max-width: 768px) {
    .checkout-container {
        padding: 15px;
    }

    .checkout-summary table,
    .checkout-total {
        font-size: 14px;
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
    }
}

</style>
<body>
    <?php include_once('header.php'); ?>
    
    <div class="checkout-container">
        <h1>Thanh toán</h1>
        <div class="checkout-summary">
            <table>
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng cộng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo number_format($item['price'], 0, ',', '.'); ?> VNĐ</td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td><?php echo number_format($item['price'] * $item['quantity'], 0, ',', '.'); ?> VNĐ</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="checkout-total">
                <h3>Tổng cộng: <?php echo number_format($totalPrice, 0, ',', '.'); ?> VNĐ</h3>
            </div>
            <form action="process_checkout.php" method="POST">
            
                <button type="submit">Thanh toán</button>
            </form>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>
