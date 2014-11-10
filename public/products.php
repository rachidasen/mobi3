<?php
	require("../includes/config.php");

	if($_SERVER["REQUEST_METHOD"]=="GET"){
			if(isset($_GET["company"]))
			{
				$rows=query("SELECT * from products ");
				render("products_info.php",["title"=>"products","rows"=>$rows]);
			}
			else
				render("products_info.php",["title"=>"products"]);
	}
	else
		

?>