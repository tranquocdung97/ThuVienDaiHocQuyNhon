<?php
	function load_ten($ketNoi,$madn)
	{
		$lenh="select hodem, ten from information_user where madn ='$madn'";
		$ketqua=mysqli_query($ketNoi,$lenh) or die ("Không thực hiện được truy vấn");
		if($row=mysqli_fetch_array($ketqua))
		{
			$ht =$row['hodem'].' '.$row['ten'];
			return $ht;
		}
		return false; 
	}
?>