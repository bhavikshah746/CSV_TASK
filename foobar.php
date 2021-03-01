<?php
//foobar task
$length = 100;

for($i=1;$i<=$length;$i++)
{
    if($i%3==0 && $i%5==0){
        echo "foobar, ";
    }else if($i%3==0){
        echo "foo, ";
    }else if($i%5==0){
        if($i==$length){
            echo "bar";
        }else{
            echo "bar, ";
        }
    }else{
        echo $i.", ";
    }
}
?>
