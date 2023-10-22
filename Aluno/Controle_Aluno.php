<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylealun.css">
    <title>Boletim</title>
</head>
<body>
    
    <div class="principal">
        
        <div class="container">
            <a href="../index.php" class=" btn btn-primary mb-2">Home</a>

            <?php
                include_once "Cls_Aluno.php";

                $Cad = new Aluno();

                $Usuario = filter_input(INPUT_GET, "RA",FILTER_SANITIZE_SPECIAL_CHARS);
                $Senha   = filter_input(INPUT_GET, "Senha");

                $Cad->setUsuarioAluno   ($Usuario);
                $Cad->setSenhaAluno     ($Senha);


                if(isset($_GET["Entrar"])){
                    if($Cad->Logar())
                    {
                        $newpage = "http://localhost/Projeto_Escola/Aluno/Boletim.php";
                        echo "<meta http-equiv='refresh' content='0;url=$newpage'>";
                    }else{
                        $newpage = "http://localhost/Projeto_Escola/Aluno/Login_Aluno.php";
                        echo "<script>alert('Login ou senha invalidos');</script>";
                        echo "<meta http-equiv='refresh' content='0;url=$newpage'>";
                    };
                }
                else if(isset($_GET["Boletim"]))
                {
                    $Dados = $Cad->Boletim();
                
                    if (empty($Dados))
                    {
                        echo "<script> alert('Aluno não localizado') </script>";
                    }
                    else
                    {
                        foreach($Dados as $Dd)
                        {
                            echo "RA:                       {$Dd->ra}           <br>";
                            echo "Código do Professor:      {$Dd->rp}           <br>";
                            echo "Nota de Audição:          {$Dd->notaL}        <br>";
                            echo "Nota de Escrita:          {$Dd->notaW}        <br>";
                            echo "Nota de Fala:             {$Dd->notaT}        <br>";
                            echo "<strong> Nota Final:      {$Dd->media_final}  </strong><br>";
                        }
                    }
                }
            ?>   
        </div>

    </div>

</body>
</html>
