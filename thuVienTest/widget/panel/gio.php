<?php
echo "<div class=\"panel panel-default\" style='margin-left: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">Giỏ sách</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
echo "<table class=\"table table-hover\">";
$kq = get_so_sach_trong_gio($ketNoi, $_SESSION['madn']);
while ($row = mysqli_fetch_array($kq)){
    $sach = load_sach($ketNoi,$row['id']);
    if($sach = mysqli_fetch_array($sach)){
        $lenh = "select tenloaisach from kind_of_book WHERE maloaisach= '$sach[maloaisach]'";
        $loaisach = mysqli_fetch_array(mysqli_query($ketNoi,$lenh))['tenloaisach'];
     echo "<tr>";
        echo "<td>$sach[tensach]</td>";
        echo "<td>$sach[tentacgia]<td>";
        echo "<td>$sach[nhaxuatban]</td>";
        echo "<td>$loaisach</td>";
        echo "<td><img src='images/$sach[image]' width='128px' height='180px'></td>";
        echo "<td>$row[ngayvaogio]</td>";
        $l = substr($sach['maloaisach'],0,2);
        echo "<td><button class=\"btn btn-default xoa\">Xóa</button><div class='hidden'>$row[id]=*=$sach[maloaisach]</div></td>";
        echo "</tr>";
    }
}
echo "</table>";
echo "</div>";
echo "</div>";
?>
<script>
    $(document).ready(function() {
        $('.xoa').click(function() {
            var data = $(this).next().html().split("=*=");
            var nut = $(this).parents('tr');
            $.post(
                'ajax/xoakhoigio.php', // URL
                {
                    id: data[0],
                    maloaisach: data[1]
                },  // Data
                function(result){ // Success
                    alert(result.thongbao);
                    $('#gtdachon').html(result.sachgiaotrinh + ' sách giáo trình');
                    $('#tkdachon').html(result.sachthamkhao + ' sách tham khảo');
                    $('#dmgt').html('Sách giáo trình: ' + result.gt);
                    $('#dmtk').html('Sách tham khảo: ' + result.tk);
                    if(result.thongbao == "xóa thành công")
                    nut.remove();
                },
                'json' // dataTyppe
            );
        });
    });
</script>
