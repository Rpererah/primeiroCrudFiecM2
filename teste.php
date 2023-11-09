<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- get pegar params na url -->
    <!-- post -> envia um pacote -->
    <form action ="recebimento.php" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nome" id="nome" />
        <button type='submit'>enviar dados</button>
    </form>
    <a href="recebimento.php?id=1 ">click aqui</a>
</body>
</html>