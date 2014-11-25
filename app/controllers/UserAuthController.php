<?php
/**
 * Created by PhpStorm.
 * User: rgojr2001
 * Date: 11/1/2014
 * Time: 7:39 PM
 */

class UserAuthController extends BaseController
{

    public function index()
    {
        return View::make('login.login');
    }

    public function login()
    {

        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {

            Session::put('userData', DB::select('select * from users where email = ?', array(Input::get('email'))));

            if($_SERVER['HTTP_REFERER']=='http://localhost:8000/login')
            {

                return Redirect::home();

            } else {

                return Redirect::intended($_SERVER['HTTP_REFERER']);

            }

        } else {

            Session::flash('message', 'Your username/password combination was incorrect.');
            Session::flash('alert-class', 'alert-danger');

            //dd('Login died');

            return View::make('login.login');

        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        Return Redirect::back();
    }

    public function create()
    {

    }

    public function store()
    {

    }
} 