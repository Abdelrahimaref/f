<?php
require_once 'SimpleXLSX.php';

$xlsx = SimpleXLSX::parse( 'Speedometer_v4c.xlsm' );


  $ld = $xlsx->getCell(2,'D18');
  $le = $xlsx->getCell(2,'E18');
  $lf = $xlsx->getCell(2,'F18');
  $lg = $xlsx->getCell(2,'G18');
  $lh = $xlsx->getCell(2,'H18');
  $li = $xlsx->getCell(2,'I18');
  $lj = $xlsx->getCell(2,'J18');
  $lk = $xlsx->getCell(2,'K18');
  $d= $xlsx->getCell(2,'D19');
  $e= $xlsx->getCell(2,'E19');
  $f= $xlsx->getCell(2,'F19');
  $g= $xlsx->getCell(2,'G19');
  $h= $xlsx->getCell(2,'H19');
  $i= $xlsx->getCell(2,'I19');
  $j= $xlsx->getCell(2,'J19');
  $k= $xlsx->getCell(2,'K19');
  $arr = array($ld=>$d,$le=>$e,$lf=>$f,$lg=>$g,$lh=>$h,$li=>$i,$lj=>$j,$lk=>$k);
  $values = asort($arr);
  echo json_encode($arr);


    ?>
