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
                            <a href="./Giongmeo.html">Giống Mèo </a>
                        </li>
                        <div class="monn">
                            <li>
                                <a href="./anh_ln.html">Mèo Anh lông ngắn </a>
                            </li>
                            <li>
                                <a href="./anh_ld.html">Mèo Anh lông dài </a>
                            </li>
                            <li>
                                <a href="./bengal.html">Mèo Bengal </a>
                            </li>
                            <li>
                                <a href="./cmunchkin.html">Mèo Munchkin</a>
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
                    <div class="product-item">
                        <img alt="Mèo Bengal 1" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 1</h4>
                                <p>PD30838</p>
                                <p>6.800.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 2" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 2</h4>
                                <p>PD30837</p>
                                <p>6.500.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 3" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 3</h4>
                                <p>PD30830</p>
                                <p>6.900.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 4" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 4</h4>
                                <p>PD30830</p>
                                <p>6.900.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 5" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 5</h4>
                                <p>PD30830</p>
                                <p>6.900.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 6" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 6</h4>
                                <p>PD30830</p>
                                <p>6.900.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 7" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 7</h4>
                                <p>PD30830</p>
                                <p>6.900.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 8" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 8</h4>
                                <p>PD30830</p>
                                <p>6.900.000 đ</p>
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <img alt="Mèo Bengal 9" height="300" src="#" width="300" />
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                        <div class="product-info">
                            <a href="./ProductDetail.html">
                                <h4>Mèo Bengal 9</h4>
                                <p>PD30830</p>
                                <p>6.900.000 đ</p>
                            </a>
                        </div>
                    </div>
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