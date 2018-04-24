<?php
if(isset($_GET['search']))
    $keyword = $_GET['search'];
else $keyword = '';
require 'model/quanLySach.php';
echo "<div class=\"panel panel-default\" style='margin-left: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">Quản lý sách</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
echo "<table class=\"table table-hover\">";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Tên sách</td>";
echo "<td>Tác giả</td>";
echo "<td>Nhà xuất bản</td>";
echo "<td>Loại sách</td>";
echo "<td>Hình ảnh</td>";
echo "<td>Tag</td>";
echo "<td>Số lượng</td>";
echo "<td>Giá tiền</td>";
echo "<td>Lượt xem</td>";
echo "<td></td>";
echo "<td></td>";
echo "</tr>";
hienThi($ketNoi,$keyword);
echo "</table>";
echo "</div>";
echo "</div>";
?>
<script>
    $(document).ready(function () {
        $('.edit').click(function () {
            $(this).closest('tr').next().find('form').toggle();
        });
        $('.xoasach').click(function() {
            var id = $(this).closest('tr').find('#id').html();
            var nut = $(this).closest('tr');
            var conf = confirm("Bạn có muốn xóa không!");
            if(conf){
                $.post(
                    'ajax/xoasach.php', // URL
                    {
                        id: id
                    },  // Data
                    function(result){ // Success
                        alert(result);
                        if(result == "xóa thành công")
                            nut.remove();
                    },
                    'text' // dataTyppe
                );
            }

        });

    });
</script>

