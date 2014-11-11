<?php
	require("../includes/config.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
			if($_POST["del"]==="del"){
				query("DELETE FROM cart WHERE cartid = ?",$_SESSION["cartid"]);
				redirect("/cart.php");
			}
			else{
				query("INSERT INTO CART (cid,pid,qty) values(?,?,1)",$_SESSION["id"],$_POST["pid"]);
				$r=query("SELECT LAST_INSERT_ID() AS cartid");
				$cartid=$r[0]["cartid"];
				$_SESSION["cartid"]=$cartid;
				redirect("/products.php");
			}

	}
	else{
		
		$rows=query("SELECT * from cart where cid=?",$_SESSION["id"]);
		if($rows==false)
			apologize("CART EMPTY");
		else{
			$pro=[];
			$total=0;
			foreach ($rows as $row) {
				# code...
				$s=query("SELECT * from products where pid=?",$row["pid"]);
				$total=$total+$s[0]["price"];
				$pro[]=[
					"name"=>$s[0]["comp_name"],
					"model"=>$s[0]["model"],
					"price"=>$s[0]["price"]
				];
			}
			render("cart_disp.php",["tile"=>"cart","pro"=>$pro,"total"=>$total]);
		}
	}

?>