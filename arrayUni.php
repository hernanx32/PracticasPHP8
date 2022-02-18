<?php
//Array Simple
  /*  $array = [10,"Victor",15, true];
    echo $array[1]."<br>";
    $array[1] = "Hernan";
    echo $array[1];*/


//Array Unidimencionales

$datos = [
    'Nombre' => 'Ayala Hernan',
    'Email' => 'webfsa@gmail.com',
    'Cel' => '3704444444',
];

echo $datos['Nombre'];


BACKUP
SI( CONVE ="COMERCIO", SI(CONDI="M", ((SUELDO +ADICSU( "ADD" )+ADICSU( "ADS" ) )  / 25) ,(SUELDO*8 + PROREMVAR(6)/25)), SI( CONVE ="TRANSPORTE", SI(CONDI="M", ((SUELDO+ADICSU( "ADD" )+ADICSU( "ADS" ))/ 24)+
(CONCE( 512, 512 )/24 -CONCE( 512, 512 )/DIAME  ) ,(SUELDO*8 + PROREMVAR(6)/25)), 0 ) )


SI( CONVE ="COMERCIO", SI(CONDI="M", ((SUELDO +ADICSU( "ADD" )+ADICSU( "ADS" ) )  / 25) ,(SUELDO*8 + PROREMVAR(6)/25)),
SI( CONVE ="TRANSPORTE", SI(CONDI="M", ((SUELDO+ADICSU( "ADD" )+ADICSU( "ADS" ))/ 24)+(CONCE( 512, 512 )/24 -CONCE( 512, 512 )/DIAME  ) ,(SUELDO*8 + PROREMVAR(6)/25)),
SI( CONVE ="CARNICEROS", SI(CONDI="M", ((SUELDO +ADICSU( "ADD" )+ADICSU( "ADS" ) )  / 25) ,(SUELDO*8 + PROREMVAR(6)/25)),      
      0 ) ) )
?>