<?php
require_once 'SimpleXLSX.php';

$xlsx = SimpleXLSX::parse( 'Speedometer_v4c.xlsm' );

  $f9  = $xlsx->getCell(0,'F9');
  $f10 = $xlsx->getCell(0,'F10');
  $f11 = $xlsx->getCell(0,'F11');
  $f12 = $xlsx->getCell(0,'F12');
  $f13 = $xlsx->getCell(0,'F13');
  $f14 = $xlsx->getCell(0,'F14');
  $f15 = $xlsx->getCell(0,'F15');
  $f16 = $xlsx->getCell(0,'F16');
  $f17 = $xlsx->getCell(0,'F17');
  $f18 = $xlsx->getCell(0,'F18');
  $f19 = $xlsx->getCell(0,'F19');
  $f20 = $xlsx->getCell(0,'F20');
  $f21 = $xlsx->getCell(0,'F21');
  $f22 = $xlsx->getCell(0,'F22');
  $f23 = $xlsx->getCell(0,'F23');
  $f24 = $xlsx->getCell(0,'F24');
  $f25 = $xlsx->getCell(0,'F25');
  $f26 = $xlsx->getCell(0,'F26');
  $f27 = $xlsx->getCell(0,'F27');
  $f28 = $xlsx->getCell(0,'F28');
  $f29 = $xlsx->getCell(0,'F29');
  $f30 = $xlsx->getCell(0,'F30');
  $f31 = $xlsx->getCell(0,'F31');
  $f32 = $xlsx->getCell(0,'F32');
  $f33 = $xlsx->getCell(0,'F33');
  $f34 = $xlsx->getCell(0,'F34');
  $f35 = $xlsx->getCell(0,'F35');
  $f36 = $xlsx->getCell(0,'F36');
  $f37 = $xlsx->getCell(0,'F37');

  $i10 = $xlsx->getCell(0,'I10');
  $i11 = $xlsx->getCell(0,'I11');
  $i12 = $xlsx->getCell(0,'I12');
  $i13 = $xlsx->getCell(0,'I13');
  $i14 = $xlsx->getCell(0,'I14');
  $i15 = $xlsx->getCell(0,'I15');
  $i16 = $xlsx->getCell(0,'I16');
  $i17 = $xlsx->getCell(0,'I17');
  $i18 = $xlsx->getCell(0,'I18');
  $i19 = $xlsx->getCell(0,'I19');
  $i20 = $xlsx->getCell(0,'I20');
  $i21 = $xlsx->getCell(0,'I21');
  $i22 = $xlsx->getCell(0,'I22');
  $i23 = $xlsx->getCell(0,'I23');
  $i24 = $xlsx->getCell(0,'I24');
  $i25 = $xlsx->getCell(0,'I25');
  $i26 = $xlsx->getCell(0,'I26');
  $i27 = $xlsx->getCell(0,'I27');
  $i28 = $xlsx->getCell(0,'I28');
  $i29 = $xlsx->getCell(0,'I29');
  $i30 = $xlsx->getCell(0,'I30');
  $i31 = $xlsx->getCell(0,'I31');
  $i32 = $xlsx->getCell(0,'I32');
  $i33 = $xlsx->getCell(0,'I33');
  $i34 = $xlsx->getCell(0,'I34');
  $i35 = $xlsx->getCell(0,'I35');
  $i36 = $xlsx->getCell(0,'I36');
  $i37 = $xlsx->getCell(0,'I37');

  $j10 = $xlsx->getCell(0,'J10');
  $j11 = $xlsx->getCell(0,'J11');
  $j12 = $xlsx->getCell(0,'J12');
  $j13 = $xlsx->getCell(0,'J13');
  $j14 = $xlsx->getCell(0,'J14');
  $j15 = $xlsx->getCell(0,'J15');
  $j16 = $xlsx->getCell(0,'J16');
  $j17 = $xlsx->getCell(0,'J17');
  $j18 = $xlsx->getCell(0,'J18');
  $j19 = $xlsx->getCell(0,'J19');
  $j20 = $xlsx->getCell(0,'J20');
  $j21 = $xlsx->getCell(0,'J21');
  $j22 = $xlsx->getCell(0,'J22');
  $j23 = $xlsx->getCell(0,'J23');
  $j24 = $xlsx->getCell(0,'J24');
  $j25 = $xlsx->getCell(0,'J25');
  $j26 = $xlsx->getCell(0,'J26');
  $j27 = $xlsx->getCell(0,'J27');
  $j28 = $xlsx->getCell(0,'J28');
  $j29 = $xlsx->getCell(0,'J29');
  $j30 = $xlsx->getCell(0,'J30');
  $j31 = $xlsx->getCell(0,'J31');
  $j32 = $xlsx->getCell(0,'J32');
  $j33 = $xlsx->getCell(0,'J33');
  $j34 = $xlsx->getCell(0,'J34');
  $j35 = $xlsx->getCell(0,'J35');
  $j36 = $xlsx->getCell(0,'J36');
  $j37 = $xlsx->getCell(0,'J37');

  $k10 = $xlsx->getCell(0,'K10');
  $k11 = $xlsx->getCell(0,'K11');
  $k12 = $xlsx->getCell(0,'K12');
  $k13 = $xlsx->getCell(0,'K13');
  $k14 = $xlsx->getCell(0,'K14');
  $k15 = $xlsx->getCell(0,'K15');
  $k16 = $xlsx->getCell(0,'K16');
  $k17 = $xlsx->getCell(0,'K17');
  $k18 = $xlsx->getCell(0,'K18');
  $k19 = $xlsx->getCell(0,'K19');
  $k20 = $xlsx->getCell(0,'K20');
  $k21 = $xlsx->getCell(0,'K21');
  $k22 = $xlsx->getCell(0,'K22');
  $k23 = $xlsx->getCell(0,'K23');
  $k24 = $xlsx->getCell(0,'K24');
  $k25 = $xlsx->getCell(0,'K25');
  $k26 = $xlsx->getCell(0,'K26');
  $k27 = $xlsx->getCell(0,'K27');
  $k28 = $xlsx->getCell(0,'K28');
  $k29 = $xlsx->getCell(0,'K29');
  $k30 = $xlsx->getCell(0,'K30');
  $k31 = $xlsx->getCell(0,'K31');
  $k32 = $xlsx->getCell(0,'K32');
  $k33 = $xlsx->getCell(0,'K33');
  $k34 = $xlsx->getCell(0,'K34');
  $k35 = $xlsx->getCell(0,'K35');
  $k36 = $xlsx->getCell(0,'K36');
  $k37 = $xlsx->getCell(0,'K37');

  $l10 = $xlsx->getCell(0,'L10');
  $l11 = $xlsx->getCell(0,'L11');
  $l12 = $xlsx->getCell(0,'L12');
  $l13 = $xlsx->getCell(0,'L13');
  $l14 = $xlsx->getCell(0,'L14');
  $l15 = $xlsx->getCell(0,'L15');
  $l16 = $xlsx->getCell(0,'L16');
  $l17 = $xlsx->getCell(0,'L17');
  $l18 = $xlsx->getCell(0,'L18');
  $l19 = $xlsx->getCell(0,'L19');
  $l20 = $xlsx->getCell(0,'L20');
  $l21 = $xlsx->getCell(0,'L21');
  $l22 = $xlsx->getCell(0,'L22');
  $l23 = $xlsx->getCell(0,'L23');
  $l24 = $xlsx->getCell(0,'L24');
  $l25 = $xlsx->getCell(0,'L25');
  $l26 = $xlsx->getCell(0,'L26');
  $l27 = $xlsx->getCell(0,'L27');
  $l28 = $xlsx->getCell(0,'L28');
  $l29 = $xlsx->getCell(0,'L29');
  $l30 = $xlsx->getCell(0,'L30');
  $l31 = $xlsx->getCell(0,'L31');
  $l32 = $xlsx->getCell(0,'L32');
  $l33 = $xlsx->getCell(0,'L33');
  $l34 = $xlsx->getCell(0,'L34');
  $l35 = $xlsx->getCell(0,'L35');
  $l36 = $xlsx->getCell(0,'L36');
  $l37 = $xlsx->getCell(0,'L37');

  $m10 = $xlsx->getCell(0,'M10');
  $m11 = $xlsx->getCell(0,'M11');
  $m12 = $xlsx->getCell(0,'M12');
  $m13 = $xlsx->getCell(0,'M13');
  $m14 = $xlsx->getCell(0,'M14');
  $m15 = $xlsx->getCell(0,'M15');
  $m16 = $xlsx->getCell(0,'M16');
  $m17 = $xlsx->getCell(0,'M17');
  $m18 = $xlsx->getCell(0,'M18');
  $m19 = $xlsx->getCell(0,'M19');
  $m20 = $xlsx->getCell(0,'M20');
  $m21 = $xlsx->getCell(0,'M21');
  $m22 = $xlsx->getCell(0,'M22');
  $m23 = $xlsx->getCell(0,'M23');
  $m24 = $xlsx->getCell(0,'M24');
  $m25 = $xlsx->getCell(0,'M25');
  $m26 = $xlsx->getCell(0,'M26');
  $m27 = $xlsx->getCell(0,'M27');
  $m28 = $xlsx->getCell(0,'M28');
  $m29 = $xlsx->getCell(0,'M29');
  $m30 = $xlsx->getCell(0,'M30');
  $m31 = $xlsx->getCell(0,'M31');
  $m32 = $xlsx->getCell(0,'M32');
  $m33 = $xlsx->getCell(0,'M33');
  $m34 = $xlsx->getCell(0,'M34');
  $m35 = $xlsx->getCell(0,'M35');
  $m36 = $xlsx->getCell(0,'M36');
  $m37 = $xlsx->getCell(0,'M37');

  $n10 = $xlsx->getCell(0,'N10');
  $n11 = $xlsx->getCell(0,'N11');
  $n12 = $xlsx->getCell(0,'N12');
  $n13 = $xlsx->getCell(0,'N13');
  $n14 = $xlsx->getCell(0,'N14');
  $n15 = $xlsx->getCell(0,'N15');
  $n16 = $xlsx->getCell(0,'N16');
  $n17 = $xlsx->getCell(0,'N17');
  $n18 = $xlsx->getCell(0,'N18');
  $n19 = $xlsx->getCell(0,'N19');
  $n20 = $xlsx->getCell(0,'N20');
  $n21 = $xlsx->getCell(0,'N21');
  $n22 = $xlsx->getCell(0,'N22');
  $n23 = $xlsx->getCell(0,'N23');
  $n24 = $xlsx->getCell(0,'N24');
  $n25 = $xlsx->getCell(0,'N25');
  $n26 = $xlsx->getCell(0,'N26');
  $n27 = $xlsx->getCell(0,'N27');
  $n28 = $xlsx->getCell(0,'N28');
  $n29 = $xlsx->getCell(0,'N29');
  $n30 = $xlsx->getCell(0,'N30');
  $n31 = $xlsx->getCell(0,'N31');
  $n32 = $xlsx->getCell(0,'N32');
  $n33 = $xlsx->getCell(0,'N33');
  $n34 = $xlsx->getCell(0,'N34');
  $n35 = $xlsx->getCell(0,'N35');
  $n36 = $xlsx->getCell(0,'N36');
  $n37 = $xlsx->getCell(0,'N37');






  $arr = array ( 
                    $f10 , $i10 , $j10 , $k10 , $l10 , $m10 , $n10 ,  
                    $f11 , $i11 , $j11 , $k11 , $l11 , $m11 , $n11 ,  
                    $f12 , $i12 , $j12 , $k12 , $l12 , $m12 , $n12 ,   
                    $f13 , $i13 , $j13 , $k13 , $l13 , $m13 , $n13 ,  
                    $f14 , $i14 , $j14 , $k14 , $l14 , $m14 , $n14 ,  
                    $f15 , $i15 , $j15 , $k15 , $l15 , $m15 , $n15 ,  
                    $f16 , $i16 , $j16 , $k16 , $l16 , $m16 , $n16 ,  
                    $f17 , $i17 , $j17 , $k17 , $l17 , $m17 , $n17 ,  
                    $f18 , $i18 , $j18 , $k18 , $l18 , $m18 , $n18 ,  
                    $f19 , $i19 , $j19 , $k19 , $l19 , $m19 , $n19 ,  
                    $f20 , $i20 , $j20 , $k20 , $l20 , $m20 , $n20 ,  
                    $f21 , $i21 , $j21 , $k21 , $l21 , $m21 , $n21 ,  
                    $f22 , $i22 , $j22 , $k22 , $l22 , $m22 , $n22 ,  
                    $f23 , $i23 , $j23 , $k23 , $l23 , $m23 , $n23 ,  
                    $f24 , $i24 , $j24 , $k24 , $l24 , $m24 , $n24 ,  
                    $f25 , $i25 , $j25 , $k25 , $l25 , $m25 , $n25 ,  
                    $f26 , $i26 , $j26 , $k26 , $l26 , $m26 , $n26 ,  
                    $f27 , $i27 , $j27 , $k27 , $l27 , $m27 , $n27 ,  
                    $f28 , $i28 , $j28 , $k28 , $l28 , $m28 , $n28 ,  
                    $f29 , $i29 , $j29 , $k29 , $l29 , $m29 , $n29 ,  
                    $f30 , $i30 , $j30 , $k30 , $l30 , $m30 , $n30 ,  
                    $f31 , $i31 , $j31 , $k31 , $l31 , $m31 , $n31 ,  
                    $f32 , $i32 , $j32 , $k32 , $l32 , $m32 , $n32 ,  
                    $f33 , $i33 , $j33 , $k33 , $l33 , $m33 , $n33 ,  
                    $f34 , $i34 , $j34 , $k34 , $l34 , $m34 , $n34 ,  
                    $f35 , $i35 , $j35 , $k35 , $l35 , $m35 , $n35 ,  
                    $f36 , $i36 , $j36 , $k36 , $l36 , $m36 , $n36 ,  
                    $f37 , $i37 , $j37 , $k37 , $l37 , $m37 , $n37 ,  
                );
  echo json_encode($arr);
  ?>
