<?php
    class UsuarioService{

        
        private $conexao;
        private $user;

        public function __construct(Conexao $conexao, Usuario $user){
            $this->conexao = $conexao->conectar();
            $this->user = $user;
            


        }


        function inserir(){
            $query= 'insert into user(nome)values(:user)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':user',$this->user->__get('nome'));
            $stmt->execute();
        }
        function recuperar(){
            $query="select * from user";
            $stmt=$this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }
        function atualizar(){
            $query = 'update user set nome = :nome where id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id',$this->user->__get('id'));
            $stmt->bindValue(':nome',$this->user->__get('nome'));
            return $stmt->execute();


        }
        function remover(){
            $query = 'delete from user where id = :id';
            $stmt= $this->conexao->prepare($query);
            $stmt->bindValue(':id',$this->user->__get('id'));
            $stmt->execute();
            header('location:index.php');


        }
        




    }
?>