<?php
class IndexController extends BaseController{

    public  function  getIndex ()
    {

        return View::make ('utama.index');

    }

    public function getRegister()
    {
        return View::make('home.register');
    }

    public function getLogin()
    {

        return View::make('home.login');

    }
    public  function postLogin()
    {
        $input = [
            'email'    =>Input::get('email'),
            'password' =>Input::get('password'),
            'remember' =>Input::get('remember')
        ];

        $rules = array(
            'email'    =>'required|email',
            'password' =>'required'
        );

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else {
            try {
// authentikasi admin
                $credentials =array(
                    'email'   =>$input['email'],
                    'password'=>$input['password']
                );
                if($input['remember']==1){
                    $user = Sentry::authenticate($credentials, true);
                }
                else{
                    $user = Sentry::authenticate($credentials, false);
                }

                // Redirect admin ke dashboard
//                return Sentry::getUser();

                return Redirect::to('home/pilihan');
            } catch (Exception $e) {
// kembalikan admin ke halaman sebelumnya (login)
                return Redirect::back();
            }
        }
    }
    public function getLogout()
    {
// Logout admin
        Sentry::logout();
// Redirect admin ke halaman login
        return Redirect::to('login');
    }
//folder tampilan di view

}

/**
 * Created by PhpStorm.
 * User: danivongola
 * Date: 12/27/14
 * Time: 11:18 AM
 */ 