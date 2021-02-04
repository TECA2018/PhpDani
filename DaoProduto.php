<?php

    include_once "Produto.php";
    include_once "Dao.php"; 

     class DaoProduto extends Produto{
        function Insert(){
            $resultado = 0;
            $objB = new Dao();
            $sql = "INSERT INTO Produtos (Descr, Qtd, Valor)
                    VALUES ('$this->desc', '$this->qtd', $this->valor)";
            
            if(mysqli_query($objB->Conectar(), $sql)){
                $resultado = "Cadastro Com Sucesso!";
            } else {
                $erros = strval(mysqli_error($objB->Conectar()));
                echo $erros;
                $resultado = "Erro ao Cadastrar. COD: $erros";
            }

            return $resultado;
        }

        function Update(){
            $objB = new Dao(); 
            $sql = "UPDATE Produtos 
                    SET Descr ='$this->desc', Qtd ='$this->qtd', Valor ='$this->valor'
                    WHERE id =$this->id";
            
            if(mysqli_query($objB->Conectar(), $sql)){
                $resultado = "Alterado Com Sucesso!";
            } else {
                $erros = strval(mysqli_errno($objB->Conectar()));
                $resultado = "Erro ao Alterar. COD: $erros";
            }

            return $resultado;
        }

        function Delete(){
            $objB = new Dao();             
            $sql = "DELETE FROM Produtos 
                        WHERE id = $this->id";
             if(mysqli_query($objB->Conectar(), $sql)){
                $resultado = "Deletado Com Sucesso!";
            } else {
                $erros = strval(mysqli_errno($objB->Conectar()));
                $resultado = "Erro ao Deletar. COD: $erros";
            }

            return $resultado;
        }

        function SelectTodos(){
            $objB = new Dao();             
            $sql = "SELECT * FROM Produtos
                        ORDER BY id ASC";
            return mysqli_query($objB->Conectar(), $sql);
        }

        function SelectDESC(){
            $objB = new Dao();             
            $sql = "SELECT * FROM Produtos
                        ORDER BY id DESC";
            return mysqli_query($objB->Conectar(), $sql);
        }

        function Select(){
            $objB = new Dao();             
            $sql = "SELECT * FROM Produtos
                        where id = $this->id";
                        
            return mysqli_fetch_array(mysqli_query($obj->Conectar(), $sql));
        }
     }
?>