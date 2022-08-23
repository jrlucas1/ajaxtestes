<?php

include "conecta.php";

$sql = "select codpessoa,nome from pessoa order by codpessoa";


$resultado = mysqli_query($conexao,$sql);

$registros=mysqli_fetch_all($resultado, MYSQLI_ASSOC);

echo json_encode($registros);




?>

