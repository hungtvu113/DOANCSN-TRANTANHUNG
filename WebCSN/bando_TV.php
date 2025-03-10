
<?php
session_start();

// Kiểm tra cookie nếu chưa có session
if(!isset($_SESSION['username']) && isset($_COOKIE['remember_token']) && isset($_COOKIE['username'])) {
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    
    $token = mysqli_real_escape_string($conn, $_COOKIE['remember_token']);
    $username = mysqli_real_escape_string($conn, $_COOKIE['username']);
    
    $query = "SELECT * FROM users WHERE username='$username' AND remember_token='$token'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <link rel="icon" href="Images/VNlogo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Con người Trà Vinh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<?php include 'nav.php'; ?>
    
    <div class="top-nav">
        <div class="logo">
            <a href="index.php"><img src="Images/logo.png" alt="Logo"></a>
        </div>

        <div class="nav-links">

            <div class="social-icons">
                <div class="facebook_icon">
                    <a href="https://www.facebook.com/profile.php?id=61556071283286&mibextid=ZbWKwL" class="fab fa-facebook"></a>
                </div>
               
            </div>
        </div>

    </div>

    <div class="search-bar">
        <div class="sliding-text-container">
            <div class="sliding-text">
                <h1>Bạn Có Biết: Lịch sử sự hình thành của tỉnh TRÀ VINH?</h1>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="sidebar">
            <h2 class="sidebar-title">Khám phá Trà Vinh</h2>
            <div class="menu-container">
                <a href="HP_2024.php" class="menu-item">
                    <i class="fas fa-heart"></i>
                    <span>HAPPY TRÀ VINH</span>
                </a>

                <a href="DL_2024.php" class="menu-item">
                    <i class="fas fa-umbrella-beach"></i>
                    <span>DU LỊCH</span>
                </a>
                <a href="DliTV.php" class="menu-item">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>ĐỊA LÝ</span>
                </a>
                <a href="VH_TV.php" class="menu-item">
                    <i class="fas fa-theater-masks"></i>
                    <span>VĂN HÓA</span>
                </a>
            </div>
        </div>
        <div class="table-of-contents" id="tableOfContents">
            <h3>Mục lục <span class="toggle-icon">▼</span></h3>
            <ul id="tocList">
                <li><a href="#tra-vinh">1. Bản đồ Tỉnh Trà Vinh</a></li>
                <li><a href="#duyen-hai">2. Bản đồ Thị xã Duyên Hải</a></li>
                <li><a href="#huyen-duyen-hai">3. Bản đồ Huyện Duyên Hải</a></li>
                <li><a href="#tra-cu">4. Bản đồ Huyện Trà Cú</a></li>
                <li><a href="#cau-ngang">5. Bản đồ Huyện Cầu Ngang</a></li>
                <li><a href="#chau-thanh">6. Bản đồ Huyện Châu Thành</a></li>
                <li><a href="#tieu-can">7. Bản đồ Huyện Tiểu Cần</a></li>
                <li><a href="#cau-ke">8. Bản đồ Huyện Cầu Kè</a></li>
                <li><a href="#cang-long">9. Bản đồ Huyện Càng Long</a></li>
                <li><a href="#tp-tra-vinh">10. Bản đồ Thành phố Trà Vinh</a></li>
            </ul>
        </div>
        <div class="main-content-inner">
        <p><i>(Nguồn toàn bộ: Báo Trà Vinh)</i></p>
            <h1 id="tra-vinh">Bản đồ Tỉnh Trà Vinh</h1>
            <p>Tỉnh Trà Vinh có 9 đơn vị hành chính cấp huyện. Trong đó bao gồm 1 thành phố, 1 thị xã và 7 huyện:
                thành phố Trà Vinh, thị xã Duyên Hải, huyện Càng Long, huyện Cầu Kè, huyện Cầu Ngang, huyện Châu
                Thành,
                huyện Duyên Hải, huyện Tiểu Cần, huyện Trà Cú.</p>
            <img src="Images/ban_do1.jpg" alt="Bản đồ Tỉnh Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Tỉnh Trà Vinh</i></p>
            <h1>Bản đồ giao thông Tỉnh Trà Vinh</h1>
            <img src="Images/c-54-1679461106-4408.jpg" alt="Bản đồ giao thông Tỉnh Trà Vinh" class="resize-image">
            <p><i>Bản đồ giao thông Tỉnh Trà Vinh</i></p>
            <hr>
            <h1 id="duyen-hai">Bản đồ Thị xã Duyên Hải, Trà Vinh</h1>
            <p>Thị xã Duyên Hải có 7 đơn vị hành chính cấp phường xã. Trong đó bao gồm 2 phường, 5 xã. Phường 1,
                Phường
                2, Xã Dân Thành, Xã Hiệp Thạnh, Xã Long Hữu, Xã Long Toàn, Xã Trường Long Hòa.</p>
            <img src="Images/c-680-1679458587-6565.jpg" alt="Bản đồ Thị xã Duyên Hải, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Thị xã Duyên Hải</i></p>
            <h1>Bản đồ giao thông Thị xã Duyên Hải</h1>
            <img src="Images/c-680-1679458587-1271.jpg" alt="Bản đồ giao thông Thị xã Duyên Hải" class="resize-image">
            <p><i>Bản đồ giao thông Thị xã Duyên Hải</i></p>
            <hr>
            <h1 id="huyen-duyen-hai">Bản đồ Huyện Duyên Hải, Trà Vinh</h1>
            <p>Huyện Duyên Hải có 7 đơn vị hành chính cấp phường xã. Trong đó bao gồm 1 thị trấn, 6 xã.

                Thị trấn Long Thành (huyện lỵ), Xã Đôn Châu, Xã Đôn Xuân, Xã Đông Hải, Xã Long Khánh, Xã Long Vĩnh,
                Xã
                Ngũ Lạc.</p>
            <img src="Images/c-679-1679456757-8329.jpg" alt="Bản đồ Huyện Duyên Hải, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Huyện Duyên Hải</i></p>
            <h1>Bản đồ giao thông Huyện Duyên Hải</h1>
            <img src="Images/c-679-1679456757-6439.jpg" alt="Bản đồ giao thông Huyện Duyên Hải" class="resize-image">
            <p><i>Bản đồ giao thông Huyện Duyên Hải</i></p>
            <hr>
            <h1 id="tra-cu">Bản đồ Huyện Trà Cú, Trà Vinh</h1>
            <p>
                Huyện Trà Cú có 17 đơn vị hành chính cấp phường xã. Trong đó bao gồm 2 thị trấn, 15 xã.

                Thị trấn Trà Cú (huyện lỵ), Thị trấn Định An, Xã An Quảng Hữu, Xã Đại An, Xã Định An, Xã Hàm Giang,
                Xã
                Hàm Tân, Xã Kim Sơn, Xã Long Hiệp, Xã Lưu Nghiệp Anh, Xã Ngãi Xuyên, Xã Ngọc Biên, Xã Phước Hưng, Xã
                Tân
                Hiệp, Xã Tân Sơn, Xã Tập Sơn, Xã Thanh Sơn.
            </p>
            <img src="Images/c-678-1679393848-1732.jpg" alt="Bản đồ Huyện Trà Cú, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Huyện Trà Cú</i></p>
            <h1>Bản đồ giao thông Huyện Trà Cú</h1>
            <img src="Images/c-678-1679393848-3009.jpg" alt="Bản đồ giao thông Huyện Trà Cú" class="resize-image">
            <p><i>Bản đồ giao thông Huyện Trà Cú</i></p>
            <hr>
            <h1 id="cau-ngang">Bản đồ Huyện Cầu Ngang, Trà Vinh</h1>
            <p>
                Huyện Cầu Ngang có 15 đơn vị hành chính cấp phường xã. Trong đó bao gồm 2 thị trấn, 13 xã.

                Thị trấn Cầu Ngang (huyện lỵ), Thị trấn Mỹ Long, Xã Hiệp Hòa, Xã Hiệp Mỹ Đông, Xã Hiệp Mỹ Tây, Xã
                Kim
                Hòa, Xã Long Sơn, Xã Mỹ Hòa, Xã Mỹ Long Bắc, Xã Mỹ Long Nam, Xã Nhị Trường, Xã Thạnh Hòa Sơn, Xã
                Thuận
                Hòa, Xã Trường Thọ, Xã Vĩnh Kim.
            </p>
            <img src="Images/c-677-1679392100-4424.jpg" alt="Bản đồ Huyện Cầu Ngang, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Huyện Cầu Ngang</i></p>
            <h1>Bản đồ giao thông Huyện Cầu Ngang</h1>
            <img src="Images/c-677-1679392100-5050.jpg" alt="Bản đồ giao thông Huyện Cầu Ngang" class="resize-image">
            <p><i>Bản đồ giao thông Huyện Cầu Ngang</i></p>
            <hr>
            <h1 id="chau-thanh">Bản đồ Huyện Châu Thành, Trà Vinh</h1>
            <p>
                Huyện Châu Thành có 14 đơn vị hành chính cấp phường xã. Trong đó bao gồm 1 thị trấn, 13 xã.

                Thị trấn Châu Thành (huyện lỵ), Xã Đa Lộc, Xã Hòa Lợi, Xã Hòa Minh, Xã Hòa Thuận, Xã Hưng Mỹ, Xã
                Long
                Hòa, Xã Lương Hòa, Xã Lương Hòa A, Xã Mỹ Chánh, Xã Nguyệt Hóa, Xã Phước Hảo, Xã Song Lộc, Xã Thanh
                Mỹ.
            </p>
            <img src="Images/c-676-1679390242-6421.jpg" alt="Bản đồ Huyện Châu Thành, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Huyện Châu Thành</i></p>
            <h1>Bản đồ giao thông Huyện Châu Thành</h1>
            <img src="Images/c-676-1679390242-2981.jpg" alt="Bản đồ giao thông Huyện Châu Thành" class="resize-image">
            <p><i>Bản đồ giao thông Huyện Châu Thành</i></p>
            <hr>
            <h1 id="tieu-can">Bản đồ Huyện Tiểu Cần, Trà Vinh</h1>
            <p>
                Huyện Tiểu Cần có 11 đơn vị hành chính cấp phường xã. Trong đó bao gồm 2 thị trấn, 9 xã.

                Thị trấn Tiểu Cần (huyện lỵ), Thị trấn Cầu Quan, Xã Hiếu Trung, Xã Hiếu Tử, Xã Hùng Hòa, Xã Long
                Thới,
                Xã Ngãi Hùng, Xã Phú Cần, Xã Tân Hòa, Xã Tân Hùng, Xã Tập Ngãi.
            </p>
            <img src="Images/c-675-1679388036-7456.jpg" alt="Bản đồ Huyện Tiểu Cần, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Huyện Tiểu Cần</i></p>
            <h1>Bản đồ giao thông Huyện Tiểu Cần</h1>
            <img src="Images/c-675-1679388036-2999.jpg" alt="Bản đồ giao thông Huyện Tiểu Cần" class="resize-image">
            <p><i>Bản đồ giao thông Huyện Tiểu Cần</i></p>
            <hr>
            <h1 id="cau-ke">Bản đồ Huyện Cầu Kè, Trà Vinh</h1>
            <p>
                Huyện Cầu Kè có 11 đơn vị hành chính cấp phường xã. Trong đó bao gồm 1 thị trấn, 10 xã.

                Thị trấn Cầu Kè (huyện lỵ), Xã An Phú Tân, Xã Châu Điền, Xã Hòa Ân, Xã Hòa Tân, Xã Ninh Thới, Xã
                Phong
                Phú, Xã Phong Thạnh, Xã Tam Ngãi, Xã Thạnh Phú, Xã Thông Hòa.
            </p>
            <img src="Images/c-674-1679374967-3832.jpg" alt="Bản đồ Huyện Cầu Kè, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Huyện Cầu Kè</i></p>
            <h1>Bản đồ giao thông Huyện Cầu Kè</h1>
            <img src="Images/c-674-1679374967-7730.jpg" alt="Bản đồ giao thông Huyện Cầu Kè" class="resize-image">
            <p><i>Bản đồ giao thông Huyện Cầu Kè</i></p>
            <hr>
            <h1 id="cang-long">Bản đồ Huyện Càng Long, Trà Vinh</h1>
            <p>
                Huyện Càng Long có 14 đơn vị hành chính cấp phường xã. Trong đó bao gồm 1 thị trấn, 13 xã.

                Thị trấn Càng Long (huyện lỵ), Xã An Trường, Xã An Trường A, Xã Bình Phú, Xã Đại Phúc, Xã Đại Phước,
                Xã
                Đức Mỹ, Xã Huyền Hội, Xã Mỹ Cẩm, Xã Nhị Long, Xã Nhị Long Phú, Xã Phương Thạnh, Xã Tân An, Xã Tân
                Bình.
            </p>
            <img src="Images/c-673-1679373134-8973.jpg" alt="Bản đồ Huyện Càng Long, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Huyện Càng Long</i></p>
            <h1>Bản đồ giao thông Huyện Càng Long</h1>
            <img src="Images/c-673-1679373135-1045.jpg" alt="Bản đồ giao thông Huyện Càng Long" class="resize-image">
            <p><i>Bản đồ giao thông Huyện Càng Long</i></p>
            <hr>
            <h1 id="tp-tra-vinh">Bản đồ Thành phố Trà Vinh, Trà Vinh</h1>
            <p>
                Thành phố Trà Vinh có 10 đơn vị hành chính cấp phường xã. Trong đó bao gồm 9 phường, 1 xã.

                Phường 1, Phường 2, Phường 3, Phường 4, Phường 5, Phường 6, Phường 7, Phường 8, Phường 9, Xã Long
                Đức.
            </p>
            <img src="Images/c-672-1679371431-8012.jpg" alt="Bản đồ Thành phố Trà Vinh, Trà Vinh" class="resize-image">
            <p><i>Bản đồ hành chính Thành phố Trà Vinh</i></p>
            <h1>Bản đồ giao thông Thành phố Trà Vinh</h1>
            <img src="Images/c-672-1679371431-8181.jpg" alt="Bản đồ giao thông Thành phố Trà Vinh" class="resize-image">
            <p><i>Bản đồ giao thông Thành phố Trà Vinh</i></p>
        </div>
    </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <h3>Về Con người Trà Vinh</h3>
                    <p>Chúng tôi là nguồn tài liệu đáng tin cậy về lịch sử Trà Vinh, cung cấp thông tin chính xác và
                        hấp
                        dẫn cho mọi độc giả.</p>
                </div>
                <div class="footer-section links">
                    <h3>Liên kết nhanh</h3>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="history_time.php">Dòng lịch sử</a></li>
                        <li><a href="tacpham_tv.php">Tư liệu</a></li>
                        <li><a href="bando_tv.php">Bản đồ</a></li>
                        <li><a href="ditich_tv.php">Di tích</a></li>
                        <li><a href="introduce.php">Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h3>Liên hệ</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 126 Nguyễn Thiện Thành, Khóm 4, Phường 5, TP. Trà Vinh
                    </p>
                    <p><i class="fas fa-phone"></i> 0375663427</p>
                    <p><i class="fas fa-envelope"></i> info@hungtvu113.github.io</p>
                </div>
            </div>
            
        </div>
    </footer>
    <script>
        function toggleMenu() {
            var menuContainer = document.querySelector('.menu-container');
            var hamburger = document.querySelector('.hamburger');
            menuContainer.classList.toggle('active');
            hamburger.classList.toggle('active');
        }

        // New JavaScript for table of contents
        document.addEventListener('DOMContentLoaded', function () {
            var toc = document.getElementById('tableOfContents');
            var tocList = document.getElementById('tocList');
            var tocToggle = toc.querySelector('h3');

            tocToggle.addEventListener('click', function () {
                tocList.style.display = tocList.style.display === 'none' ? 'block' : 'none';
                this.querySelector('.toggle-icon').textContent = tocList.style.display === 'none' ? '▼' : '▲';
            });

            window.addEventListener('scroll', function () {
                if (window.pageYOffset > toc.offsetTop) {
                    toc.classList.add('sticky');
                } else {
                    toc.classList.remove('sticky');
                }
            });
        });
    </script>
</body>

</html>