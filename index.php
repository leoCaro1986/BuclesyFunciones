<?php
echo "Clase 4 bucles, arreglos y funciones<br>";
//array o arreglo indexado
$arreglo=array("Juan","Maria","James","Sandra");
print_r($arreglo);
echo("<br>......................................................................<br>");

//array asociativo
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"James",'usuario4'=>"Sandra");
print_r($arreglo);
echo("<br>......................................................................<br>");

//buscando el tamaño de un arreglo
$tamano=count($arreglo);
echo ("El tamaño de nuestro arreglo es : ".$tamano);
echo("<br>......................................................................<br>");


//bucle for
for($centinela=0;$centinela<=10;$centinela++){
    echo("El valor del centinela es: ".$centinela."<br>");
}
echo("<br>......................................................................<br>");

//bucle for para recorrer arreglos
$arreglo=array("Juan","Maria","James","Sandra");
for($centinela=0;$centinela<count($arreglo);$centinela++){
    echo("<br>".$arreglo[$centinela]."<br>");
}
echo("<br>......................................................................<br>");

//bucle foreach para recorrer arreglos
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"James",'usuario4'=>"Sandra");
foreach($arreglo as $clave=>$valor){
echo "<br>"."La clave ".$clave." es: <br>";
echo"<br>".($valor)."<br>";
}

echo("<br>......................................................................<br>");

//bucle foreach para arreglo indexado
$arreglo=array("Juan","Maria","James","Sandra");
foreach($arreglo as $clave=>$valor){
    echo "<br>La clave del cajon: ".$clave;
    echo "<br>Tiene por valor: ".$valor;
}

echo("<br>......................................................................<br>");

//Arreglos Multidimensionales(arreglo de arreglos)
$usuarios=array(
    'usuario1'=>array('nombre'=>"Juan",'edad'=>"30",'sexo'=>"M"),
    'usuario2'=>array('nombre'=>"Maria",'edad'=>"28",'sexo'=>"F"),
    'usuario3'=>array('nombre'=>"James",'edad'=>"32",'sexo'=>"M"),
    'usuario4'=>array('nombre'=>"Sandra",'edad'=>"27",'sexo'=>"F")
);










?>