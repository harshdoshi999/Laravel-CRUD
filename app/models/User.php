<?php
	class User extends Eloquent{
		//Assigning table to model.
		protected $table = 'users';

		//Assigning mass assign columns.
		protected $fillable = array('email', 'password');

		//Disabling timestamp.
		public $timestamps = false;
	}
?>