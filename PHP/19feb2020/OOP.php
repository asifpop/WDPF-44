<?php

class employee{
	
	private $name;
	private $title;
	protected $wage;
	public function setName($uname){

		return $this->name = $uname;


	}

	public function getName(){
		return $this->name;
	}
	public function sayhello(){
		echo "My name is ".$this->getName();
	}

}// class employee

class programmer extends employee{

		public function setwage($amount){
			$this->wage = $amount;
		}
		public function getwage(){
			return "Salary is: " . $this->wage;
		}

		public function bonus($percent){
			echo "Bonus: " . $this->wage* $percent/100;
		}
	
	}



	$prog1 = new programmer; 
	$prog1 ->setwage(20000);
	echo $prog1->getwage();
	$prog1-> bonus(10);
	
	$emp2 = new employee;
	$emp2->setName("joy");
	
	$emp2->sayHello();
	$emp3 = new employee;
	$emp3->setName("jerry");
	$emp3->sayHello();
	
	 //class programmer
?>