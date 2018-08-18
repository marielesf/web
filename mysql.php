<?php
class MySQL
{
     private $data = array();

   function __construct($endereco, $login, $senha, $database) {
       this->database = new PDO($endereco, $login, $senha, $database);
   }
	
	public function findFirst($table, $where){
		$this->data["table"] = $table;
		$this->data["where"] = $where;
		$query = $pdo->prepare("SELECT * FROM " .$table ." WHERE " .$where. " LIMIT 1");
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);
		$this->data["result"] = $result;
		print_r($result);
	}
	
	public function __set($variavel, $value) {
		$query = "UPDATE ".$this->data[$table]." SET $variavel = '".$value."' WHERE " .$this->data[$where]." LIMIT 1";
    }
	
    public function __get($variavel) {
        echo "Variavel informada: {$this->$variavel}";
	} 

	/*   
   * Método privado para construção da instrução SQL de INSERT      
   * @return String contendo instrução SQL   
   */ 
	private function buildInsert($tabela, $valores){   
		// Inicializa variáveis   
		$sql = "";   
		$campos = "";   
		$valores = "";   
			   
		// Loop para montar a instrução com os campos e valores   
		foreach($arrayDados as $chave => $valor):   
		   $campos .= $chave . ', ';   
		   $valores .= '?, ';   
		endforeach;   
			   
		// Retira vírgula do final da string   
		$campos = (substr($campos, -2) == ', ') ? trim(substr($campos, 0, (strlen($campos) - 2))) : $campos ;    
			   
		// Retira vírgula do final da string   
		$valores = (substr($valores, -2) == ', ') ? trim(substr($valores, 0, (strlen($valores) - 2))) : $valores ;    
			   
		// Concatena todas as variáveis e finaliza a instrução   
		$sql .= "INSERT INTO $tabela (" . $campos . ")VALUES(" . $valores . ")";   
			   
		// Retorna string com instrução SQL   
		return trim($sql);   
	} 

	/*   
   * Método privado para construção da instrução SQL de UPDATE      
   * @return String contendo instrução SQL   
   */    
   private function buildUpdate($tabela,$valores,$where){   
    
       // Inicializa variáveis   
       $sql = "";   
       $valCampos = "";   
       $valCondicao = "";   
              
       // Loop para montar a instrução com os campos e valores   
       foreach($valores as $chave => $valor):   
          $valCampos .= $chave . '=?, ';   
       endforeach;   
              
       // Loop para montar a condição WHERE   
       foreach($where as $chave => $valor):   
          $valCondicao .= $chave . '? AND ';   
       endforeach;   
              
       // Retira vírgula do final da string   
       $valCampos = (substr($valCampos, -2) == ', ') ? trim(substr($valCampos, 0, (strlen($valCampos) - 2))) : $valCampos ;    
              
       // Retira vírgula do final da string   
       $valCondicao = (substr($valCondicao, -4) == 'AND ') ? trim(substr($valCondicao, 0, (strlen($valCondicao) - 4))) : $valCondicao ;    
              
        // Concatena todas as variáveis e finaliza a instrução   
        $sql .= "UPDATE $tabela SET " . $valCampos . " WHERE " . $valCondicao;   
              
        // Retorna string com instrução SQL   
        return trim($sql);   
   }   
    
   /*   
   * Método privado para construção da instrução SQL de DELETE   
   * @return String contendo instrução SQL   
   */    
   private function buildDelete($tabela, $Where){   
    
        // Inicializa variáveis   
        $sql = "";   
        $valCampos= "";   
              
        // Loop para montar a instrução com os campos e valores   
        foreach($Where as $chave => $valor):   
           $valCampos .= $chave . '? AND ';   
        endforeach;   
              
        // Retira a palavra AND do final da string   
        $valCampos = (substr($valCampos, -4) == 'AND ') ? trim(substr($valCampos, 0, (strlen($valCampos) - 4))) : $valCampos ;    
              
        // Concatena todas as variáveis e finaliza a instrução   
        $sql .= "DELETE FROM $tabela WHERE " . $valCampos;   
              
        // Retorna string com instrução SQL   
        return trim($sql);   
   } 

	/*   
   * Método público para inserir os dados na tabela   
   * @param $valores = Array de dados contendo colunas e valores   
   * @return Retorna resultado booleano da instrução SQL   
   */   
   public function insert($tabela, $valores){   
      try {   
    
        // Atribui a instrução SQL construida no método   
        $sql = $this->buildInsert($tabela, $valores);   
    
        // Passa a instrução para o PDO   
        $stm = $this->pdo->prepare($sql);   
    
        // Loop para passar os dados como parâmetro   
        $cont = 1;   
              foreach ($valores as $valor):   
                    $stm->bindValue($cont, $valor);   
                    $cont++;   
              endforeach;   
    
        // Executa a instrução SQL e captura o retorno   
        $retorno = $stm->execute();   
    
        return $retorno;   
           
      } catch (PDOException $e) {   
        echo "Erro: " . $e->getMessage();   
      }   
   }   

	/*   
	* Método público para atualizar os dados na tabela   
	* @param $valores = Array de dados contendo colunas e valores   
	* @param $where = Array de dados contendo colunas e valores para condição WHERE - Exemplo array('$id='=>1)   
	* @return Retorna resultado booleano da instrução SQL   
	*/   
   public function update($tabela,$valores,$where){   
	try {   

	// Atribui a instrução SQL construida no método   
	$sql = $this->buildUpdate($tabela,$valores, $where);   

	// Passa a instrução para o PDO   
	$stm = $this->pdo->prepare($sql);   

	// Loop para passar os dados como parâmetro   
	$cont = 1;   
	foreach ($valores as $valor):   
		$stm->bindValue($cont, $valor);   
		$cont++;   
	endforeach;   
			
	// Loop para passar os dados como parâmetro cláusula WHERE   
	foreach ($where as $valor):   
		$stm->bindValue($cont, $valor);   
		$cont++;   
	endforeach;   

	// Executa a instrução SQL e captura o retorno   
	$retorno = $stm->execute();   

	return $retorno;   
		
	} catch (PDOException $e) {   
	echo "Erro: " . $e->getMessage();   
	}   
   }   
  
	/*   
	* Método público para excluir os dados na tabela   
	* @param $arrayCondicao = Array de dados contendo colunas e valores para condição WHERE - Exemplo array('$id='=>1)   
	* @return Retorna resultado booleano da instrução SQL   
	*/   
   public function delete($tabela, $where){   
	try {   
  
	  // Atribui a instrução SQL construida no método   
	  $sql = $this->buildDelete($tabela, $where);   
  
	  // Passa a instrução para o PDO   
	  $stm = $this->pdo->prepare($sql);   
  
			// Loop para passar os dados como parâmetro cláusula WHERE   
			$cont = 1;   
			foreach ($where as $valor):   
			  $stm->bindValue($cont, $valor);   
			  $cont++;   
			endforeach;   
  
	  // Executa a instrução SQL e captura o retorno   
	  $retorno = $stm->execute();   
  
	  return $retorno;   
		 
	} catch (PDOException $e) {   
	  echo "Erro: " . $e->getMessage();   
	}   
   }   
}

$mysql = new MySQL("localhost", "root", "", "test");
print_r($mysql);
$mysql->insert
?>