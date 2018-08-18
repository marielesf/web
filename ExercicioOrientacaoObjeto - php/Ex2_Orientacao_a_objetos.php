<?php
include('Ex1_Orientacao_a_objetos.php');
class Funcionario extends Pessoa
{
    // declaração de membro
    public $cargo = 'aluno';
	public $salario = '1000';
	public $data_ad = '03/03/2014';
	

    // declaração de método
	public function imposto(){
		$salario = $this->salario;
		return ($salario*0.27);
	}
	
	public function tempo(){
		$data_ad = $this->data_ad;
		$tz  = new DateTimeZone('Europe/Brussels');
		$tempo = DateTime::createFromFormat('d/m/Y', $data_ad, $tz)
				->diff(new DateTime('now', $tz))
				;
		return ($tempo->y*12)+$tempo->m; //tempo em meses de trabalho
	}
}
?>