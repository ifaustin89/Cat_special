<?php


require "config.php";

//this will redirect user to github authorization page
goToAuthUrl();


//if no redirection occur then following shows.
echo "operation failed.";