<?php
namespace Nsm;
class Base {
	public function __construct() {
		echo __CLASS__;
	}

	public function getClassName() {
		return __CLASS__;
	}
}