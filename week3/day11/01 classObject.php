<?php

class Books {		//クラスをつくる
	var $price;		//変数variablesを宣言
	var $title;		//変数variablesを宣言

	function setPrice($par) {
		$this->price = $par;
	}

	function getPrice() {
		echo $this->price . "<br>";
	}

	function setTitle($par) {
		$this->title = $par;
	}

	function getTitle() {
		echo $this->title . "<br>";
	}
}

$physics = new Books;		//オブジェクトをつくる
$maths = new Books;			//オブジェクトをつくる
$chemistry = new Books;		//オブジェクトをつくる

$physics->setTitle( "Physics for High School" );
$maths->setTitle( "Algebra" );
$chemistry->setTitle( "Advanced Chemistry" );

$physics->setPrice( 10 );
$maths->setPrice( 15 );
$chemistry->setPrice( 7 );


$physics->getTitle();
$maths->getTitle();
$chemistry->getTitle();

$physics->getPrice();
$maths->getPrice();
$chemistry->getPrice();





?>