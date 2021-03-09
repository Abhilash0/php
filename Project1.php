<!DOCTYPE html>
<html>
<head>
	<title>Project1</title>
</head>
<body>
<?php

	abstract class parentClass{
		public $name;

		abstract protected function cal($a, $b);
	}

	class childClass extends parentClass{

		public function cal($c, $d){
			echo $c + $d;
		}
	}

	$obj = new childClass();
	$obj->cal(10, 20);

?>
</body>
</html>