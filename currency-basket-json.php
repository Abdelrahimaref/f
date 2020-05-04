<?php
require_once 'SimpleXLSX.php';

$xlsx = SimpleXLSX::parse( 'Speedometer_v4c.xlsm' );

 /****** First Square ******/
  $b8= $xlsx->getCell(5,'B8');
  $c8= $xlsx->getCell(5,'C8');
  $d8= $xlsx->getCell(5,'D8');
  $e8= $xlsx->getCell(5,'E8');

  $b9= $xlsx->getCell(5,'B9');
  $c9= $xlsx->getCell(5,'C9');
  $d9= $xlsx->getCell(5,'D9');
  $e9= $xlsx->getCell(5,'E9');

  $b10= $xlsx->getCell(5,'B10');
  $c10= $xlsx->getCell(5,'C10');
  $d10= $xlsx->getCell(5,'D10');
  $e10= $xlsx->getCell(5,'E10');

  $b11= $xlsx->getCell(5,'B11');
  $c11= $xlsx->getCell(5,'C11');
  $d11= $xlsx->getCell(5,'D11');
  $e11= $xlsx->getCell(5,'E11');

  $b12= $xlsx->getCell(5,'B12');
  $c12= $xlsx->getCell(5,'C12');
  $d12= $xlsx->getCell(5,'D12');
  $e12= $xlsx->getCell(5,'E12');

  $b13= $xlsx->getCell(5,'B13');
  $c13= $xlsx->getCell(5,'C13');
  $d13= $xlsx->getCell(5,'D13');
  $e13= $xlsx->getCell(5,'E13');

  $b14= $xlsx->getCell(5,'B14');
  $c14= $xlsx->getCell(5,'C14');
  $d14= $xlsx->getCell(5,'D14');
  $e14= $xlsx->getCell(5,'E14');


/********* Second Square *********/
   $h8= $xlsx->getCell(5,'H8');
   $i8= $xlsx->getCell(5,'I8');
   $j8= $xlsx->getCell(5,'J8');
   $k8= $xlsx->getCell(5,'K8');
 
   $h9= $xlsx->getCell(5,'H9');
   $i9= $xlsx->getCell(5,'I9');
   $j9= $xlsx->getCell(5,'J9');
   $k9= $xlsx->getCell(5,'K9');
 
   $h10= $xlsx->getCell(5,'H10');
   $i10= $xlsx->getCell(5,'I10');
   $j10= $xlsx->getCell(5,'J10');
   $k10= $xlsx->getCell(5,'K10');
 
   $h11= $xlsx->getCell(5,'H11');
   $i11= $xlsx->getCell(5,'I11');
   $j11= $xlsx->getCell(5,'J11');
   $k11= $xlsx->getCell(5,'K11');
 
   $h12= $xlsx->getCell(5,'H12');
   $i12= $xlsx->getCell(5,'I12');
   $j12= $xlsx->getCell(5,'J12');
   $k12= $xlsx->getCell(5,'K12');
 
   $h13= $xlsx->getCell(5,'H13');
   $i13= $xlsx->getCell(5,'I13');
   $j13= $xlsx->getCell(5,'J13');
   $k13= $xlsx->getCell(5,'K13');
 
   $h14= $xlsx->getCell(5,'H14');
   $i14= $xlsx->getCell(5,'I14');
   $j14= $xlsx->getCell(5,'J14');
   $k14= $xlsx->getCell(5,'K14');
  


  /****** Third Square ******/
  $n8= $xlsx->getCell(5,'N8');
  $o8= $xlsx->getCell(5,'O8');
  $p8= $xlsx->getCell(5,'P8');
  $q8= $xlsx->getCell(5,'Q8');

  $n9= $xlsx->getCell(5,'N9');
  $o9= $xlsx->getCell(5,'O9');
  $p9= $xlsx->getCell(5,'P9');
  $q9= $xlsx->getCell(5,'Q9');

  $n10= $xlsx->getCell(5,'N10');
  $o10= $xlsx->getCell(5,'O10');
  $p10= $xlsx->getCell(5,'P10');
  $q10= $xlsx->getCell(5,'Q10');

  $n11= $xlsx->getCell(5,'N11');
  $o11= $xlsx->getCell(5,'O11');
  $p11= $xlsx->getCell(5,'P11');
  $q11= $xlsx->getCell(5,'Q11');

  $n12= $xlsx->getCell(5,'N12');
  $o12= $xlsx->getCell(5,'O12');
  $p12= $xlsx->getCell(5,'P12');
  $q12= $xlsx->getCell(5,'Q12');

  $n13= $xlsx->getCell(5,'N13');
  $o13= $xlsx->getCell(5,'O13');
  $p13= $xlsx->getCell(5,'P13');
  $q13= $xlsx->getCell(5,'Q13');

  $n14= $xlsx->getCell(5,'N14');
  $o14= $xlsx->getCell(5,'O14');
  $p14= $xlsx->getCell(5,'P14');
  $q14= $xlsx->getCell(5,'Q14');



   /****** Fourth Square ******/
   $t8= $xlsx->getCell(5,'T8');
   $u8= $xlsx->getCell(5,'U8');
   $v8= $xlsx->getCell(5,'V8');
   $w8= $xlsx->getCell(5,'W8');
 
   $t9= $xlsx->getCell(5,'T9');
   $u9= $xlsx->getCell(5,'U9');
   $v9= $xlsx->getCell(5,'V9');
   $w9= $xlsx->getCell(5,'W9');
 
   $t10= $xlsx->getCell(5,'T10');
   $u10= $xlsx->getCell(5,'U10');
   $v10= $xlsx->getCell(5,'V10');
   $w10= $xlsx->getCell(5,'W10');
 
   $t11= $xlsx->getCell(5,'T11');
   $u11= $xlsx->getCell(5,'U11');
   $v11= $xlsx->getCell(5,'V11');
   $w11= $xlsx->getCell(5,'W11');
 
   $t12= $xlsx->getCell(5,'T12');
   $u12= $xlsx->getCell(5,'U12');
   $v12= $xlsx->getCell(5,'V12');
   $w12= $xlsx->getCell(5,'W12');
 
   $t13= $xlsx->getCell(5,'T13');
   $u13= $xlsx->getCell(5,'U13');
   $v13= $xlsx->getCell(5,'V13');
   $w13= $xlsx->getCell(5,'W13');
 
   $t14= $xlsx->getCell(5,'T14');
   $u14= $xlsx->getCell(5,'U14');
   $v14= $xlsx->getCell(5,'V14');
   $w14= $xlsx->getCell(5,'W14');


    /****** Fifth Square ******/
  $b24= $xlsx->getCell(5,'B24');
  $c24= $xlsx->getCell(5,'C24');
  $d24= $xlsx->getCell(5,'D24');
  $e24= $xlsx->getCell(5,'E24');

  $b25= $xlsx->getCell(5,'B25');
  $c25= $xlsx->getCell(5,'C25');
  $d25= $xlsx->getCell(5,'D25');
  $e25= $xlsx->getCell(5,'E25');

  $b26= $xlsx->getCell(5,'B26');
  $c26= $xlsx->getCell(5,'C26');
  $d26= $xlsx->getCell(5,'D26');
  $e26= $xlsx->getCell(5,'E26');

  $b27= $xlsx->getCell(5,'B27');
  $c27= $xlsx->getCell(5,'C27');
  $d27= $xlsx->getCell(5,'D27');
  $e27= $xlsx->getCell(5,'E27');

  $b28= $xlsx->getCell(5,'B28');
  $c28= $xlsx->getCell(5,'C28');
  $d28= $xlsx->getCell(5,'D28');
  $e28= $xlsx->getCell(5,'E28');

  $b29= $xlsx->getCell(5,'B29');
  $c29= $xlsx->getCell(5,'C29');
  $d29= $xlsx->getCell(5,'D29');
  $e29= $xlsx->getCell(5,'E29');

  $b30= $xlsx->getCell(5,'B30');
  $c30= $xlsx->getCell(5,'C30');
  $d30= $xlsx->getCell(5,'D30');
  $e30= $xlsx->getCell(5,'E30');



   /****** Six Square ******/
   $h24= $xlsx->getCell(5,'H24');
   $i24= $xlsx->getCell(5,'I24');
   $j24= $xlsx->getCell(5,'J24');
   $k24= $xlsx->getCell(5,'K24');
 
   $h25= $xlsx->getCell(5,'H25');
   $i25= $xlsx->getCell(5,'I25');
   $j25= $xlsx->getCell(5,'J25');
   $k25= $xlsx->getCell(5,'K25');
 
   $h26= $xlsx->getCell(5,'H26');
   $i26= $xlsx->getCell(5,'I26');
   $j26= $xlsx->getCell(5,'J26');
   $k26= $xlsx->getCell(5,'K26');
 
   $h27= $xlsx->getCell(5,'H27');
   $i27= $xlsx->getCell(5,'I27');
   $j27= $xlsx->getCell(5,'J27');
   $k27= $xlsx->getCell(5,'K27');
 
   $h28= $xlsx->getCell(5,'H28');
   $i28= $xlsx->getCell(5,'I28');
   $j28= $xlsx->getCell(5,'J28');
   $k28= $xlsx->getCell(5,'K28');
 
   $h29= $xlsx->getCell(5,'H29');
   $i29= $xlsx->getCell(5,'I29');
   $j29= $xlsx->getCell(5,'J29');
   $k29= $xlsx->getCell(5,'K29');
 
   $h30= $xlsx->getCell(5,'H30');
   $i30= $xlsx->getCell(5,'I30');
   $j30= $xlsx->getCell(5,'J30');
   $k30= $xlsx->getCell(5,'K30');


    /****** Seventh Square ******/
  $n24= $xlsx->getCell(5,'N24');
  $o24= $xlsx->getCell(5,'O24');
  $p24= $xlsx->getCell(5,'P24');
  $q24= $xlsx->getCell(5,'Q24');

  $n25= $xlsx->getCell(5,'N25');
  $o25= $xlsx->getCell(5,'O25');
  $p25= $xlsx->getCell(5,'P25');
  $q25= $xlsx->getCell(5,'Q25');

  $n26= $xlsx->getCell(5,'N26');
  $o26= $xlsx->getCell(5,'O26');
  $p26= $xlsx->getCell(5,'P26');
  $q26= $xlsx->getCell(5,'Q26');

  $n27= $xlsx->getCell(5,'N27');
  $o27= $xlsx->getCell(5,'O27');
  $p27= $xlsx->getCell(5,'P27');
  $q27= $xlsx->getCell(5,'Q27');

  $n28= $xlsx->getCell(5,'N28');
  $o28= $xlsx->getCell(5,'O28');
  $p28= $xlsx->getCell(5,'P28');
  $q28= $xlsx->getCell(5,'Q28');

  $n29= $xlsx->getCell(5,'N29');
  $o29= $xlsx->getCell(5,'O29');
  $p29= $xlsx->getCell(5,'P29');
  $q29= $xlsx->getCell(5,'Q29');

  $n30= $xlsx->getCell(5,'N30');
  $o30= $xlsx->getCell(5,'O30');
  $p30= $xlsx->getCell(5,'P30');
  $q30= $xlsx->getCell(5,'Q30');



   /****** Eigth Square ******/
   $t24= $xlsx->getCell(5,'T24');
   $u24= $xlsx->getCell(5,'U24');
   $v24= $xlsx->getCell(5,'V24');
   $w24= $xlsx->getCell(5,'W24');
 
   $t25= $xlsx->getCell(5,'T25');
   $u25= $xlsx->getCell(5,'U25');
   $v25= $xlsx->getCell(5,'V25');
   $w25= $xlsx->getCell(5,'W25');
 
   $t26= $xlsx->getCell(5,'T26');
   $u26= $xlsx->getCell(5,'U26');
   $v26= $xlsx->getCell(5,'V26');
   $w26= $xlsx->getCell(5,'W26');
 
   $t27= $xlsx->getCell(5,'T27');
   $u27= $xlsx->getCell(5,'U27');
   $v27= $xlsx->getCell(5,'V27');
   $w27= $xlsx->getCell(5,'W27');
 
   $t28= $xlsx->getCell(5,'T28');
   $u28= $xlsx->getCell(5,'U28');
   $v28= $xlsx->getCell(5,'V28');
   $w28= $xlsx->getCell(5,'W28');
 
   $t29= $xlsx->getCell(5,'T29');
   $u29= $xlsx->getCell(5,'U29');
   $v29= $xlsx->getCell(5,'V29');
   $w29= $xlsx->getCell(5,'W29');
 
   $t30= $xlsx->getCell(5,'T30');
   $u30= $xlsx->getCell(5,'U30');
   $v30= $xlsx->getCell(5,'V30');
   $w30= $xlsx->getCell(5,'W30');



  $arr = array(
                    $b8  , $c8  , $d8  , $e8  ,
                    $b9  , $c9  , $d9  , $e9  ,
                    $b10 , $c10 , $d10 , $e10 ,
                    $b11 , $c11 , $d11 , $e11 ,
                    $b12 , $c12 , $d12 , $e12 ,
                    $b13 , $c13 , $d13 , $e13 ,
                    $b14 , $c14 , $d14 , $e14 ,

                    
                    $h8  , $i8  , $j8  , $k8  ,
                    $h9  , $i9  , $j9  , $k9  ,
                    $h10 , $i10 , $j10 , $k10 ,
                    $h11 , $i11 , $j11 , $k11 ,
                    $h12 , $i12 , $j12 , $k12 ,
                    $h13 , $i13 , $j13 , $k13 ,
                    $h14 , $i14 , $j14 , $k14 ,

                    $n8  , $o8  , $p8  , $q8  ,
                    $n9  , $o9  , $p9  , $q9  ,
                    $n10 , $o10 , $p10 , $q10 ,
                    $n11 , $o11 , $p11 , $q11 ,
                    $n12 , $o12 , $p12 , $q12 ,
                    $n13 , $o13 , $p13 , $q13 ,
                    $n14 , $o14 , $p14 , $q14 ,

                    $t8  , $u8  , $v8  , $w8  ,
                    $t9  , $u9  , $v9  , $w9  ,
                    $t10 , $u10 , $v10 , $w10 ,
                    $t11 , $u11 , $v11 , $w11 ,
                    $t12 , $u12 , $v12 , $w12 ,
                    $t13 , $u13 , $v13 , $w13 ,
                    $t14 , $u14 , $v14 , $w14 ,

                    $b24 , $c24 , $d24 , $e24 ,
                    $b25 , $c25 , $d25 , $e25 ,
                    $b26 , $c26 , $d26 , $e26 ,
                    $b27 , $c27 , $d27 , $e27 ,
                    $b28 , $c28 , $d28 , $e28 ,
                    $b29 , $c29 , $d29 , $e29 ,
                    $b30 , $c30 , $d30 , $e30 ,

                    $h24 , $i24 , $j24 , $k24 ,
                    $h25 , $i25 , $j25 , $k25 ,
                    $h26 , $i26 , $j26 , $k26 ,
                    $h27 , $i27 , $j27 , $k27 ,
                    $h28 , $i28 , $j28 , $k28 ,
                    $h29 , $i29 , $j29 , $k29 ,
                    $h30 , $i30 , $j30 , $k30 ,

                    $n24 , $o24 , $p24 , $q24 ,
                    $n25 , $o25 , $p25 , $q25 ,
                    $n26 , $o26 , $p26 , $q26 ,
                    $n27 , $o27 , $p27 , $q27 ,
                    $n28 , $o28 , $p28 , $q28 ,
                    $n29 , $o29 , $p29 , $q29 ,
                    $n30 , $o30 , $p30 , $q30 ,

                    $t24 , $u24 , $v24 , $w24 ,
                    $t25 , $u25 , $v25 , $w25 ,
                    $t26 , $u26 , $v26 , $w26 ,
                    $t27 , $u27 , $v27 , $w27 ,
                    $t28 , $u28 , $v28 , $w28 ,
                    $t29 , $u29 , $v29 , $w29 ,
                    $t30 , $u30 , $v30 , $w30 ,







                    
   );
  echo json_encode($arr);
  ?>
