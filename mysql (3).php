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
}

$mysql = new MySQL("localhost", "root", "", "test");
print_r($mysql);
?>