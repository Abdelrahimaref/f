<?php
require_once 'SimpleXLSX.php';

$xlsx = SimpleXLSX::parse( 'Speedometer_v4c.xlsm' );

  $r38= "frame";
  $r39= $xlsx->getCell(0,'R39');
  $r40= $xlsx->getCell(0,'R40');
  $r41= $xlsx->getCell(0,'R41');
  $r42= $xlsx->getCell(0,'R42');
  $r43= $xlsx->getCell(0,'R43'); 

  $s38 = $xlsx->getCell(0,'S38');
  $s39 = $xlsx->getCell(0,'S39'); 
  $s40 = $xlsx->getCell(0,'S40'); 
  $s41 = $xlsx->getCell(0,'S41'); 
  $s42 = $xlsx->getCell(0,'S42');
  $s43 = $xlsx->getCell(0,'S43');
  
  $t38 = $xlsx->getCell(0,'T38');
  $t39 = $xlsx->getCell(0,'T39'); 
  $t40 = $xlsx->getCell(0,'T40'); 
  $t41 = $xlsx->getCell(0,'T41'); 
  $t42 = $xlsx->getCell(0,'T42');
  $t43 = $xlsx->getCell(0,'T43'); 

  $u38 = $xlsx->getCell(0,'U38');
  $u39 = $xlsx->getCell(0,'U39'); 
  $u40 = $xlsx->getCell(0,'U40'); 
  $u41 = $xlsx->getCell(0,'U41'); 
  $u42 = $xlsx->getCell(0,'U42');
  $u43 = $xlsx->getCell(0,'U43');
  
  $v38 = $xlsx->getCell(0,'V38');
  $v39 = $xlsx->getCell(0,'V39'); 
  $v40 = $xlsx->getCell(0,'V40'); 
  $v41 = $xlsx->getCell(0,'V41'); 
  $v42 = $xlsx->getCell(0,'V42');
  $v43 = $xlsx->getCell(0,'V43'); 

  $w38 = $xlsx->getCell(0,'W38');
  $w39 = $xlsx->getCell(0,'W39'); 
  $w40 = $xlsx->getCell(0,'W40'); 
  $w41 = $xlsx->getCell(0,'W41'); 
  $w42 = $xlsx->getCell(0,'W42');
  $w43 = $xlsx->getCell(0,'W43'); 

  $x38 = $xlsx->getCell(0,'X38');
  $x39 = $xlsx->getCell(0,'X39'); 
  $x40 = $xlsx->getCell(0,'X40'); 
  $x41 = $xlsx->getCell(0,'X41'); 
  $x42 = $xlsx->getCell(0,'X42');
  $x43 = $xlsx->getCell(0,'X43');
  
  $y38 = $xlsx->getCell(0,'Y38');
  $y39 = $xlsx->getCell(0,'Y39'); 
  $y40 = $xlsx->getCell(0,'Y40'); 
  $y41 = $xlsx->getCell(0,'Y41'); 
  $y42 = $xlsx->getCell(0,'Y42');
  $y43 = $xlsx->getCell(0,'Y43'); 

  $z38 = $xlsx->getCell(0,'Z38');
  $z39 = $xlsx->getCell(0,'Z39'); 
  $z40 = $xlsx->getCell(0,'Z40'); 
  $z41 = $xlsx->getCell(0,'Z41'); 
  $z42 = $xlsx->getCell(0,'Z42');
  $z43 = $xlsx->getCell(0,'Z43'); 
 




  $arr = array(
                    $r38 , $s38 , $t38 , $u38 , $v38 , $w38 , $x38 , $y38 , $z38 ,
                    $r39 , $s39 , $t39 , $u39 , $v39 , $w39 , $x39 , $y39 , $z39 ,
                    $r40 , $s40 , $t40 , $u40 , $v40 , $w40 , $x40 , $y40 , $z40 ,
                    $r41 , $s41 , $t41 , $u41 , $v41 , $w41 , $x41 , $y41 , $z41 ,
                    $r42 , $s42 , $t42 , $u42 , $v42 , $w42 , $x42 , $y42 , $z42 ,
                    $r43 , $s43 , $t43 , $u43 , $v43 , $w43 , $x43 , $y43 , $z43 ,
   );
  echo json_encode($arr);
  ?>
