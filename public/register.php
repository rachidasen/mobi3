<?php
	require("../includes/config.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){

		if(empty($_POST["username"]|$_POST["password"]|$_POST["city"]|$_POST["phone"]))
		apologize("FIELDS EMPTY");
	else
		if($_POST["password"]!=$_POST["confirmation"])
				apologize("Password doeesnot match");
			else{
				$result = query("INSERT INTO customer (username, hash, city,phone ) VALUES(?, ?,?,?)", $_POST["username"], crypt($_POST["password"]),$_POST["city"],$_POST["phone"]);
				if($result === false){
						// remember that user's now logged in by storing user's ID in session
                	apologize("USERNAME ALREADY REGISTERED");
				}
				else{
					$rows=query("SELECT LAST_INSERT_ID() AS cid");
					$id = $rows[0]["cid"];
					//logging userx
					$_SESSION["id"] = $id;
					echo "you logiined successfuly".$id."<br\>";
					print "id ".$_SESSION["id"];
					redirect("/");
				}
			}
	}
	else
		render("register_form.php",["title"=>"register"]);

?>