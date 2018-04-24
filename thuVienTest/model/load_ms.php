<?php
	function load_ms($ketNoi,$madn)
	{
		$lenh="select * from information_user where madn ='$madn'";
		$ketqua=mysqli_query($ketNoi,$lenh) or die ("Không thực hiện được truy vấn");
		if($row=mysqli_fetch_array($ketqua))
		{
			$data = array();
			$data['gt'] = 5 - $row['cothemuonsachgiaotrinh'];
			$data['tk'] = 3 - $row['cothemuonsachthamkhao'];		
			return $data;
		}
		 return false;
	}
?>