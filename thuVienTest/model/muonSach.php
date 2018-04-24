<?php
	function hienThi($ketNoi, $keyword)
	{

        if($keyword){
            $keyword = mb_strtolower($keyword,'UTF-8');
            $sql="select * from cart WHERE LOWER(madn) LIKE '%$keyword%'";
        }
        else
		$sql="select * from cart";
		$ketQua=mysqli_query($ketNoi,$sql);
		while($row=mysqli_fetch_array($ketQua))
		{
		    $lenh = "select * from information_user WHERE madn = '$row[madn]'";
		    $info =  mysqli_fetch_array(mysqli_query($ketNoi,$lenh));
		    if($row){
                $madn =$info['hodem']." ".$info['ten'];
                echo "<tr>";
                echo "<td>".$madn."</td>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['tensach']."</td>";
                echo "<td>".$row['ngayvaogio']."</td>";
                echo "<td><button class='btn btn-primary muon' role='button'>Cho mượn</button><div class='hidden'>$row[madn]=*=$row[id]</div></div></td>";
                echo "</tr>";
            }
		}
	}
?>