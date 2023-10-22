<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleadm.css">
    <title>Deletar Informações</title>
</head>
<body>
    
    <div class="principal">
        <div class="container">
            <a href="Home_Adm.php" class=" btn btn-primary mb-2">Voltar</a>

            <form action="Controle_Adm.php" method="get" class="form">
                <h1>Insira as informações necessárias</h1>
                <input type="text" name="Registro" id="Registro" class="form-control input" placeholder="Registro: (Ra, Rp ou Radm)">
                <br>
        
                <div class="radio">
                    <div class="circle">
                        <input type="radio" name="Tipo_R" id="Aluno" value="Aluno">Aluno 
                    </div>
                    <div class="circle">
                        <input type="radio" name="Tipo_R" id="Professor" value="Professor"> Professor
                    </div>
                    <div class="circle">
                        <input type="radio" name="Tipo_R" id="Adm" value="Adm"> Adm 
                    </div>
                </div>
                <br>
                <br>
        
                <input type="submit" value="Deletar" name="Deletar" id="Deletar" class=" btn btn-primary mb-2">
            </form>
        </div>
    </div>

</body>
</html>