<?php
namespace Testnsm\Classes;
class Child extends Base {
	public function __construct(){
		parent::__construct();
		echo __CLASS__;
	}

	public function sum(int $num1, int $num2) : int {
		return intval($num1) + intval($num2);
	}
}