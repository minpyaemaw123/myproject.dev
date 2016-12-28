<?php


class Books {
	/* Member variables */
	var $price;
	var $title;

	/* Member functions */
	function setPrice($par){
		$this->price = $par;
	}

	function getPrice(){
		echo $this->price ."<br/>";
	}

	function setTitle($par){
		$this->title = $par;
	}

	function getTitle(){
		echo $this->title ." <br/>";
	}
}

$physics = new Books( "Physics for High School", 10 );
$maths = new Books ( "Advanced Chemistry", 15 );
$chemistry = new Books ("Algebra", 7 );

/* Get those set values */
$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();

$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();

Inheritance

PHP class definitions can optionally inherit from a parent class definition by using the extends clause. The syntax is as follows −

class Child extends Parent {
	<definition body>
	}

	The effect of inheritance is that the child class (or subclass or derived class) has the following characteristics −

	Automatically has all the member variable declarations of the parent class.

	Automatically has all the same member functions as the parent, which (by default) will work the same way as those functions do in the parent.

	
	class User
	{
    // Hold an instance of the class
		private static $instance;

    // The singleton method
		public static function singleton()
		{
			if (!isset(self::$instance)) {
				self::$instance = new __CLASS__;
			}
			return self::$instance;
		}

	}
	$user1 = User::singleton();
	$user2 = User::singleton();
	$user3 = User::singleton();
	?>