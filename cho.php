<?php
require "./cauhinh/ketnoi.php";

$sql = "";
$rowsPerPage = 12;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $rowsPerPage;
$tyle = "Chó";

// Khởi tạo các giá trị mặc định
$start_gia = 0;
$end_gia = PHP_INT_MAX;

// Kiểm tra và lọc dữ liệu đầu vào
if (isset($_GET['start_gia']) && isset($_GET['end_gia'])) {
    $start_gia = (int) $_GET['start_gia'];
    $end_gia = (int) $_GET['end_gia'];
}
// Kiểm tra điều kiện "giong"
if (isset($_GET['giong'])) {
    $giongthucung = $_GET['giong'];
    $sql = "SELECT * FROM pets WHERE pet_type = '$tyle' AND breed = '$giongthucung' AND price BETWEEN $start_gia AND $end_gia LIMIT $offset, $rowsPerPage";
} else {
    $sql = "SELECT * FROM pets WHERE pet_type = '$tyle' AND price BETWEEN $start_gia AND $end_gia LIMIT $offset, $rowsPerPage";
}

// Thực thi câu lệnh
$query = mysqli_query($conn, $sql);

// Tính tổng số hàng để phân trang
$totalRowsQuery = "SELECT COUNT(*) as total FROM pets WHERE pet_type = '$tyle' AND price  BETWEEN $start_gia AND $end_gia";
if (isset($_GET['giong'])) {
    $totalRowsQuery = "SELECT COUNT(*) as total FROM pets WHERE pet_type = '$tyle' AND breed = '$giongthucung' AND price BETWEEN $start_gia AND $end_gia";
}
$totalRowsResult = mysqli_query($conn, $totalRowsQuery);
$totalRows = mysqli_fetch_assoc($totalRowsResult)['total'];
$totalPage = ceil($totalRows / $rowsPerPage);

?>



<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/reset.css" />
    <!-- enbed fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/giongcho.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Trang chủ</title>
    <style>
        #pagination {
            margin-top: 20px;
            text-align: center;
        }

        #pagination a,
        #pagination span {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #f2f2f2;
            color: #333;
            border-radius: 4px;
            margin: 0 4px;
        }

        #pagination a:hover {
            background-color: #ddd;
        }

        #pagination span {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>


<body>
    <!-- header -->
    <?php include_once('header.php') ?>
    <article style="
          background-image: url(https://petnow.com.vn/wp-content/uploads/2023/08/bg-featured-title.jpg);
        ">
        <div class="overlay-text">
            <h1><b>Dịch vụ Spa thú cưng</b></h1>
            <p><a href="#!">HOME</a> / DỊCH VỤ SPA THÚ CƯNG</p>
        </div>
    </article>
    <main>
        <div class="main">
            <div class="main_main1">
                <div class="main_main2">
                    <input placeholder="Search here" type="text" />
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="filter-section">
                    <h3>Price</h3>
                    <div class="price-range">
                        <span id="min-price"> 5.500.000 đ </span>
                        <input id="price-range" max="18500000" min="5500000" oninput="updatePrice()" type="range" />
                        <span id="max-price"> 18.500.000 đ </span>
                    </div>
                    <div class="filter-button">
                        <button>FILTER</button>
                    </div>
                </div>
                <div class="categories-section">
                    <h3>Categories</h3>
                    <ul>
                        <li>
                            <a href="#">Giống Chó </a>
                        </li>
                        <div class="monn">
                            <li>
                                <a href="cho.php?giong=">Chó Akita </a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Alaska </a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Becgie </a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Bichon</a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Bull Pháp</a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Chihuahua</a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Corgi</a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Doberman</a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Golden</a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Shiba</a>
                            </li>
                            <li>
                                <a href="cho.php?giong=">Chó Phốc Sóc</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="main1">
                <div class="pagination">
                    <div class="results">Hiển thị 1-36 của 73 kết quả</div>
                    <div class="sort">
                        <select>
                            <option>Mới nhất</option>
                            <option>Thứ tự theo mức độ phổ biến</option>
                            <option>Thứ tự theo điểm đánh giá</option>
                            <option>Thứ tự theo giá: thấp đến cao</option>
                            <option>Thứ tự theo giá: cao xuống thấp</option>
                        </select>
                    </div>
                </div>
                <div class="product-list">
                    <?php
                    while ($row = mysqli_fetch_assoc($query)) {

                        ?>
                        <div class="product-item">
                            <img alt="Chó Poodle tiny vàng mơ" height="300"
                                src="./quantri/anh/<?php echo $row['image_url']; ?>" width="300" />
                            <a class="add-to-cart">Thêm vào giỏ hàng</a>
                            <div class="product-info">
                                <h4><?php echo $row['pet_name'] ; ?></h4>
                                <p><?php echo $row['description'] ; ?></p>
                                <br>
                                <p><?php echo $row['price'] ; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="paginati">
                    <p id="pagination">
                        <?php
                        if ($page > 1) {
                            echo '<a href="' . $_SERVER['PHP_SELF'] . '?page_layout=danhsachthucung&page=' . ($page - 1) . '">Trước</a>';
                        }

                        for ($i = 1; $i <= $totalPage; $i++) {
                            if ($i == $page) {
                                echo " <span>" . $i . "</span> ";
                            } else {
                                echo ' <a href="' . $_SERVER['PHP_SELF'] . '?page_layout=danhsachthucung&page=' . $i . '">' . $i . '</a> ';
                            }
                        }

                        if ($page < $totalPage) {
                            echo '<a href="' . $_SERVER['PHP_SELF'] . '?page_layout=danhsachthucung&page=' . ($page + 1) . '">Sau</a>';
                        }
                        ?>
                    </p>
                </div>

                <h1 class="document_main">Dòng chó Poodle</h1>
                <div class="document_main1">
                    <p>
                        Chó Poodle là một trong những giống chó nổi tiếng và phổ biến trên
                        toàn thế giới. Poodle thuộc giống chó không rụng lông (đây là một
                        trong những ưu điểm nổi bật), chúng có bộ lông mềm mịn và bồng bềnh,
                        tạo nên vẻ đẹp và sự quyến rũ đặc trưng. Dưới đây là một số thông
                        tin cơ bản về giống chó Poodle:
                    </p>
                    <ol class="document_main1" style="list-style-type: decimal">
                        <li>
                            Xuất xứ: Chó Poodle xuất phát từ Đức và Pháp, nhưng chúng đã trở
                            thành một biểu tượng của nền văn hóa Pháp và thường được gọi là
                            “Chó Pháp.”
                        </li>
                        <li>
                            Kích thước: Poodle có ba kích thước chính - Tiêu chuẩn, Miniature
                            và Toy. Tiêu chuẩn thường nặng từ 45 đến 70 pounds (khoảng 20-32
                            kg) và có chiều cao từ 15 đến 22 inches (khoảng 38-56 cm), trong
                            khi Miniature và Toy nhỏ hơn.
                        </li>
                        <li>
                            Bộ lông: Lông của Poodle rất đặc trưng và đẹp. Chúng có bộ lông
                            xoắn, dày và mềm mịn. Lông của Poodle có thể có nhiều màu sắc khác
                            nhau, bao gồm trắng, đen, vàng, xám và nhiều biến thể khác.
                        </li>
                        <li>
                            Tính cách: Poodle được biết đến với tính cách thông minh, nhanh
                            nhạy, và dễ đào tạo. Chúng rất thân thiện, thích được yêu thương
                            và tham gia vào các hoạt động gia đình.
                        </li>
                        <li>
                            Sức khỏe: Một số vấn đề sức khỏe thường gặp ở Poodle bao gồm vấn
                            đề về mắt, da và bệnh về tim. Việc chăm sóc và kiểm tra sức khỏe
                            định kỳ là quan trọng để bảo vệ sức khỏe của chúng.
                        </li>
                    </ol>
                    <p>
                        Chó Poodle là một giống chó thông minh, đẹp và thân thiện, thích hợp
                        cho đại đa số gia đình tại Việt Nam.
                    </p>
                </div>
            </div>
            <div class="icons">
                <a href="#">
                    <img src="./images/image_trangchu/icon-zalo.svg" width="60" height="60" alt="Zalo icon" />
                </a>
                <a href="#">
                    <img src="./images/image_trangchu/icon-messenger.svg" height="60" width="60" alt="Messenger icon" />
                </a>
                <a class="mon" href="#">
                    <i class="fas fa-chevron-up"> </i>
                </a>
            </div>
        </div>

    </main>



    <?php include_once('footer.php') ?>
</body>

</html>