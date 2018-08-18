<?php
class Pessoa
{
    // declaração de membro
    public $nome = 'elvis';
	public $data_nasc = '13/04/2013';
	public $endereco = 'Rua X';
	public $telefone = '99999999';

    // declaração de método
	public function idade(){
		$data_nasc = $this->data_nasc;
		$tz  = new DateTimeZone('Europe/Brussels');
		$idade = DateTime::createFromFormat('d/m/Y', $data_nasc, $tz)
				->diff(new DateTime('now', $tz))
				->y;
		return $idade;
	}
}

?>