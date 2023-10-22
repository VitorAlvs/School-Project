<?php

class Aluno
{
    private $Usuario;
    private $Senha;
    
    /*-----------------------------------------------------*/
    public function getUsuarioAluno()
    {
        return $this->Usuario;
    }
    public function setUsuarioAluno($User)
    {
        $this->Usuario = $User;
    }
    /*-----------------------------------------------------*/   
    public function getSenhaAluno()
    {
        return $this->Senha;
    }
    public function setSenhaAluno($Password)
    {
        $this->Senha = $Password;
    } 
    /*-----------------------------------------------------*/ 

    /*Login------------------------------------------------*/ 
    public function Logar()
    {
        include_once "../Conexao.php";

        try{
            $Comando = $conexao->prepare("SELECT * FROM tb_aluno WHERE ra = ? AND senha_aluno = ?");
            $Comando->bindParam(1, $this->Ra);
            $Comando->bindParam(2, $this->Senha);

            if($Comando->execute())
            {
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if($Comando->rowCount() == 1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        catch (PDOException $Erro)
        {
            return "Alert ('Usuário ou senha incorretos')";
        }
    }

    /*Boletim------------------------------------------------*/ 
        public function Boletim(){

            try{
                include_once "../Conexao.php";
    
                $Comando=$conexao->prepare('select notaL, notaW, notaT, media_final, ra, rp from tb_boletim where ra = ?');
                $Comando->bindParam(1, $this->Usuario);
                $Comando->execute();

                if ($Comando->rowCount() > 0)
                {
                    $Retorno = $Comando->fetchAll(PDO::FETCH_OBJ);
                    return $Retorno;
                }
                else{
                    return "";
                }
            }
            catch (PDOException $Erro)
            {
                return "Alert ('Usuário ou senha incorretos')";
            }
        }
}