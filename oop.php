<?php 
	class Person{
		private $name;
		private $email;
		
		private static $ageLimit = 40;
		
		// Constructor
		public function __construct($name, $email){
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__. ' created'.'<br>';
		}

		
		public function __destruct(){
			echo __CLASS__ .' destroyed<br>';
		}

		// Set get Name
		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name. '<br>';
		}

		// Set get Email
		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}

		// private static
		public static function getAgeLimit(){
			return self::$ageLimit;
		}
	}

	// $person1 =  new Person('Peter Pep', 'email@email');

	// $person1->setName('Jan Klaas');
	// echo $person1->getName();

	// echo "<hr>";

	// $person1 =  new Person;
	// $person1->setEmail('email@email');
	// echo $person1->getEmail();

	class Customer extends Person{

		private $balance;

		public function __construct($name, $email, $balance){
			$this->balance = $balance;
			parent::__construct($email, $name, $balance);
			echo "A new ".__CLASS__.' Has been created';
		}

		// Set get Email
		public function setBalance($balance){
			$this->balance = $balance;
		}

		public function getBalance(){
			return $this->balance.'<br>';
		}
	}

	$customer1 = new Customer('Peter pep', 'email@email.com', 300);

	//echo $customer1->getBalance();

	// Static property and method
	echo Person::$ageLimit;

	echo Person::$getAgeLimit;






 ?>