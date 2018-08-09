<?php //Para gravar usuarios
class caddados {
  private $nome;
  private $sobrenome;
  private $email;
  private $senha;
  private $sexo;
  private $data_nascimento;
  private $novidades;
  private $resultado;
  private $result;

  public function __construct($nome,$sobrenome,$email,$senha,$sexo,$data_nascimento,$novidades){
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
    $this->senha = $senha;
    $this->sexo = $sexo;
    $this->data_nascimento = $data_nascimento;
    $this->novidades = $novidades;
  }

  public function salvarDados(){
    $dbname = "drone";
    $usuario = "Michael";
    $senha   = "1234";
    $conn    = "mysql:host=127.0.0.1;dbname=drone;charset=utf8mb4";

     $db = new PDO($conn, $usuario, $senha);

     $query = $db->prepare("INSERT INTO usuarios (nome,sobrenome,email,senha,sexo,data_nasc,novidades)
     VALUES (:nome,:sobrenome,:email,:senha,:sexo,:data_nasc,:novidades)");
     $resultado = $query->execute([
       ":nome" => $this->nome,
       ":sobrenome" => $this->sobrenome,
       ":email" => $this->email,
       ":senha" => $this->senha,
       ":sexo" => $this->sexo,
       ":data_nasc" => $this->data_nascimento,
       ":novidades" => $this->novidades
     ]);
     $result = $db->lastInsertId();
     //$query = $db->prepare("SELECT MAX(idusuarios) FROM usuarios");
     //$resultado = $query->execute();

     //$result = $query->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }
}
//Para verificar se usuario está cadastrado
class verusu  {
  private $email;
  private $retorno;

  public function __construct($email){
    $this->email = $email;
  }

  public function AchaDados(){
    $dbname = "drone";
    $usuario = "Michael";
    $senha   = "1234";
    $conn    = "mysql:host=127.0.0.1;dbname=drone;charset=utf8mb4";

    $db = new PDO($conn, $usuario, $senha);
    $query = $db->prepare("SELECT idusuarios,email FROM usuarios WHERE email = :email");
    $retorno = $query->execute([":email" => $this->email]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

  return $result;
  }
}

  //Para gravar endereco
class cadender {
  private $endereco;
  private $complemento;
  private $bairro;
  private $cep;
  private $pais;
  private $cidade;
  private $estado;
  private $resultado;
  private $result;
  private $idusuario;

  public function __construct($endereco,$complemento,$bairro,$cep,$pais,$cidade,$estado,$idusuario){
    $this->endereco = $endereco;
    $this->compelmento = $complemento;
    $this->bairro = $bairro;
    $this->cep = $cep;
    $this->pais = $pais;
    $this->cidade = $cidade;
    $this->estado = $estado;
    $this->idusuario = $idusuario;
  }

  public function salvarDados(){
    $dbname = "drone";
    $usuario = "Michael";
    $senha   = "1234";
    $conn    = "mysql:host=127.0.0.1;dbname=drone;charset=utf8mb4";

    $db = new PDO($conn, $usuario, $senha);
    $query = $db->prepare("INSERT INTO enderecos (endereco,complemento,bairro,cep,pais,cidade,estado,fkcliente)
                            VALUES (:endereco,:complemento,:bairro,:cep,:pais,:cidade,:estado,:idusuarios)");
    $resultado = $query->execute([
         ":endereco" => $this->endereco,
         ":complemento" => $this->complemento,
         ":bairro" => $this->bairro,
         ":cep" => $this->cep,
         ":pais" => $this->pais,
         ":cidade" => $this->cidade,
         ":estado" => $this->estado,
         ":idusuarios" => $this->idusuario
    ]);
    $query = $db->prepare("SELECT MAX(idenderecos) FROM enderecos");
    $resultado = $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }
}

class logar {

  private $email;
  private $senha;
  private $valsenha;
  private $mensagem;

  public function __construct($email,$senha){
    $this->email = $email;
    $this->senha = $senha;
  }
  public function valsenha() {

    $dbname = "drone";
    $usuario = "Michael";
    $senha   = "1234";
    $conn    = "mysql:host=127.0.0.1;dbname=drone;charset=utf8mb4";

     $db = new PDO($conn, $usuario, $senha);
     $query = $db->prepare("SELECT senha,idusuarios,nome FROM usuarios WHERE email = :email");
     $resultado = $query->execute([
       ":email" => $this->email
     ]);
     $result = $query->fetchAll(PDO::FETCH_ASSOC);
     VAR_DUMP($result);
     //VAR_DUMP($resultado);
     $valsenha = PASSWORD_VERIFY($this->senha,$result[0]["senha"]);
     // VAR_DUMP($result[0]["senha"]);
     if ($valsenha == true) {
       $nome     = $result[0]["nome"];
       $mensagem = "Bem vindo ".$nome;
     } else {
        $mensagem = "Senha Invalida !";
     }

     return $mensagem;
  }
}
 ?>
