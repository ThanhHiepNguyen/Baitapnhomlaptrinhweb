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
    <link rel="stylesheet" href="./css/lienhe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Giới Thiệu PetShop</title>
</head>

<body style="height: 100000px">
    <!-- header -->
    <?php include_once('header.php') ?>
    <article
        style="
          background-image: url(https://petnow.com.vn/wp-content/uploads/2023/08/bg-featured-title.jpg);margin-bottom: 100px;">
        <div class="overlay-text">
            <h1><b>Dịch vụ Spa thú cưng</b></h1>
            <p><a href="#!">HOME</a> / DỊCH VỤ SPA THÚ CƯNG</p>
        </div>
    </article>
    <main>
        <div class="containers">
            <div class="container">
                <form action="#" class="main_contentS">
                    <div class="master_icon">
                        <div><i class="fa-solid fa-dog"></i></div>
                        <div>
                            <p>LIÊN HỆ</p>
                        </div>
                    </div>
                    <div class="content_main">
                        <h1>Để lại thông tin liên hệ với PetNow</h1>
                    </div>
                    <div class="input_comment">
                        <input class="input-in" type="text" placeholder="Your name">
                        <input class="input-in" type="text" placeholder="Email address">
                    </div>
                    <div class="input_ins">
                        <textarea class="input_in" style="max-width: 800px;" placeholder="Write a message"></textarea>
                    </div>
                    <div class="button_sends">
                        <input class="button_send" type="submit" value="Send a message">
                    </div>


            </div>
            </form>
        </div>

    </main>

    <!-- footer -->
    <?php include_once('footer.php') ?>
    <script src="./js/gioithieu.js"></script>
    <script>
        $(document).ready(function () {

            $(".content_title").hide();
            $(".content_title mot").show();
            $(".arow_master").click(function () {
                $(".content_title").not($(this).next()).slideUp(500);
                $(this).next().slideToggle(500);

                // Chuyển đổi trạng thái của mũi tên
                $(".arow_master").not(this).removeClass("expanded");
                $(this).toggleClass("expanded");
            });
        });

    </script>
</body>

</html>