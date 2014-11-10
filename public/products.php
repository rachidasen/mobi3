<?php
	require("../includes/config.php");

	if($_SERVER["REQUEST_METHOD"]=="GET"){
			if(isset($_GET["name"]))
			{
				$rows=query("SELECT * from products where comp_name=?",$_GET["name"]);
				$num=count($rows);
				//echo $num."<br \>";
				render2("products_info.php","product_c.php",["title"=>"products","rows"=>$rows,"num"=>$num]);
				//echo "hi";
			}
			else
				render("products_info.php",["title"=>"products"]);
			//dump($_SERVER);
			//dump($_GET);
	}
	else
		

?>