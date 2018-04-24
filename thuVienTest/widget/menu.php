<?php
require 'model/load_info_user.php';
require 'model/load_ms.php';
$soSachgt =0;
$soSachtk = 0;
$kq = get_so_sach_trong_gio($ketNoi,$_SESSION['madn']);
while($sosach = mysqli_fetch_array($kq)){
    if(substr($sosach['id'],0,2) == 'gt')
        $soSachgt++;
    else
        $soSachtk++;
}
?>
<nav class="navbar navbar-default" role="navigation" style="background-color: #96beff ">
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold">Sách Giáo trình</a>
                    <ul class="dropdown-menu" style="width: 600%">
                        <li><table  class="table">
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=gt1">Khoa Toán</a></td>
                                    <td><a href="categories.php?i=gt14">Khoa TC-NH & QTKD</a></td>
                                    <td><a href="categories.php?i=gt2">Khoa Vật Lý</a></td>
                                    <td><a href="categories.php?i=gt3">Khoa Hóa</a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=gt4">Khoa Lịch sử</a></td>
                                    <td><a href="categories.php?i=gt5">Khoa Sinh - KTNN</td>
                                    <td><a href="categories.php?i=gt6">Khoa Địa lý - Địa chính</a></td>
                                    <td><a href="categories.php?i=gt7">Khoa Công nghệ thông tin</a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=gt8">Khoa Ngữ Văn</a></td>
                                    <td><a href="categories.php?i=gt9">Khoa Ngoại Ngữ</a></td>
                                    <td><a href="categories.php?i=gt10">Khoa GD Tiểu học và Mầm non</a></td>
                                    <td><a href="categories.php?i=gt11">Khoa GD Chính trị và QL nhà nước</a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=gt12"><div>Khoa Giáo dục thể chất - Quốc phòng</div></a></td>
                                    <td><a href="categories.php?i=gt13"><div>Khoa Tâm lý - Giáo dục và CTXH</div></a></td>
                                    <td><a href="categories.php?i=gt15"><div>Khoa Kinh Tế & Kế Toán</div></a></td>
                                    <td><a href="categories.php?i=gt16"><div >Khoa Kỹ Thuật & Công Nghệ</div></a></td>
                                </tr>

                            </table></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold">Sách tham khảo</a>
                    <ul class="dropdown-menu" style="width: 600%">
                        <li><table  class="table" >
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=tk1"><b>Tiểu Thuyết</b></a></td>
                                    <td><a href="categories.php?i=tk2">Lịch Sử</a></td>
                                    <td><a href="categories.php?i=tk3">Tuổi Học Trò</a></td>
                                    <td><a href="categories.php?i=tk4">Phong tục Việt Nam</a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=tk5"><b>Kĩ năng sống</b></a></td>
                                    <td><a href="categories.php?i=tk6">Nghệ thuật sống</a></td>
                                    <td><a href="categories.php?i=tk7">Hồi Ký</a></td>
                                    <td><a href="categories.php?i=tk8">Kiếm Hiệp</a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=tk9"><b>Tùy bút</b></a></td>
                                    <td><a href="categories.php?i=tk10">Tập Truyện Ngắn</a></td>
                                    <td><a href="categories.php?i=tk11">Giáo Dục</a></td>
                                    <td><a href="categories.php?i=tk12">Thơ</a></td>
                                </tr>

                            </table></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold">Luận văn - luận án</a>
                    <ul class="dropdown-menu">
                        <li><table  class="table">
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=lv1"><b>Thạc sĩ</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=lv2"><b>Tiến sĩ</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=lv3"><b>Khóa luận</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=lv4"><b>Khác</b></a></td>
                                </tr>

                            </table></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold">Sách báo</a>
                    <ul class="dropdown-menu">
                        <li ><table  class="table">
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=sb1"><b>Tạp chí</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=sb2"><b>Báo thanh niên</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=sb3"><b>Báo tuổi trẻ</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=sb4"><b>Khác</b></a></td>
                                </tr>

                            </table></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold">CD - Ebook</a>
                    <ul class="dropdown-menu">
                        <li ><table  class="table">
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=ce1"><b>Video</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=ce2"><b>CD-English</b></a></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px"><a href="categories.php?i=ce3"><b>Ebook</b></a></td>
                                </tr>

                            </table></li>
                    </ul>
                </li>
            </ul>

            <form class="navbar-form navbar-left" role="search" action="search.php" method="get">
                <div class="form-group"> <input class="form-control" placeholder="Nhập tên sách" type="text" name="search">
                </div>
                <button type="submit" class="btn btn-default">Tìm kiếm</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold"><span class="glyphicon glyphicon-briefcase"></span> <span  class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li style="padding-left: 20px"><b>Đã chọn.</b></li>
                        <li style="padding-left: 20px" id="gtdachon"><?php echo $soSachgt ?> sách giáo trình.</li>
                        <li style="padding-left: 20px" id="tkdachon"><?php echo $soSachtk ?> sách tham khảo.</li>
                        <li class="divider"></li>
                        <li><div style="text-align: center"><a href="giosach.php"><button class="btn btn-default">Xem sách <span class="glyphicon glyphicon-info-sign"></span></button></a></div></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold"><span class="glyphicon glyphicon-user"></span><?php if($a = load_ten($ketNoi,$_SESSION['madn'])) echo $a; ?><span  class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li style="margin-bottom: 5px; padding-left: 20px">
                            <div><?php echo $_SESSION['madn']?></div>
                        <li class="divider"></li>
                        <div style="padding-left: 20px"><b>Đã mượn.</b></div>
                        <div style="padding-left: 20px" id = 'dmgt'>Sách giáo trình: <?php if($b = load_ms($ketNoi,$_SESSION['madn'])) echo $b['gt'];?></div>
                        <div style="padding-left: 20px" id = 'dmtk'>Sách tham khảo:  <?php if($c = load_ms($ketNoi,$_SESSION['madn'])) echo $c['tk'];?></div>
                        </li>
                        <li class="divider"></li>
                        <li ><div style="text-align: center">
                                <a href="matKhauUser.php"><button class="btn btn-default" style="margin-bottom: 2px">Đổi mật khẩu <i class="glyphicon glyphicon-edit"></i></button></a>
                                <a href="login.php"><button class="btn btn-default">Đăng xuất <span class="glyphicon glyphicon-log-out"></span></button></a>

                            </div></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script type="text/javascript">
    $(document).ready(function() {
        var lastScrollTop = 0;
        $(window).scroll(function() {
            var currentScrollTop = $(this).scrollTop();
            if (currentScrollTop > 100 && currentScrollTop < lastScrollTop) {
                $('nav.navbar').addClass('navbar-fixed-top');
                $('body').css('padding-top', ($('nav.navbar').height() + 21));
                // Với 20px là margin-bottom của navbar, 1px là border của navbar
            } else {
                $('nav.navbar').removeClass('navbar-fixed-top');
                $('body').css('padding-top', '0px');
            }

            lastScrollTop = currentScrollTop;
        });
    });
</script>
