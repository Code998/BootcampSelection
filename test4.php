<?php
	class Handshakes
	{
		public function countHandshakes($numb)
		{
			$temp = 0;
			for ($i=1; $i < $numb; $i++) { 
				$temp = $temp + $i;
			}
			echo $temp;
		}
	}

	$hand = new Handshakes;

	$hand->countHandshakes(6);
?>