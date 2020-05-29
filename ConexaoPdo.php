<?php

	class ConexaoPdo {
    
    	public static function executaConexao(){

        	$conexao = new PDO('mysql:host=localhost:3306;dbname=AULA12','root','root');
        	return $conexao;
    	}
}

?>