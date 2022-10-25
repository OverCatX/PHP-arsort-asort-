<?php
/* Func arsort เรัยงจากค่ามากไปหาน้อย */
$scores = array("OverCatX" => 90,
                "RictorX" => 80,
                "TheBesses" => 70);
arsort($scores);
foreach($scores as $key => $values){
   echo "Name: ".$key." Score: ".$values."\n";
}

/* Func asort เรียงจากค่าน้อยไปหามาก */
$scores = array("OverCatX" => 90,
                "RictorX" => 80,
                "TheBesses" => 70);
asort($scores);
foreach($scores as $key => $values){
   echo "Name: ".$key." Score: ".$values."\n";
}

/* Exanple ทำ TopScore เรียงจากคะแนนที่มากสุดไปหาน้อยสุด*/
$scores = array("OverCatX" => 90,
                "RictorX" => 80,
                "TheBesses" => 70);
arsort($scores);
$i=0;
foreach($scores as $key => $values){
   echo "อันดับที่ ".$i." ".$key." Score: ".$values."\n";
   if($i > count($scores)){
   	break;
   }
   ++$i;
}
?>
