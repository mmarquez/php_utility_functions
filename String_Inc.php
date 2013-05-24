<?php
/**
 * Create a sequence of characters of 3 letters
 */
class StringInc{
  public $current = array();
	
	function __construct(){
		$this->current[0] = 'A';
		$this->current[1] = 'A';
		$this->current[2] = 'A';
	}
	
	public function toString(){
		return $this->current[0].$this->current[1].$this->current[2];
	}
	
	public function next(){
		if ($this->current[2] != 'Z'){
			$this->current[2]++;
		}else{
			$this->current[2] = 'A';
			
			if ($this->current[1] != 'Z'){
				$this->current[1]++;
			}else{
				$this->current[2] = 'A';
				$this->current[1] = 'A';
				
				if ($this->current[0] != 'Z'){
					$this->current[0]++;
				}else
					return false;
			}
		}
		return true;
	}
};
