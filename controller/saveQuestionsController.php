<?php
 include_once '../model/saveQuestionsModel.php';
	
	$save = new saveQuestionsModel();
	$dados = $_POST;
	
	if(isset($dados) && !empty($dados)) {
		$save->saveQuestions("savequestions", $dados);
		
	}
