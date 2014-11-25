<?php
/**
 * Created by PhpStorm.
 * User: rgojr2001
 * Date: 11/1/2014
 * Time: 7:39 PM
 */

//use WiSport\Forms\RegistrationForm;


class RegistrationController extends BaseController
{

    //private $registrationForm;

    /*function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm->$registrationForm;
    }*/

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function index()
    {

        return View::make('registration.login');
    }
/*
    public function login()
    {

    }
*/
    public function create()
    {
        $teams = Team::lists('teamName','id');
        //$team_options = DB::table('teams')->orderBy('teamName', 'asc')->lists('teamName','id');

        //return $teams;
        return View::make('registration.signup', compact('teams'));
    }

    public function store()
    {
        $validator = Validator::make(Input::all(), User::$rules);

        $date = new DateTime(Input::get('date_of_birth'));
        $now = new DateTime('2014-07-01');
        $ageGroup = $now->diff($date);

        $agId = intval(intval($ageGroup->y) / 5);
        if($agId<3){ $agId = 3; }

        if ($validator->passes()) {
            $firstLetter = strtoupper(substr(Input::get('last_name'), 0, 1));

            $lastId = User::whereRaw("username like ?", ["$firstLetter%"])->orderBy('id', 'desc')->first();

            if ($lastId) {
                $count = substr($lastId['id'], 3, 4);
                $count++;
            } else {
                $count = 1;
            }

            $wisportId = 'WI' . $firstLetter . str_pad($count, 4, 0, STR_PAD_LEFT);

            $password = Hash::make(Input::get('password'));

            $createArray = [
                        'wisportId'     => $wisportId,
                        'username'      => Input::get('username'),
                        'email'         => Input::get('email'),
                        'password'      => $password,
                        'first_name'    => Input::get('first_name'),
                        'last_name'     => Input::get('last_name'),
                        'gender'        => Input::get('gender'),
                        'birth_date'    => Input::get('date_of_birth'),
                        'age_group'     => $agId,
                        'phone'         => Input::get('phone'),
                        'team'          => Input::get('team'),
            ];

            $user = User::create($createArray);


            Auth::login($user);

            Return Redirect::to('/payNow');
        } else {
            return Redirect::to('/signup')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
        }
    }

    public function update($id){

        $user = User::find($id);
        $user->first_name   = Input::get('first_name');
        $user->last_name    = Input::get('last_name');
        $user->email        = Input::get('email');
        $user->phone        = Input::get('phone');
        $user->team         = Input::get('team');

        $user->save();

        return Redirect::to('/payNow');
    }

} 