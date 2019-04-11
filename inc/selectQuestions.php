<?php 

require_once 'conn/conn.php';

Class Questions extends Conexao{	
	
	public function listQuestions() {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM questions";
        $statement = $pdo->query($sql);
        $statement->execute();
        if($statement->rowCount() > 0) {
            return $statement->fetchAll();
        } else {
            echo "<p style='color:#333; font-size:26px;'><b>Não encontramos registros.</b></p>";  
            return $statement->fetchAll();   
        }
    }


}