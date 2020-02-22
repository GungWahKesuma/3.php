<!-- https://www.youtube.com/watch?v=d_yvLLai4w4 -->
<!-- https://www.youtube.com/watch?v=DS1APTgwfgE -->

<?php
// bintang 5
function bintang($l){

if ($l%2) {
    echo "<hr>";
    echo "jumlah bintang : $l <br>";
    $m = $l/2+0.5;
    $n = $l-$m+1;
    for ($i=1; $i < $m; $i++) { 
        for ($j=$l-1; $j >= $i ; $j--) { 
            echo "&nbsp; "; 
        }
        for ($k=1; $k < $i*2 ; $k++) { 
            if ($k == 1 || $k == $i*2 - 1) {
                echo "*";
            } else {
                echo "&nbsp; ";            
            }
            }
        echo "<br> ";
    }
    for ($i=$n; $i > 0 ; $i--) { 
        for ($j=$l; $j > $i ; $j--) { 
            echo "&nbsp; ";
        }
        for ($k=1; $k < $i*2 ; $k++) { 
            if ($k == 1 || $k == $i*2 - 1) {
                echo "*";
            } else {
                echo "&nbsp; ";            
            }
        }
        echo "<br> ";
    }
}else{
    echo"<hr>";
    echo"jumlah bintang : $l <br>";
    $m = $l/2+1;
    $n = $l-$m+1;
        for ($i=1; $i < $m; $i++) { 
        for ($j=$l-1; $j >= $i ; $j--) { 
            echo "&nbsp; "; 
        }
        for ($k=1; $k < $i*2 ; $k++) { 
            if ($k == 1 || $k == $i*2) {
                echo "*";
            } else {
                echo "&nbsp; ";            
            }
            }
            for ($k=$i; $k*2 > 1 ; $k--) { 
            if ($k == 1 || $k == $i*2) {
                echo "*";
            } else {
                echo " ";            
            }
            }
        echo "<br> ";
    }
    for ($i=$n; $i > 0 ; $i--) { 
        for ($j=$l; $j > $i ; $j--) { 
            echo "&nbsp; ";
        }
        for ($k=1; $k < $i*2 ; $k++) { 
            if ($k == 1 || $k == $i*2) {
                echo "*";
            } else {
                echo "&nbsp; ";            
            }
        }
        for ($k=$i; $k*2 > 1 ; $k--) { 
            if ($k == 1 || $k == $i*2) {
                echo "*";
            } else {
                echo " ";            
            }
        }
        echo "<br> ";
    }

}

return $l;
}

echo "".bintang(6);

?>
