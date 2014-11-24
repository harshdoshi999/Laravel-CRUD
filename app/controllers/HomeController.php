<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		$users = User::all();	//Get all rows from user table. Here User is model name.
		return View::make('index')->with('users', $users);	//Render view with data.
	}

	public function addUser()
	{
		return View::make('addUser');	//Render 'addUser' view.
	}
}