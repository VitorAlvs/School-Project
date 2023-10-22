<?php

class Adm
{
    private $Senha_Adm;
    private $Usuario_Adm;
    private $RP;
    private $Nome;
    private $NovaSenha;
    private $RA;
    private $Sobrenome;
    private $RADM;
    private $Tipo_R;
    private $Registro;

    public function Logar()
    {
        include_once "../Conexao.php";

        try{
            $Comando = $conexao->prepare("SELECT * FROM tb_professor WHERE radm = ? AND senha_adm = ?");
            $Comando->bindParam(1, $this->Usuario_Adm);
            $Comando->bindParam(2, $this->Senha_Adm);

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

    /*-----------------------------------------------------*/ 
    public function getUsuarioAdm()
    {
        return $this->Usuario_Adm;
    }
    public function setUsuarioAdm($User)
    {
        $this->Usuario_Adm = $User;
    }
    /*-----------------------------------------------------*/ 
    public function getTipo_R()
    {
        return $this->Tipo_R;
    }
    public function setTipo_R($Registro)
    {
        $this->Tipo_R = $Registro;
    }
    /*-----------------------------------------------------*/ 
    public function getRegistro()
    {
        return $this->Registro;
    }
    public function setRegistro($Rg)
    {
        $this->Reg = $Rg;
    }
    /*-----------------------------------------------------*/ 
    public function getSenhaAdm()
    {
        return $this->Senha_Adm;
    }
    public function setSenhaAdm($Password)
    {
        $this->Senha_Adm = $Password;
    }
    /*-----------------------------------------------------*/ 
    public function getRP()
    {
        return $this->RP;
    }
    public function setRP($RP)
    {
        $this->RP = $RP;
    }
    /*-----------------------------------------------------*/ 
    public function getNome()
    {
        return $this->Nome;
    }
    public function setNome($Nm)
    {
        $this->Nome = $Nm;
    }
    /*-----------------------------------------------------*/ 
    public function getNovaSenha()
    {
        return $this->NovaSenha;
    }
    public function setNovaSenha($Ns)
    {
        $this->NovaSenha = $Ns;
    }
    /*-----------------------------------------------------*/ 
    public function getRA()
    {
        return $this->RA;
    }
    public function setRA($RA)
    {
        $this->RA = $RA;
    }
    /*-----------------------------------------------------*/ 
    public function getSobrenome()
    {
        return $this->Sobrenome;
    }
    public function setSobrenome($Sn)
    {
        $this->Sobrenome = $Sn;
    }
    /*-----------------------------------------------------*/ 
    public function getRADM()
    {
        return $this->RADM;
    }
    public function setRADM($Rd)
    {
        $this->RADM = $Rd;
    }

    /*Cadastrar Novo Professor------------------------------*/ 
    public function CadProf()
    {
        include_once "../Conexao.php";

        try
        {
            $Comando=$conexao->prepare('insert into tb_professor (rp, nome_prof, senha_prof) values (?,?,?)');
            $Comando->bindParam(1, $this->RP);
            $Comando->bindParam(2, $this->Nome);
            $Comando->bindParam(3, $this->NovaSenha);

            if ($Comando->execute())
            {
                $Retorno = "Cadastrado com sucesso";
            }
        }
        catch(PDOException $Erro)
        {
            $Retorno = "Erro" . $Erro->getMessage();
        }

        return $Retorno;
    }

    /*Cadastrar Novo Aluno------------------------------*/ 
    public function CadAluno()
    {
        include_once "../Conexao.php";

        try
        {
            $Comando=$conexao->prepare('insert into tb_aluno (ra, nome_aluno, sobrenome_aluno, senha_aluno) values (?,?,?,?)');
            $Comando->bindParam(1, $this->RA);
            $Comando->bindParam(2, $this->Nome);
            $Comando->bindParam(3, $this->Sobrenome);
            $Comando->bindParam(4, $this->NovaSenha);

            if ($Comando->execute())
            {
                $Retorno = "Cadastrado com sucesso";
            }
        }
        catch(PDOException $Erro)
        {
            $Retorno = "Erro" . $Erro->getMessage();
        }

        return $Retorno;
    }

    /*Cadastrar Novo Adm------------------------------*/ 
    public function CadAdm()
    {
        include_once "../Conexao.php";

        try
        {
            $Comando=$conexao->prepare('insert into tb_administrador (radm, nome_administrador, sobrenome_administrador, senha_administrador) values (?,?,?,?)');
            $Comando->bindParam(1, $this->RADM);
            $Comando->bindParam(2, $this->Nome);
            $Comando->bindParam(3, $this->Sobrenome);
            $Comando->bindParam(4, $this->NovaSenha);

            if ($Comando->execute())
            {
                $Retorno = "Cadastrado com sucesso";
            }
        }
        catch(PDOException $Erro)
        {
            $Retorno = "Erro" . $Erro->getMessage();
        }

        return $Retorno;
    }

    public function Deletar()
    {
        include_once "../Conexao.php";

        try
        {
            if($this->Tipo_R == "Aluno")
            {
                $Comando = $conexao->prepare("DELETE FROM  tb_aluno WHERE ra = ?");
                $Comando->bindParam(1, $this->Registro);
                if($Comando->execute())
                {
                    $Retorno = "Aluno deletado com Sucesso";
                }

            }
            else if($this->Tipo_R == "Professor")
            {
                $Comando = $conexao->prepare("DELETE FROM  tb_professor WHERE rp = ?");
                $Comando->bindParam(1, $this->Registro);
                if($Comando->execute())
                {
                    $Retorno = "Professor deletado com Sucesso";
                }
            }
            else if ($this->Tipo_R == "Adm")
            {
                $Comando = $conexao->prepare("DELETE FROM  tb_administrador WHERE radm = ?");
                $Comando->bindParam(1, $this->Registro);
                if($Comando->execute())
                {
                    $Retorno = "Adm deletado com Sucesso";
                }
            }
            else
            {
                return "Erro";
            }
        }
        catch(PDOException $Erro)
        {
            $Retorno = "Erro" . $Erro->getMessage();
        }

        return $Retorno;
    }
}