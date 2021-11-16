<?php

    $data=array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    $count=0;

    echo "Data sebelum diurutkan : <br>";
    foreach($data as $list){
        echo $list;
        echo "<br>";
    }

    function urut($data){
        $length=count($data);
        for($i=0;$i<$length;$i++){
            for($j=$i+1;$j<$length;$j++){
                if($data[$i]>$data[$j]){
                    $temp=$data[$i];
                    $data[$i]=$data[$j];
                    $data[$j]=$temp;
                }
            }
        }
        echo "<br>Data setelah diurutkan : <br>";
        foreach($data as $list){
            echo $list;
            echo "<br>";
        }
    }

    urut($data);

?>