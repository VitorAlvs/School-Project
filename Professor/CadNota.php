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
            
            <h1>Insira as informações necessária</h1>

            <form action="Controle_Professor.php" method="get" class="form">

                <input type="number"    name="RA"       class="form-control input" id="RA"      max="9999" required placeholder="Digite aqui o RA do Aluno (xxxx)">
                <br>
                <input type="number"    name="RP"       class="form-control input" id="RP"      max="9999" required placeholder="Digite aqui seu RP (xxxx)">
                <br>
                <input type="number" name="Nota1" id="Nota1" class="form-control Input" min="0" max="10,0" step="0.1" placeholder="Nota Listening: ">
                <br>
                <input type="number" name="Nota2" id="Nota2" class="form-control Input" min="0" max="10,0" step="0.1" placeholder="Nota Writing: ">
                <br>
                <input type="number" name="Nota3" id="Nota3" class="form-control Input" min="0" max="10,0" step="0.1" placeholder="Nota Talking: ">
                <br>
                <input type="submit" value="Cadastrar" class="Cadastrar btn btn-primary mb-2" id="Cadastrar" name="Cadastrar">

            </form>

        </div>
    </div>

</body>
</html>