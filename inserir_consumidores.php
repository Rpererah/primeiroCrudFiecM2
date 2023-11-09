<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir </title>
</head>
<body>
    <form action="insert_customers.php" method="post">
        <label for="numero_cliente">Numero do cliente</label>
        <input type="text" name="numero_cliente" id="numero_cliente" />
        <br/>
        <label for="">Nome do cliente</label>
        <input type="text" name="nome_cliente" />
        <br/>
        <label for="">Primeiro nome do contato</label>
        <input type="text" name="first_contact_name" />
        <br/>
        <label for="">Ultimo nome do contato</label>
        <input type="text" name="last_contact_name" />
        <br/>
        <label for="">Telefone</label>
        <input type="text" name="phone" />
        <br/>
        <label for="">Endereço 1</label>
        <input type="text" name="address1"/>
        <br/>
        <label for="">Endereço 2</label>
        <input type="text" name="address2"/>
        <br/>
        <label for="">cidade</label>
        <input type="text" name="city"/>
        <br/>
        <label for="">estado</label>
        <input type="text" name="state"/>
        <br/>
        <label for="">Codigo postal</label>
        <input type="text" name="postal_Code"/>
        <br/>
        <label for="">Pais</label>
        <input type="text" name="country"/>
        <br/>
        <label for="">Identidade do representante de vendas</label>
        <input type="text" name="fk_employess_sales"/>
        <br/>
        <label for="">limite de credito</label>
        <input type="text" name="cred_limit"/>
        <button type="submit">Enviar dados</button>
    </form>
</body>
</html>