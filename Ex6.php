<?php

//โปรแกรมคำนวณหาเกรดเฉลี่ย ประกอบด้วย รายวิชาเทอมนี้จำนวน 4 วิชา

 $credit1 = 4.0; //หน่วยกิต
$number1= 3.5; // เกรด

 $credit2 = 3.0; //หน่วยกิต
 $number2=3.0; // เกรด

 $number3=4.0; //หน่วยกิต
 $credit3 = 3.5; // เกรด

 
$credit4 = 3.5; //หน่วยกิต
$number4=3.5;  // เกรด
$total = $number1 * $credit1; 
$total2 = $number2 * $credit2;
$total3 = $number3 * $credit3; 
$total4 = $number4 * $credit4; 
$sum = $total + $total2 + $total3 + $total4; 

 
 $average = $sum /12;

 echo ("วิชาที่1เกรด " . $number1 . "หน่วยกิต" .$credit1  );
 echo (" <br>");
 echo ("วิชาที่2เกรด " . $number2 . "หน่วยกิต" .$credit2  );
 echo (" <br>");
 echo ("วิชาที่3เกรด " . $number3 . "หน่วยกิต" .$credit3  );
 echo (" <br>");
 echo ("วิชาที่4เกรด " . $number4 . "หน่วยกิต" .$credit4  );
 echo (" <br>");
 echo ("เกรดเฉลี่ย " . $average   );


?>


