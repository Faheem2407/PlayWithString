<?php

namespace Faheem2407\PlayWithString;

class StringHelper
{
	protected $result;
	public function __construct(string $value){
		$this->result = $value;
	}
	
	public function upper(){
		return strtoupper($this->result);
	}
	
	public function lower(){
		return strtolower($this->result);
	}
	
	public function reverse(){
		$value = $this->result;
		$final = "";
		for($i=strlen($value)-1; $i>=0; $i--){
			 $final .= $value[$i];
		}
		return $final;
	}

}
