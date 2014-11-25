<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


    public static $rules = [
        'username'  => 'required|unique:users|min:6',
        'email'     => 'required|email|unique:users',
        'password'  => 'required|confirmed|min:6',
        'first_name'=> 'required|alpha',
        'last_name' => 'required|alpha',
        'gender'    => 'required',
        'birth_date'=> 'required'
    ];

    protected $fillable = ['wisportId','username', 'email', 'password','first_name','last_name','gender','birth_date', 'age_group','phone','team'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function post()
    {

        return $this->hasMany('Post');

    }
}
