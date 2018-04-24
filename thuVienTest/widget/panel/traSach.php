<?php
echo "<div class=\"panel panel-default\" style='margin-left: 5px;'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">Trả sách</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
echo "<table class=\"table table-hover\">";
require 'model/trasach.php';
echo "</table>";
echo "</div>";
echo "</div>";
?>
<script>
    $(document).ready(function() {

        $(".bt").click(function (){
            var formbt = $(this).parents('.divbt');
            var lido = formbt.find('.inputNguyenNhan').val();
            var tinhtrang = formbt.find('.inputTinhTrang').val();
            var sotien = parseInt(formbt.find('.inputSoTienbt').val());
            var ghichu = formbt.find('.inputGhiChu').val();
            var data = $(this).closest('tr').find('.madn').html().split('=*=');
            $.post(
                'ajax/boithuongsach.php', // URL
                {
                    lido: lido,
                    tinhtrang: tinhtrang,
                    tien: sotien,
                    ghichu: ghichu,
                    nguoibt: data[0],
                    id:data[1],
                    tensach: data[2]

                },  // Data
                function(result){ // Success
                    alert(result);
                },
                'text' // dataTyppe
            );
        });
        
        $('.tra').click(function () {
            var data = $(this).parent().find('.madn').html().split('=*=');
            var nut = $(this).closest('tr');
            $.post(
                'ajax/trasach.php', // URL
                {
                    madn: data[0],
                    id: data[1],
                    tensach: data[2],
                    loaisach: data[3],
                    ngaytre: data[4]
                },  // Data
                function(result){ // Success
                    alert(result);
                    if(result == "trả sách thành công")
                        nut.remove();

                },
                'text' // dataTyppe
            );
        });
    });
</script>
