<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleprof.css">
    <title>Document</title>
</head>
<body>
    
    <div class="principal">
        <div class="container" class=" btn btn-primary mb-2">
        <a href="../Professor/Professor_page.php" class=" btn btn-primary mb-2">Voltar </a>
            <?php

                

                include_once "Cls_Professor.php";

                $Cad = new Professor();

                $Usuario= filter_input(INPUT_GET, "RP",FILTER_SANITIZE_SPECIAL_CHARS);
                $Senha  = filter_input(INPUT_GET, "Senha");
                $Aluno  = filter_input(INPUT_GET,"RA");
                $Nota1  = filter_input(INPUT_GET,"Nota1");
                $Nota2  = filter_input(INPUT_GET,"Nota2");
                $Nota3  = filter_input(INPUT_GET,"Nota3");
                $Media  = (($Nota1 + $Nota2 + $Nota3)/3);

                $Cad->setUsuarioProfessor   ($Usuario);
                $Cad->setSenhaProfessor     ($Senha);
                $Cad->setAluno              ($Aluno);
                $Cad->setNota1              ($Nota1);
                $Cad->setNota2              ($Nota2);
                $Cad->setNota3              ($Nota3);
                $Cad->setMedia              ($Media);


                if(isset($_GET["Entrar"]))
                {
                    if($Cad->Logar())
                    {
                        $newpage = "../Professor/Professor_page.php";
                        echo "<meta http-equiv='refresh' content='0;url=$newpage'>";
                    }else{
                        $newpage = "../Professor/Professor_page.php";
                        echo "<script>alert('Login ou senha invalidos');</script>";
                        echo "<meta http-equiv='refresh' content='0;url=$newpage'>";
                    };
                }
                else if (isset($_GET["Cadastrar"]))
                {
                    echo $Cad->CadNota();
                }
                else if (isset($_GET["Relatório"]))
                {
                    $Dados = $Cad->Rel();
                    
                    if (empty($Dados))
                    {
                        echo "<script> alert('Registro não localizado') </script>";
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