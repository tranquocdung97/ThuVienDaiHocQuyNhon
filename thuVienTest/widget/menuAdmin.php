<?php
    require 'model/load_info_user.php';
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin.php"><span class="glyphicon glyphicon-home"></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="1"><a href="admin.php?act=qlsach" >Quản lý sách</a></li>
                <li id="2"><a href="admin.php?act=muonsach">Mượn sách</a></li>
                <li id="3"><a href="admin.php?act=trasach">Trả sách</a></li>
                <li id="4"><a href="admin.php?act=nhapsach">Nhập sách</a></li>
                <li></li>
                <?php
                if($act == 'qlsach' || $act == 'muonsach' || $act == 'trasach'){
                    if($act == 'qlsach')
                        $placehoder = 'Nhập tên sách';//
                    else
                        $placehoder = 'Nhập mã số';//
                    echo "<div class=\"navbar-form navbar-left\" role=\"search\">
                    <div class=\"form-group\"> <input class=\"form-control\" id=\"inptk\" placeholder='$placehoder' type=\"text\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\" id=\"tk\">Tìm kiếm</button>
                </div>";
                }

                ?>

            </ul>
            <script>
                $('#tk').click(function () {
                    var key = $('#inptk').val();
                    key = key.replace(' ','+');
                    window.location.href="admin.php?act=<?php echo $_GET['act']; ?>&search="+key;
                });
            </script>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold"><span class="glyphicon glyphicon-user"></span><?php if($a = load_ten($ketNoi,$_SESSION['maadmin'])) echo $a; ?><span  class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li style="margin-bottom: 5px; padding-left: 20px">
                            <div><?php echo $_SESSION['maadmin']?></div>
                        </li>
                        <li class="divider"></li>
                        <li ><div style="text-align: center">
                                <a href="thongke.php"><button class="btn btn-primary" id="thongke" style="margin-bottom: 2px">Xuất thống kê <i class="glyphicon glyphicon-share"></i></button></a>
                                <a href="matKhauAdmin.php"><button class="btn btn-default" style="margin-bottom: 2px">Đổi mật khẩu <i class="glyphicon glyphicon-edit"></i></button></a>
                                <a href="login_admin.php"><button class="btn btn-default">Đăng xuất <span class="glyphicon glyphicon-log-out"></span></button></a>

                            </div></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="na"></div>
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