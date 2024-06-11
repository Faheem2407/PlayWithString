<?php

namespace Faheem2407\PlayWithString;

class StringHelper
{
	protected $result;
	public __construct(string $value){
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
			 $final += $name[$i];
		}
		return $final;
	}
	public function capitalize(){
		return ucfirst($this->result);
	}
	public function capitalizeAll(){
		return ucwords($this->result);
	}
}