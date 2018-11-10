<?php
	class test3
	{
		public function segitigaAsli($val)
		{
			if ($val <= 10) {
				for($i=1;$i<=$val;$i++){  
					for($j=1;$j<=$i;$j++){  
						echo $j . ", ";  
					}  
					echo "<br>";  
				}
			}
			else{
				echo "Sorry but The maximum number that can i make is 10";
			}
		}
	}

	$test = new test3;

	echo $test->segitigaAsli(10);
?>