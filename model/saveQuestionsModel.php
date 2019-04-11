<?php
	
	require_once '../conn/conn.php';

Class saveQuestionsModel extends Conexao{
	
	 // Função de cadastrar
    public function saveQuestions($tabela, $dados) { 
	
		$pdo = parent::get_instance();
         
		foreach(array_combine($dados) as $c => $t){
		
		$sql = "INSERT INTO $tabela($c) VALUES ($t)";
		$statement = $pdo->prepare($sql);
		$statement->execute();

		}
		
		foreach($dados as $key => $valor) {
			$statement->bindValue(":$key", $valor, PDO::PARAM_STR);
		}			
		
    }

}