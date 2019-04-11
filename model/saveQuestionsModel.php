<?php
	
	require_once '../conn/conn.php';

Class saveQuestionsModel extends Conexao{
	
	 // Função de cadastrar
    public function saveQuestions($tabela, $dados) { 
		$pdo = parent::get_instance();
        
        $campos = implode(", ", array_keys($dados));
         

		foreach($dados as $key => $valor) {
		
			$sql = "INSERT INTO $tabela(' ":".implode(", :", array_keys($valor))' ) VALUES (' ":".implode(", :", array_keys($valor))')";

			$statement = $pdo->prepare($sql);
			$statement->execute();

		}
		
			foreach($dados as $key => $valor) {
					$statement->bindValue(":$key", $valor, PDO::PARAM_STR);
				}			
		
    }

}