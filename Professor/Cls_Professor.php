<?php

class Professor
{
    private $Senha;
    private $Rp;
    private $Aluno;
    private $Nota1;
    private $Nota2;
    private $Nota3;
    private $Media;

    /*-----------------------------------------------------*/
    public function getUsuarioProfessor()
    {
        return $this->Rp;
    }
    public function setUsuarioProfessor($User)
    {
        $this->Rp = $User;
    }
    /*-----------------------------------------------------*/ 
    public function getSenhaProfessor()
    {
        return $this->Senha;
    }

    public function setSenhaProfessor($Password)
    {
        $this->Senha = $Password;
    }
    /*-----------------------------------------------------*/ 
    public function getAluno()
    {
        return $this->Aluno;
    }

    public function setAluno($Al)
    {
        $this->Aluno = $Al;
    }
    /*-----------------------------------------------------*/ 
    public function getNota1()
    {
        return $this->Nota1;
    }

    public function setNota1($N1)
    {
        $this->Nota1 = $N1;
    }
    /*-----------------------------------------------------*/ 
    public function getNota2()
    {
        return $this->Nota2;
    }

    public function setNota2($N2)
    {
        $this->Nota2 = $N2;
    }
    /*-----------------------------------------------------*/ 
    public function getNota3()
    {
        return $this->Nota3;
    }

    public function setNota3($N3)
    {
        $this->Nota3 = $N3;
    }
    /*-----------------------------------------------------*/ 
    public function getMedia()
    {
        return $this->Media;
    }

    public function setMedia($Md)
    {
        $this->Media = $Md;
    }

    
    /*Login------------------------------------------*/ 
    public function Logar()
    {
        include_once "../Conexao.php";

        try{
            $Comando = $conexao->prepare("SELECT * FROM tb_professor WHERE rp = ? AND senha_prof = ?");
            $Comando->bindParam(1, $this->Rp);
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

    /*Cadastrar Nota------------------------------------------*/ 
    public function CadNota(){
        include_once "../Conexao.php";

        try{
            $Comando = $conexao->prepare("SELECT * FROM tb_aluno WHERE ra = ?");
            $Comando->bindParam(1, $this->Aluno);
            $Comando->execute();

            if($Comando->rowCount() >= 1)
            {
                $Comando = $conexao->prepare("insert into tb_boletim (notaL, notaW, notaT, media_final, ra, rp) values (?,?,?,?,?,?)");
                $Comando->bindParam(1, $this->Nota1);
                $Comando->bindParam(2, $this->Nota2);
                $Comando->bindParam(3, $this->Nota3);
                $Comando->bindParam(4, $this->Media);
                $Comando->bindParam(5, $this->Aluno);
                $Comando->bindParam(6, $this->Rp);
                if ($Comando->execute())
                {
                    return "Cadastrado com sucesso";
                }
            }
            else
            {
                return "ERRO";
            }
        }
        catch (PDOException $Erro)
        {
            return "Alert ('Usuário ou senha incorretos')";
        }

    }

    /*Relatório de Notas------------------------------------------*/ 
    public function Rel(){

        try{
            include_once "../Conexao.php";

            $Comando=$conexao->prepare('select notaL, notaW, notaT, media_final, ra, rp from tb_boletim where ra = ?');
            $Comando->bindParam(1, $this->Aluno);

            $Comando->execute();
            $Retorno = $Comando->fetchAll(PDO::FETCH_OBJ);
            return $Retorno;
        }
        catch (PDOException $Erro)
        {
            return "Alert ('Usuário ou senha incorretos')";
        }

    }


}