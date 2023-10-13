<?php
namespace Nsm;
class Child extends Base {
	public function __construct(){
		super();
	}

	public function sum(int num1, int num2) {
		return intval(num1) + intval(num2);
	}
}