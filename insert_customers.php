<?php
require_once("conexao.php");

$id=$_POST['numero_cliente'];
$name_customer=$_POST['nome_cliente'];
$first_contact_name=$_POST['first_contact_name'];
$last_contact_name=$_POST['last_contact_name'];
$phone=$_POST['phone'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$postalCode=$_POST['postal_Code'];
$country=$_POST['country'];
$fk=$_POST['fk_employess_sales'];
$cred_limi=$_POST['cred_limit'];

//query ele faz comando direto pro banco nao se preocupa
//com o conteudo do comando
// FORA DO CONTEUDO SQLINJECTION OR 1=1

//usa prepare quando inserir ou atualizar dados
//(deletar) dados ou ver dados 


try{


$insert=$conexao->prepare("INSERT INTO customers (customerNumber,customerName,contactLastName,contactFirstName,phone,addressLine1,addressLine2,city,state,postalCode,country,salesRepEmployeeNumber,credLimit) VALUES (:customerNumber,:customerName,:contactLastName,:contactFirstName,:phone,:addressLine1,:addressLine2,:city,:state,:postalCode,:country,:salesRepEmployeeNumber,:credLimit)");


 $insert->execute(
    [
       ':customerNumber' => $id,
       ':customerName' => $name_customer,
       ':contactLastName' => $last_contact_name,
       ':contactFirstName' => $first_contact_name,
       ':phone' => $phone,
       ':addressLine1' => $address1,
       ':addressLine2'=> $address2,
       ':city'=> $city,
       ':state'=> $state,
       ':postalCode' => $postalCode,
       ':country' => $country,
       ':salesRepEmployeeNumber' => $fk,
       ':credLimit' => $cred_limit
    ]
);
return 'funcionou'; 

}catch(PDOException $e){
echo 'que pena';
}




?>