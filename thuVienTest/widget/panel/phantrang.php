<?php
function load_phan_trang($sotrang, $link,$current){
    $i = 0;
        echo "<ul class=\"pagination\">";
        $i = 0;
        while($i < $sotrang){
            $j = $i+1;
            if($i == $current)
            echo "<li class='active'><a href='".$link.$i."'>$j</a></li>";
            else
                echo "<li><a href='".$link.$i."'>$j</a></li>";
            $i++;
        }
        echo"</ul>";
}
?>