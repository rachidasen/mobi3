<?php

    /**
     * config.php
     *
     * MOBI SHOP3
     * Project DBMS LAB
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

    // require authentication for few pages
    

    if (!preg_match("{(?:login|register|logout|products|index|track)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

     if(preg_match("{(?:login|register)\.php$}",$_SERVER["PHP_SELF"])){
            if(isset($_SESSION["id"]))
                redirect("index.php");
    }
   

?>
