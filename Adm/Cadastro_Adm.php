<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleadm.css">
    <title>Cadastrar Adm</title>
</head>
<body>

    <div class="principal">
        <div class="container">
            <a href="Home_Adm.php" class=" btn btn-primary mb-2">Voltar</a>

            <form action="Controle_Adm.php" method="get" class="form">
                <h1>Preencha com as informações do Adm</h1>
                <input type="number"    name="RADM"       class="form-control input" id="RADM"          max="9999" required placeholder="Defina aqui o RADM (xxxx)">
                <br>
                <input type="password"  name="NovaSenha"class="form-control input" id="NovaSenha"   max="9999" required placeholder="Defina aqui a senha (xxxx)">
                <br>
                <input type="text"      name="Nome"     class="form-control input" id="Nome"                   required placeholder="Escreva aqui o nome do Adm">
                <br>
                <input type="text"      name="Sobrenome"     class="form-control input" id="Sobrenome"         required placeholder="Escreva aqui o sobrenome do Adm">
                <br>
                <input type="submit" value="CadastrarAdm" class="CadastrarAdm btn btn-primary mb-2" id="CadastrarAdm"  name="CadastrarAdm">
            </form>

        </div>
    </div>

</body>
</html>