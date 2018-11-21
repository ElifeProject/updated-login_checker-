<?php

if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="Admin" ){
	header("Location: index.php?action=logged_in_as_admin");
}

else if(isset($require_login) && $require_login==true){
	if(!isset($_SESSION['access_level'])){
		header("Location:login.php?action=please_login");
	}
}

else if(isset($page_title)&&($page_title=="Login" || $page_title=="SignUp")){
	if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="user"){
		header("Location: index.php?ation=already_logged_in");
	}
}
else{
	//no problem
}

?>