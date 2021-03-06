<?php
	session_start();
	require "lib/autoload.php";
	require "controller/controller.php";
	//require("controller/membersController.php");
	//phpinfo();
	/*echo($_SERVER["QUERY_STRING"]);
	print_r(apache_get_modules());

	if(!empty($_SERVER["QUERY_STRING"]))
	{

	}*/

	if(!isset($_GET["action"]))
		showListPosts();
	else
	{
		switch ($_GET["action"]) {
			case 'list':
				showListPosts();
				break;

			case 'post':
				showPost();
				break;

			case 'addComment':
				addComment();
				break;

			case 'addPost':
				if($currentUserController->logged())
				{
					addPost();
				}
				else
					showListPosts();
				break;

			case 'login':
				if(!($currentUserController->logged()))
					showLoginPage();
				else
					showListPosts();
				break;

			case 'register':
				if(!($currentUserController->logged()))
					showRegisterPage();
				else
					showListPosts();
				break;

			case 'logout':
				logout();
				break;
			
			default:
				showListPosts();
				break;
		}
	}