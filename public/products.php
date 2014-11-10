<?php
	require("../includes/config.php");

	if($_SERVER["REQUEST_METHOD"]=="GET"){
			if(isset($_GET["name"]))
			{
				$rows=query("SELECT * from products ");
				//render("products_info.php",["title"=>"products","rows"=>$rows]);
				echo "hi";
			}
			else
				render("products_info.php",["title"=>"products"]);
			//dump($_SERVER);
			//dump($_GET);
	}
	else
		

?>