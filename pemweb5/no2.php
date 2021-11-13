<?php 
    function urut(&$listNama){
        sort($listNama);
    }


    $listNama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    echo "Sebelum sort : <br>";
    $i = 0;
    foreach($listNama as $nama){
        if($i < count($listNama)-1){
            echo $nama." , ";
        }else{
            echo $nama;
        }
        $i++;
    }

    echo "<br><br>";
    echo "Sesudah sort : <br>";
    urut($listNama);

    $i = 0;
    foreach($listNama as $nama){
        if($i < count($listNama)-1){
            echo $nama." , ";
        }else{
            echo $nama;
        }
        $i++;
    }
?>