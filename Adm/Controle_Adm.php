<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleadm.css">
    <title>Boletim</title>
</head>
<body>
    
    <div class="principal">
        <div class="container">
            <a href="../Adm/Home_Adm.php" class=" btn btn-primary mb-2">Voltar </a>

            <?php
    
                include_once "Cls_Adm.php";
                
                $Cad = new Adm();
                
                $Usuario    = filter_input(INPUT_GET, "RADM",FILTER_SANITIZE_SPECIAL_CHARS);
                $Senha      = filter_input(INPUT_GET, "Senha");
                $RP         = filter_input(INPUT_GET, "RP");
                $Nome       = filter_input(INPUT_GET, "Nome");
                $NovaSenha  = filter_input(INPUT_GET, "NovaSenha");
                $RA         = filter_input(INPUT_GET, "RA");
                $Sobrenome  = filter_input(INPUT_GET, "Sobrenome");
                $RADM       = filter_input(INPUT_GET, "RADM");
                $Tipo_R     = filter_input(INPUT_GET, "Tipo_R");
                $Registro   = filter_input(INPUT_GET, "Registro");
                
                $Cad->setUsuarioAdm   ($Usuario);
                $Cad->setSenhaAdm     ($Senha);
                $Cad->setRP           ($RP);
                $Cad->setNome         ($Nome);
                $Cad->setNovaSenha    ($NovaSenha);
                $Cad->setRA           ($RA);
                $Cad->setSobrenome    ($Sobrenome);
                $Cad->setRADM         ($RADM);
                $Cad->setTipo_R       ($Tipo_R);
                $Cad->setRegistro     ($Registro);
                
                if(isset($_GET["Entrar"]))
                {
                    if($Cad->Logar())
                    {
                        $newpage = "http://localhost/Projeto_Escola/Adm/Home_Adm.php";
                        echo "<meta http-equiv='refresh' content='0;url=$newpage'>";
                    }else{
                        $newpage = "http://localhost/Projeto_Escola/Adm/Login_Adm.php";
                        echo "<script>alert('Login ou senha invalidos');</script>";
                        echo "<meta http-equiv='refresh' content='0;url=$newpage'>";
                    };
                }
                else if(isset($_GET["CadastrarProf"]))
                {
                    echo $Cad->CadProf();
                }
                else if(isset($_GET["CadastrarAluno"]))
                {
                    echo $Cad->CadAluno();
                }
                else if(isset($_GET["CadastrarAdm"]))
                {
                    echo $Cad->CadAdm();
                }
                else if(isset($_GET["Deletar"]))
                {
                    echo $Cad->Deletar();
                }
                else{
                    echo 'ERRO';
                }
            ?>   
        </div>

    </div>

</body>
</html>

