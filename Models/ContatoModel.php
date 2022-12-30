<?php

    namespace Models;
    use FFI\Exception;

    

    class ContatoModel{
        
        public function CadastrarContatoCliente($executor, $nome, $email, $temSite, $descricao){
            try{
                $executor->sExecute('INSERT INTO contatos_clientes VALUES(NULL, ?,?,?,?)', false, array($nome, $email, $temSite, $descricao));
            }catch(Exception $e){
                return 0;
            }

        return 1;

        }
        

    }




?>