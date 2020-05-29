<?php require_once 'classes/ConexaoPdo.php'; ?>

<?php

	class Categoria {

		public $idca;
    	public $nome;


        public function __construct($id = false)
        {
            if ($id) {
                $this->idca = $id;
                $this->carregar();
            }
        }


    	public function listar() {
        	
        	$query = "SELECT IDCA,NOME FROM CATEGORIA";
        	$conexao = ConexaoPdo::executaConexao();
			$resultado = $conexao->query($query);
			$lista = $resultado->fetchAll();
			return $lista;
    	}


		public function inserir() {
    		
    		$query = "INSERT INTO CATEGORIA(NOME) VALUES ('" . $this->nome . "')";
            $conexao = ConexaoPdo::executaConexao();
    		$conexao->exec($query);
		}


        public function carregar() {   
            
            $query = "SELECT IDCA, NOME FROM CATEGORIA WHERE IDCA = " . $this->idca;
            $conexao = ConexaoPdo::executaConexao();
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            foreach ($lista as $linha) {
                return $this->nome = $linha['NOME'];
            }
        }

        public function atualizar() {
        
            $query = "UPDATE CATEGORIA SET NOME = '" . $this->nome . "' WHERE IDCA =".$this->idca;
            $conexao = ConexaoPdo::executaConexao();
            $conexao->exec($query);
        }

        public function excluir(){
    
            $query = "DELETE FROM CATEGORIA WHERE IDCA = " . $this->idca;
            $conexao = ConexaoPdo::executaConexao();
            $conexao->exec($query);
        }
	
    }

?>