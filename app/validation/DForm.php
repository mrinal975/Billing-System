<?php
/**
* Validating Input field
*/
class DForm 
{
	public $currentValue;
	public $value=array();
	public $error=array();
	function __construct(){
		
	}
	public function post($key){
		$this->value[$key]=trim($_POST[$key]);
		$this->currentValue=$key;
		return $this;
	}
	public function isempty(){
		if (empty($this->value[$this->currentValue])) {
			$this->error[$this->currentValue]['empty']="Field must not be empty";
		}
		return $this;
	}
	public function length($min=0,$max){
		if (strlen($this->value[$this->currentValue])<$min OR strlen($this->value[$this->currentValue])>$max) {
			$this->error[$this->currentValue]['length']="Minimun length must be".$min."Maximum length must be".$max;
		}
		return $this;
	}
	public function issubmit(){
		if (empty($this->error)) {
			return true;
		}else{
			return false;
		}
	}

	public function phn_validate(){
		if (!preg_match("/^01[56789]{1}[0-9]{8}$/",$this->value[$this->currentValue])) {
			$this->error[$this->currentValue]['empty']="Invalid phone number";
			return $this;
		}
	}
}
?>