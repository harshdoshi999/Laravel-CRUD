<?php

class UserController extends BaseController {
	public function addUser(){
		//Create new row from form data.
		$user = User::create(
			array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
			)
		);
		$data['msg'] = "User Added!";	//Success msg.
		return View::make('addUser')->with('data', $data);	//Render addUser with success msg.
	}

	public function delete($id){
		//Find user by 'id'.
		$user = User::find($id);
		//Call delete() function to delete that row.
		$user->delete();
		return Redirect::to('/');
	}

	public function view($id){
		//Find user by 'id'.
		$user = User::find($id);
		//Render view 'user' with data.
		return View::make('user')->with('user', $user);
	}

	public function edit($id){
		$user = User::find($id);
		$data['user'] = $user;
		return View::make('edit')->with('data', $data);
	}

	public function update(){
		//Getting form data.
		$id = Input::get('id');
		$email = Input::get('email');
		$password = Input::get('password');
		//Fetching data from db.
		$user = User::find($id);
		//Updating value.
		$user->email = $email;
		$user->password = $password;
		//Finally call save() method to save data.
		$user->save();
		$data['msg'] = "Changes Saved!";	//Success msg.
		$data['user'] = $user;
		return View::make('edit')->with('data', $data);	//Render 'edit' view with updated data.
	}
}