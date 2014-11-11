<?php
	require("../includes/config.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){

	}
	else
		render("register_form.php",["title"=>"register"]);

?>