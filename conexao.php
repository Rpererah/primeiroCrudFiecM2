<?php
$host="localhost";
/*$port= 8889; so preciso configurar uma porta caso 
seja diferente de 3306 */
$database="classicmodels";
$username="root";
$password=1234;

try{
    $conexao=new PDO("mysql:host=$host;dbname=$database", $username, $password);
}catch(Exception $e){
    echo $e->getMessage();
}


?>