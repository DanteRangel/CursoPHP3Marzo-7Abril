<?php
/*
	echo "ola k ase";
	echo "<h1 style='color:red;'>ola k ase</<h1>";
	*/
?>
<h1 style="color:red;">ola k ase desde fuera de las etiquetas de <p></p>hp</h1>

<?php
	//OPERADORES DE ASIGNACION
/*
	$variable ='12';  // = operador de asignacion
	echo $variable.'<br>';
	$variable+=2;  // += operador de suma asignacion  14
	echo $variable.'<br>';
	$variable-=2;  // -= operador de resta asignacion  12
	echo $variable.'<br>';
	$variable*=2;  // *= operador de multiplicacion asignacion 24
	echo $variable.'<br>';
	$variable/=2;  // /= operador de division asignacion 12
	echo $variable.'<br>';
	$variable%=2;  // %= operador de modulo asignacion 0
	echo $variable.'<br>';
	var_dump($variable);
	echo '<br>';
	$variable.=" variable"; // .= operador de asignacion concatenacion 
	echo $variable.'<br>';
	var_dump($variable);

	//OPERADORES ARITMETICOS

	$variable_dos=24;
	$variable=48;
	$resultado=0;
	$resultado=$variable+$variable_dos; // + Operador suma
	echo $resultado.'<br>';
	$resultado=$variable-$variable_dos; // - Operador resta
	echo $resultado.'<br>';
	$resultado=$variable*$variable_dos; // * Operador multiplicacion
	echo $resultado.'<br>';
	$resultado=$variable/$variable_dos; // / Operador division
	echo $resultado.'<br>';
	$resultado=$variable%$variable_dos; // % Operador modulo
	echo $resultado.'<br>';
	$resultado=$variable.$variable_dos; // . Operador modulo
	echo $resultado.'<br>';



	// OPERADORES LOGICOS
	// && Y - AND
	// || O - OR
	// !  NEGACION - NOT


	// ===     Comparacion identico

	if((123==="123" && 10>18) && true){
		echo "Entro";
	}else{
		echo "NO entro";
	}
	if((123=="123" && 10>18) || true){
		echo "Entro";
	}else{
		echo "NO entro";
	}

*/
	// OPERADORES DE COMPARACION

	echo (1=='1')?'igual':'no igual';
	echo '<br>';
	echo (1==='1')?'identico':'no identico';
	echo '<br>';
	echo (1!="2")?'si es diferente':'no es diferente';
	echo '<br>';
	echo (1!=="2")?'no es identico':'si es identico';
	echo (3>0)?'es mayor':'es menor';
	$variable= (10===10)?'es identico':'no es identico';
	$variable=(false)?(5*5):(3-1);
	echo $variable;
	echo '<br>';
	echo (2<3)?'es menor':'es mayor';
	echo '<br>';
	echo (2>=2)?'si es mayor o igual a dos':'no entra';
	echo '<br>';
	echo !(2<=3)?'si es menor o igual a dos':'no entra';

?>


















