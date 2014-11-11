<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){

}
else{
	render("buy_form.php",["tile"=>"deliver"]);
}


?>