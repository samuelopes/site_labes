<?php

include("ClassConexao.php");

class ClassCrud extends ClassConexao{

	private $Crud;
	private $Contador;

	#preparacao das declarativas
	private function preparedStatements($Query, $Parametros){
		$this->countParametros($Parametros);
		$this->Crud = $this->conectaDB()->prepare($Query);
		if($this->Contador > 0){
            for($I=1; $I <= $this->Contador; $I++){
                $this->Crud->bindValue($I,$Parametros[$I-1]);
            }
        }

        $this->Crud->execute();
	}

	#contador de parâmetros
	private function countParametros($Parametros){
		$this->Contador = count($Parametros);
	}

	#seleção no banco de dados
	public function selectDB($Campos, $Tabela, $Condicao, $Parametros){
		$this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}",$Parametros);
		return $this->Crud;  
	}
}