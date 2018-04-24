<?php
    function load_thumbnail($img, $ten, $id ,$maloaisach, $state){
        echo "<div class='thumbnail'>";
        echo "      <img src='images/$img' style='width: 128px; height: 180px' alt='...'>";
        echo " <div class='caption'>";
        echo "<h5><b>$ten</b></h5>";
        echo "<a href=\"sach.php?id=$id\" class=\"btn btn-default\" role=\"button\" style='margin-right: 5px'>Xem</a>";
        if($state) {
            echo "<button class='btn btn-primary them' role='button'>Thêm</button>";
            echo "<div class='hide data'>$id=*=$ten=*=$maloaisach</div>";
        }
        echo "  </div>";
        echo "</div>";
    }

    function load_thumbnail_ebook($img, $ten,$id,$maloaisach){
        echo "<div class='thumbnail' >";
        echo "      <img src='images/$img' style='width: 128px; height: 180px' alt='...'>";
        echo " <div class='caption'>";
        echo "<h5 style='width: 180px'><b>$ten</b></h5>";
        echo "<a href=\"sach.php?id=$id\" class=\"btn btn-default\" role=\"button\" style='margin-right: 5px'>Xem</a>";

            echo "<form action='ajax/taixuong.php' method='POST' style='display:inline'>";
            $type = explode('_',$maloaisach);
            if($type[1] == '1')
                $t = '.MP4';
            else if($type[1] == '2')
                $t = '.MP3';
            else if($type[1] == '3')
                $t = '.pdf';
            else
                $t = '';
            echo "<input type='text' readonly='true' name='tenfile' value='$id"."$t' class='hide data'>";
			echo "<button type='submit' class='btn btn-primary name='tai' role='button'>Tải xuống</button></form>";

        echo "  </div>";
        echo "</div>";
    }
    echo "<script>
$(document).ready(function() {
  $('.them').click(function() {
        var data = $(this).next().html().split('=*=');
                $.post(
                        'ajax/themvaogio.php', // URL
                        {id: data[0],
                        ten: data[1],
                        maloaisach: data[2],
                        },  // Data
                        function(result){ // Success
                            alert(result.thongbao);
                            $('#gtdachon').html(result.sachgiaotrinh + ' sách giáo trình');
                            $('#tkdachon').html(result.sachthamkhao + ' sách tham khảo');
                            $('#dmgt').html('Sách giáo trình: ' + result.gt);
                            $('#dmtk').html('Sách tham khảo: ' + result.tk);
                        },
                        'json' // dataTyppe
                );
    });
  /*$('.tai').click(function() {
    var data = $(this).next().html();
	//alert(data);
                $.post(
                        'ajax/taixuong.php', // URL
                        {
                            file: data
                        },  // Data
                        function(result){ // Success
						alert(result);
                        },
                        'text' // dataTyppe
                );
  });*/
});
    
</script>";
?>



