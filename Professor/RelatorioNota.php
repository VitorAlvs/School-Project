<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleprof.css">
    <title>Cadastrar Notas</title>
</head>
<body>
    
    <div class="principal">
        <div class="container">
             <a href="Professor_page.php" class=" btn btn-primary mb-2">Voltar </a>

            <h1>Insira as informações necessária para visualizar o Relatório de Notas</h1>

            <form action="Controle_Professor.php" method="get" class="form">

                <input type="number"    name="RA"       class="form-control input" id="RA"      max="9999" required placeholder="Digite aqui o RA do Aluno (xxxx)">
                <br>
                <input type="submit" value="Relatório" class="Relatório btn btn-primary mb-2" id="Relatório" name="Relatório">

            </form>

        </div>
    </div>

</body>
</html>