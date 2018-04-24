<?php
if(isset($_POST['tenfile'])){
    $file="../media/".$_POST['tenfile'];
    if(is_file($file)){
        $fp = fopen($file, 'rb');
        header('Content-Type: application/octet-stream');
        header('Content-length: '.filesize($file));
        header('Content-Disposition: attachment; filename= '.$file);
        $fr = fpassthru($fp);
        $fc = fclose($fp);
    }	
}
else
	echo "Lỗi!";
?>