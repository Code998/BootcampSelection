<?php
	class test1
	{
		public $arr1 = [
			"itemId" => "12341822",
			"itemName" => "basic t-shirt",
			"price" => "70000",
			"availableColorAndSize" => [
				[
					"color" => "red",
					"size" => "S, M, L"
				],
				[
					"color" => "solid black",
					"size" => "M, L"
				]
			],
			"freeShiping" => "false"
		];

		public function renderJSON()
		{
			return json_encode($this->arr1);
		}
	}

	$arr = new test1;

	echo $arr->renderJSON();
?>