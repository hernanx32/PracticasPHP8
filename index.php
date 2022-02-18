<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?PHP
	$a = 5;
	$b = 5;
/* 
//IF ELSE COMUN
	if ($a > $b) {
		echo "El valor de a es Mayor que b";
		
	}elseif ($a < $b){
		echo "El valor de a es Menor que b";
	}else {
		echo "El valor de a es Igual que b";
	}
*/	
//Operaadores ternarios
/*	
$valor = $a > $b ? 'Mayor' : ($a < $b ? 'Menor' :  'Igual');
echo "El valor de a es $valor que el valor de b";
*/

switch ($a) {
	case '1':
		echo "Lunes <br>";
		break;
	case '2':
		echo "Martes <br>";
		break;
	case '3':
		echo "Miercoles <br>";
		break;
	case '4':
		echo "Jueves <br>";
		break;
	case '5':
		echo "Viernes <br>";
		break;
	case '6':
		echo "Sabado <br>";
		break;
	case '7':
		echo "Domingo <br>";
		break;		
	default:
		echo "No definido <br>";
		break;
}






	?>
</body>
</html>