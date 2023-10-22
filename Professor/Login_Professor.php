<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleprof.css">
    <title>Login Professor</title>
</head>
<body>
    
    <div class="principal">        
        <div class="container">
            <a href="../index.php" class=" btn btn-primary mb-2">Home</a>
            
            <h1>Seja bem vindo, Professor(a)</h1>

            <form action="Controle_Professor.php" method="get" class="form">

                <input type="number"    name="RP"       class="form-control input" id="RP"      max="9999" required placeholder="Digite aqui seu RP (xxxx)">
                <br>
                <input type="password"  name="Senha"    class="form-control input" id="Senha"   max="9999" required placeholder="Digite aqui sua senha (xxxx)">
                <br>
                <input type="submit" value="Entrar" class="Entrar btn btn-primary mb-2" id="Entrar" name="Entrar">

            </form>

        </div>
    </div>

</body>
</html>