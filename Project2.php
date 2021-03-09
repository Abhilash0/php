<!DOCTYPE html>
<html>
<head>
	<title>Project2</title>
</head>
<body>
	<?php

	abstract class car{
		public $name;
		public function __construct($name) {
			$this->name = $name;
		}
		abstract public function intro() : string;
	}

	class Audi extends car{
		public function intro() : string{
			return "the car $this->name";
		}
	}

	class ferrari extends car{
		public function intro() : string{
			return "this car is $this->name";
		}
	}

	$first = new Audi("Audi");
	echo $first->intro();
	echo "</br>";

	$second = new ferrari('Ferrari');
	echo $second->intro();
	?>

</body>
</html>