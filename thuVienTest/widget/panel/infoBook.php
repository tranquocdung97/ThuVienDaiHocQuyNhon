<?php
if(isset($_GET['id']))
    $id = $_GET['id'];
else
    $id = "gt_1_0001";
$lenh = "select * FROM information_book WHERE id = '$id'";
$q = mysqli_query($ketNoi, $lenh);
if($q){
    if($row = mysqli_fetch_array($q)){
        $lenh = "select tenloaisach from kind_of_book WHERE maloaisach= '$row[maloaisach]'";
        $loaisach = mysqli_fetch_array(mysqli_query($ketNoi,$lenh))['tenloaisach'];
        echo "<div class=\"panel panel-default\" style='margin-left: 5px; overflow: auto'>";
        echo "<div class=\"panel-heading\">";
        echo "<h3 class=\"panel-title\">Thông tin sách</h3>";
        echo "</div>";
        echo "<div class=\"panel-body\">";
        echo "<div class=\"pull-left\" style='width: 30%'><img src='images/$row[image]' alt=\"$row[image]\" class=\"img-thumbnail\" width='350px' height='490px'></div>";
        echo "<div class=\"pull-right\" style='width: 69%'>";
        echo "<h2 style='color: deepskyblue'>$row[tensach]</h2>";
        echo "<div><b>Tác giả:</b> $row[tentacgia]</div>";
        $l = explode('_',$row['maloaisach']);
        $l = $l[0].$l[1];
        echo "<div><b>Thể loại:</b> <a href='categories.php?i=".$l."'>$loaisach</a></div>";
		$str=explode("_",$row['maloaisach']);
		if($str[0]!='ce')
		{
			echo "<div><b>Có thể mượn:</b> $row[soluong]</div>";
			echo "<div><b>Lượt xem:</b> $row[luotxem]</div>";
		}
		else
			echo "<div><b>Lượt xem:</b> $row[luotxem]</div>";	
        $qq = get_access($ketNoi, $row['maloaisach']);
        $q = mysqli_fetch_array($qq)['quyentruycap'];
        $q = explode(',',$q);
        $u = get_info_user($ketNoi, $_SESSION['madn']);
        $qu = mysqli_fetch_array($u)['quyentruycap'];
        $sachTrongGio = mysqli_num_rows(load_sach_trong_gio($ketNoi,$_SESSION['madn'],$row['id']));
        $coTheMuon = get_so_sach($ketNoi,$_SESSION['madn'],$row['maloaisach']);
        if(substr($row['maloaisach'],0,2) == 'ce'){
            echo "<form action='ajax/taixuong.php' method='POST' style='display:inline'>";
            $type = explode('_',$row['maloaisach']);
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
        }
        else if( array_search($qu,$q) >= 0 && $sachTrongGio == 0 && $coTheMuon > 0){
            if($row['soluong']>0)
				echo "<div><button class=\"btn btn-default\" id='them'>Thêm</button>";
			else
				echo "<div><button class=\"btn btn-default\" >Hết hàng</button>";
            echo "<div class='hide data'>$row[id]=*=$row[tensach]=*=$row[maloaisach]</div>";
            echo "</div>";
        }
        echo "<br><hr>";
        echo "<div >$row[mota]</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        mysqli_query($ketNoi, "update information_book set luotxem = luotxem + 1 WHERE id = '$row[id]' ");
    }
}
	
?>
<script>
    $(document).ready(function() {
        $('#them').click(function() {
            var data = $(this).next().html().split('=*=');
            $.post(
                'ajax/themvaogio.php', // URL
                {id: data[0],
                    ten: data[1],
                    maloaisach: data[2],
                    ngayvaogio: data[3]
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

       
    });
</script>
