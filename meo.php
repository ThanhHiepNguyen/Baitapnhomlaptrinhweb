<?php
require "./cauhinh/ketnoi.php";

$sql = "";
$rowsPerPage = 12;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $rowsPerPage;
$tyle = "Mèo";


$start_gia = 0;
$end_gia = PHP_INT_MAX;


if (isset($_GET['start_gia']) && isset($_GET['end_gia'])) {
    $start_gia = (int) $_GET['start_gia'];
    $end_gia = (int) $_GET['end_gia'];
}

if (isset($_GET['giong'])) {
    $giongthucung = $_GET['giong'];
    $sql = "SELECT * FROM pets WHERE pet_type = '$tyle' AND breed = '$giongthucung' AND price BETWEEN $start_gia AND $end_gia LIMIT $offset, $rowsPerPage";
} else {
    $sql = "SELECT * FROM pets WHERE pet_type = '$tyle' AND price BETWEEN $start_gia AND $end_gia LIMIT $offset, $rowsPerPage";
}


$query = mysqli_query($conn, $sql);


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
    <link rel="stylesheet" href="./css/giongmeo.css" />
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
    <script>
        function updatePrice(currentValue) {
            const formattedValue = new Intl.NumberFormat('vi-VN').format(currentValue) + " VNĐ";
            document.getElementById("current-price").innerText = formattedValue;
        }
        function applyFilter() {
            const minPrice = document.getElementById("price-range").min;
            const maxPrice = document.getElementById("price-range").value;
            window.location.href = `?start_gia=${minPrice}&end_gia=${maxPrice}`;
        }
    </script>
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
                        <span id="min-price">500.000 vnđ</span>
                        <input id="price-range" max="20000000" min="500000" step="500000"
                            oninput="updatePrice(this.value)" type="range" />
                        <span id="current-price"><?php if (isset($_GET['end_gia'])) {
                            echo '' . $end_gia . '';
                        } else {
                            echo '10000000';
                        } ?> vnđ</span>
                    </div>
                    <div class="filter-button">
                        <button onclick="applyFilter()">LỌC</button>
                    </div>
                </div>
                <div class="categories-section">
                    <h3>Categories</h3>
                    <ul>
                        <li>
                            <a href="./Giongmeo.html">Giống Mèo </a>
                        </li>
                        <div class="monn">
                            <li>
                                <a href="meo.php?giong=Mèo Anh lông ngắn">Mèo Anh lông ngắn </a>
                            </li>
                            <li>
                                <a href="meo.php?giong=Mèo Anh lông dài">Mèo Anh lông dài </a>
                            </li>
                            <li>
                                <a href="meo.php?giong=Mèo Bengal">Mèo Bengal </a>
                            </li>
                            <li>
                                <a href="meo.php?giong=Mèo Munchkin">Mèo Munchkin</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="main1">
                <div class="pagination">
                    <div class="results">Hiển thị <?php echo $page; ?>/<?php echo $totalPage; ?> của
                        <?php echo $totalRows; ?> kết quả</div>
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
                            <a href="chitietthucung.php?pet_id=<?php echo $row['pet_id']; ?>"><img alt="" height="300px"
                            src="./quantri/anh/<?php echo $row['image_url']; ?>" width="300px" /></a>
                            <a href="meo.php?pet_id=<?php echo $row['pet_id']; ?>" class="add-to-cart">Thêm vào giỏ hàng</a>
                            <div class="product-info">
                                <h4><?php echo $row['pet_name']; ?></h4>
                                <br>
                                <p><?php echo $row['description']; ?></p>
                                <br>
                                <p><?php echo $row['price']; ?>VNĐ</p>
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
        <h1 class="title title1">Quyền lợi khi mua hàng tại Petshop</h1>
        <div class="ten">
            <div class="item">
                <img src="./images/image_trangchu/Midnight-Blue-Kids-Brand-Logo-1.gif" width="250" height="250"
                    alt="FREE VẬN CHUYỂN" />
                <p>Miễn phí vận chuyển toàn quốc</p>
            </div>
            <div class="item">
                <img src="./images/image_trangchu/Midnight-Blue-Kids-Brand-Logo-3.gif" width="250" height="250"
                    alt="QUÀ TẶNG HẤP DẪN" />
                <p>Bộ quà tặng trị giá 500k</p>
            </div>
            <div class="item">
                <img src="./images/image_trangchu/Midnight-Blue-Kids-Brand-Logo-4.gif" width="250" height="250"
                    alt="CAM KẾT CHẤT LƯỢNG" />
                <p>Hợp đồng mua bán - Cam kết rõ ràng</p>
            </div>
            <div class="item">
                <img src="./images/image_trangchu/Midnight-Blue-Kids-Brand-Logo-2.gif" width="250" height="250"
                    alt="BẢO HÀNH SỨC KHỎE THÚ CƯNG" />
                <p>Bảo hành sức khỏe - Hỗ trợ trọn đời</p>
            </div>
        </div>

    </main>



    <?php include_once('footer.php') ?>
    <script src=""></script>
</body>

</html>