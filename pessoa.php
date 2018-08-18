<?php
class Pessoa
{
    // nome, data de nascimento, endereço completo e telefones.
    public $nome = 'Maria silva';
	public $endereco = 'R. Dra. Maria Zélia Carneiro de Figueiredo, 870 - A - Igara, Canoas - RS, 92412-240';
	public $telefone = '(51) 34158200';
	public $celular = '(51) 985754578';
	//date in mm/dd/yyyy format; or it can be in other formats as well
    $birthDate = "12/06/1983";

    // declaração de método
    public function idade() {
        // Separa em dia, mês e ano
    list($dia, $mes, $ano) = explode('/', $birthDate);
   
    // Descobre que dia é hoje e retorna a unix timestamp
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
    // Depois apenas fazemos o cálculo já citado :)
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
	
	return $idade;
    }
}
?>