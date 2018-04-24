<?php
require_once 'model/getConnect.php';
require 'model/muonSach.php';
if(isset($_GET['search']))
    $keyword = $_GET['search'];
else $keyword = '';
echo "<div class=\"panel panel-default\" style='margin-left: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">Mượn sách</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
echo "<table class=\"table table-hover\">";
echo "<tr>";
echo "<td>Tài khoản</td>";
echo "<td>ID</td>";
echo "<td>Tên sách</td>";
echo "<td>Ngày vào giỏ</td>";
echo "</tr>";
hienThi($ketNoi, $keyword);
echo "</table>";
echo "</div>";
echo "</div>";
?>
<script>
    $(document).ready(function() {
        $('.muon').click(function() {
            var data = $(this).next().html().split("=*=");
            var nut = $(this).parents('tr');
            $.post(
                'ajax/chomuonsach.php', // URL
                {
                    madn: data[0],
                    id: data[1]
                },  // Data
                function(result){ // Success
                    alert(result);
                    if(result == 'Mượn thành công')
                        nut.remove();
                },
                'text' // dataTyppe
            );
        });
    });
</script>
