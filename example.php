<?php
/* Func arsort เรัยงจากค่ามากไปหาน้อย */
$scores = array("OverCatX" => 90,
                "RictorX" => 80,
                "TheBesses" => 70);
arsort($scores);
foreach($scores as $key => $values){
   echo "Name: ".$key." Score: ".$values."\n";
  /*
    Output: 
      Name: OverCatX Score: 90
      Name: RictorX Score: 80
      Name: TheBesses Score: 70
  */
}

/* Func asort เรียงจากค่าน้อยไปหามาก */
$scores = array("OverCatX" => 90,
                "RictorX" => 80,
                "TheBesses" => 70);
asort($scores);
foreach($scores as $key => $values){
   echo "Name: ".$key." Score: ".$values."\n";
  /*
    Output: 
      Name: TheBesses Score: 70
      Name: RictorX Score: 80
      Name: OverCatX Score: 90
  */
}

/* Example ทำ TopScore เรียงจากคะแนนที่มากสุดไปหาน้อยสุด*/
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
  /*
    Output: 
      อันดับที่ 0 OverCatX Score: 90
      อันดับที่ 1 RictorX Score: 80
      อันดับที่ 2 TheBesses Score: 70
  */
}
?>
