<?php 
class luassegitiga{
	public $bil1, $bil2,$bil3;
	public function set_luassegitiga($bilangan1,$bilangan2,$bilangan3)
	{
	$this->bil1 =$bilangan1;
	$this->bil2 =$bilangan2;
	$this->bil3 =$bilangan3;
	}

	
public function get_luassegitiga ()
{
	return $this->bil1 *$this->bil2*$this->bil3;
}

}
