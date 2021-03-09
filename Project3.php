<!DOCTYPE html>
<html>
<head>
	<title>Project3</title>
</head>
<body>
	<?php

	abstract class abhu{

		abstract protected function prefixName($name);
	}

	class abhi extends abhu{
		public function prefixName($name){
			if($name == 'abhilash'){
				$prefix = 'Mr.';
			}
			elseif ($name == 'sharma') {
				$prefix = "Mrs.";
			}
			else{
				$prefix = "";
			}
			return "{$prefix} {$name}";
		}
	}

	$s = new abhi;
	echo $s->prefixName('abhilash');
	echo "<br>";
	echo $s->prefixName('sharma');

	?>

</body>
</html>