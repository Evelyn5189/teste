<?php
class Autenticacao {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function verificarUsuario($email,$senha) {
        $query = "SELECT * FROM usuario WHERE email = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();
            if (password_verify($senha, $usuario['senha'])){
                return $usuario;
            }
        }
        return false;
    }
}
?>

<!-- 
    return false - caso n encontre o usuário, vai retornar falso para quem pediu para achar esses dados. não pode retornar mais de uma linha.
stmt é uma variável  - estou declarando uma váriavel chamada 
fetch_assoc - ele associa o nome das colunas com o indice --> 

