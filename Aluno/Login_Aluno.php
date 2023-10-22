<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylealun.css">
    <title>Login Aluno</title>
</head>
<body>

    <div class="principal">
        <div class="container">
            <a href="../index.php" class=" btn btn-primary mb-2">Home</a>
            
            <h1>Seja bem vindo, Aluno(a)</h1>

            <form action="Controle_Aluno.php" method="get" class="form">

                <input type="number"    name="RA"       class="form-control input" id="RA"      max="9999" required placeholder="Digite aqui seu RA  (xxxx)">
                <br>
                <input type="password"  name="Senha"    class="form-control input" id="Senha"   max="9999" required placeholder="Digite aqui sua senha  (xxxx)">
                <br>
                <input type="submit" value="Boletim" class="Boletim btn btn-primary mb-2" id="Boletim" name="Boletim">

            </form>

        </div>
    </div>

</body>
</html>