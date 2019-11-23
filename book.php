<?php
class Book {
	private $name1;
	private $price1;
	private $author1;
	private $code;


	function __construct(string $name1,int $price1, string $author1, string $code) {
		$this->name = $name1;
		$this->price = $price1;
		$this->authorB = $author1;
		$this->codeB = $code;
	}

	function setName(string $name1):void {
		$this->nameB = $name1;
	}
	function getName():string {
		return $this->name;
	}

	function setPrice(int $price1):void {
		$this->price = $price1;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	function setAuthor(string $author1):void {
	    $this->authorB = $author1;
	}
	function getAuthor():string {
		return $this->authorB;
	}
	function setCode(string $code):void {
	    $this->codeB = $code;
	}
	function getCode():string {
		return $this->codeB;
	}
}
?>