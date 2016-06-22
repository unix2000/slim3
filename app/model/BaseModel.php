<?php
abstract class BaseModel{
	protected $pdo;
	public function __construct($v){
		$this->pdo = $v;
	}
}