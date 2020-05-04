<?php
require_once 'SimpleXLSX.php';

$xlsx = SimpleXLSX::parse( 'Speedometer_v4c.xlsm' );

  $n0= $xlsx->getCell(2,'N25');
  $n1= $xlsx->getCell(2,'N26');
  $n2= $xlsx->getCell(2,'N27');
  $n3= $xlsx->getCell(2,'N28');
  $o0= $xlsx->getCell(2,'O25');
  $o1= $xlsx->getCell(2,'O26'); 
  $o2= $xlsx->getCell(2,'O27'); 
  $o3= $xlsx->getCell(2,'O28'); 
  $p0= $xlsx->getCell(2,'P25');
  $p1= $xlsx->getCell(2,'P26'); 
  $p2= $xlsx->getCell(2,'P27'); 
  $p3= $xlsx->getCell(2,'P28');
  $q0= $xlsx->getCell(2,'Q25');
  $q1= $xlsx->getCell(2,'Q26');  
  $q2= $xlsx->getCell(2,'Q27');
  $q3= $xlsx->getCell(2,'Q28');
  $r0= $xlsx->getCell(2,'R25');
  $r1= $xlsx->getCell(2,'R26');
  $r2= $xlsx->getCell(2,'R27');
  $r3= $xlsx->getCell(2,'R28');
  $s0= $xlsx->getCell(2,'S25');
  $s1= $xlsx->getCell(2,'S26');
  $s2= $xlsx->getCell(2,'S27');
  $s3= $xlsx->getCell(2,'S28');
  $t0= $xlsx->getCell(2,'T25');
  $t1= $xlsx->getCell(2,'T26');
  $t2= $xlsx->getCell(2,'T27');
  $t3= $xlsx->getCell(2,'T28');
  $u0= $xlsx->getCell(2,'U25');
  $u1= $xlsx->getCell(2,'U26');
  $u2= $xlsx->getCell(2,'U27');
  $u3= $xlsx->getCell(2,'U28');



  $arr = array($n0 , $o0 , $p0 , $q0 , $r0 , $s0 , $t0 , $u0 ,$n1 , $o1 , $p1 , $q1 , $r1 , $s1 , $t1 , $u1 , $n2 , $o2 , $p2 , $q2 , $r2 , $s2 , $t2 , $u2 , $n3 , $o3 , $p3 , $q3 , $r3 , $s3 , $t3 , $u3 );
  echo json_encode($arr);
  ?>
