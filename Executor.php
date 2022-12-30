<?php 

    class Executor
    {
        private $host = 'localhost';
        private $dbName = 'u118049546_mdl_dev_db';
        private $dbUser = 'u118049546_mdl_dev_admin';
        private $dbPass = 'Mdldev66';

        private $pdo;

        public function __construct(){

            
            try{
                $this->pdo = new PDO('mysql: host='.$this->host .'; dbname='.$this->dbName, $this->dbUser, $this->dbPass);
                
            }catch(PDOException $e){
                echo 'Houve um erro ao conectar no banco de dados.   Erro: '. $e->getMessage();
            }
        }
        public function sExecute($query, $fetchAtExecute = false , $valuesArray = []){

            if(count($valuesArray) == 0){
                $stmt = $this->pdo->prepare($query);
                $stmtSend = $stmt->execute();
                if($fetchAtExecute){
                    $returnState = $stmt->fetchAll();
                    return $returnState;
                }
            }else{
                $aStmt = $this->pdo->prepare($query);
                $aStmtSend = $aStmt->execute($valuesArray);
                if($fetchAtExecute){
                    $returnState = $aStmt->fetchAll();
                    return $returnState;
                }
            }
        }

        public static function sTransactions($stringParameter)
        {
            switch ($stringParameter) 
            {
                case 'start':
                    self::$pdo->beginTransaction();
                    break;

                case 'commit':
                    self::$pdo->commit();
                    break;

                case 'rollback':
                    self::$pdo->rollBack();
                    break;

                default:
                    self::$pdo->beginTransaction(); 
                    break;
            }
        }
        
    }

?>